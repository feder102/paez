<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
/**
 * Cuotas Controller
 *
 * @property \App\Model\Table\CuotasTable $Cuotas
 *
 * @method \App\Model\Entity\Cuota[] paginate($object = null, array $settings = [])
 */
class CuotasController extends AppController
{
    public $paginate = [
         'limit' => 20,
         'order' => [
            'Clientes.RAZON_SOCI' => 'asc'
         ]
      ];
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
      parent::initialize();
      $this->loadComponent('Paginator');
    }
    public function index()
    {
        $cuotas = $this->paginate($this->Cuotas);

        $this->set(compact('cuotas'));
        $this->set('_serialize', ['cuotas']);
    }

    /**
     * View method
     *
     * @param string|null $id Cuota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cuota = $this->Cuotas->get($id, [
            'contain' => []
        ]);

        $this->set('cuota', $cuota);
        $this->set('_serialize', ['cuota']);
    }
    public function DayReportInit(){
      // $query = $this->Cuotas->find('all')
      //       ->join([
      //           'Comprobantes' => [
      //               'table' => 'comprobantes',
      //               'type' => 'inner',
      //               'conditions' => 'Cuotas.N_COMP = Comprobantes.N_COMP',
      //           ]
      //       ])->toArray();

//EL DE ABAJO FUNCIONA PERO NO ANDA EL PAGINATOR
      // $connection = ConnectionManager::get('default');
      // $sql_todo = $connection->execute('SELECT comprobantes.cod_client,clientes.razon_soci,comprobantes.cod_vended,cuotas.ESTADO_VTO,cuotas.importe_vt
      //         FROM cuotas left join comprobantes on cuotas.N_COMP =comprobantes.n_comp left join clientes on comprobantes.cod_client=clientes.COD_CLIENT
      //         order by cuotas.id_cuota')->fetchAll('assoc');

      $query = $this->Cuotas->find()
                ->select(['ID_CUOTA','c.COD_CLIENT','ESTADO_VTO','cl.RAZON_SOCI', 'c.COD_VENDED','Cuotas.N_COMP_CAN','Cuotas.FECHA_CAN','Cuotas.IMPORTE_VT'])
                ->join([
                        'table' => 'Comprobantes',
                        'alias' => 'c',
                        'type' => 'INNER',
                        'conditions' => 'c.N_COMP = Cuotas.N_COMP',
                ])
                ->contain(['Comprobantes','Comprobantes.Clientes'])
                ->join(['table' => 'Clientes',
                'alias' => 'cl',
                'type' => 'INNER',
                'conditions' => 'cl.COD_CLIENT = c.COD_CLIENT',
                ])
                ->autoFields(true);
      $sql_todo = $this->paginate($query);
      //POR LAS COSAS QUE SE VEN EN LAS LINEAS DE ABAJO, AMO EL CAKEPHP3 ESTOY TOMANDO EL MODELO DE UNA CLASE QUE NO ESTA RELACIONADA CON CUOTA Y ASI TOD FUNCIONA
      $this->Vendedores = TableRegistry::get('Vendedores');
      $vendedores = $this->Vendedores->find('all');
      $this->set(compact('todos','vendedores'));
      $this->set(array('todos'=> $sql_todo,
                        'vendedores'=>$vendedores
                ));
    }
    public function pendientes($cod_vended = null){
      $this->autoRender = false;
      // $this->layout = ($this->request->is("ajax")) ? "ajax" : "default";
      // $connection = ConnectionManager::get('default');
      // $sql_pen = $connection->execute('SELECT comprobantes.cod_client,clientes.razon_soci,comprobantes.cod_vended,cuotas.ESTADO_VTO,cuotas.importe_vt
      //             FROM cuotas left join comprobantes on cuotas.N_COMP =comprobantes.n_comp left join clientes on comprobantes.cod_client=clientes.COD_CLIENT
      //             where cuotas.estado_vto= "PEN"
      //             order by cuotas.id_cuota')->fetchAll('assoc');

      if($cod_vended == -1){
        $sql_pen = $this->Cuotas->find()
                  ->select(['ID_CUOTA','ESTADO_VTO','c.COD_CLIENT','cl.RAZON_SOCI', 'c.COD_VENDED','Cuotas.N_COMP_CAN','Cuotas.FECHA_CAN','Cuotas.IMPORTE_VT'])
                  ->join([
                          'table' => 'Comprobantes',
                          'alias' => 'c',
                          'type' => 'INNER',
                          'conditions' => 'c.N_COMP = Cuotas.N_COMP',
                  ])
                  ->distinct ('ID_CUOTA')
                  ->where(['Cuotas.ESTADO_VTO'=> 'PEN'])
                  ->contain(['Comprobantes','Comprobantes.Clientes'])
                  ->join(['table' => 'Clientes',
                  'alias' => 'cl',
                  'type' => 'INNER',
                  'conditions' => 'cl.COD_CLIENT = c.COD_CLIENT',
                  ])
                  ->autoFields(true);
      }else{
        $sql_pen = $this->Cuotas->find()
                  ->select(['ID_CUOTA','ESTADO_VTO','c.COD_CLIENT','cl.RAZON_SOCI', 'c.COD_VENDED','Cuotas.N_COMP_CAN','Cuotas.FECHA_CAN','Cuotas.IMPORTE_VT'])
                  ->join([
                          'table' => 'Comprobantes',
                          'alias' => 'c',
                          'type' => 'INNER',
                          'conditions' => 'c.N_COMP = Cuotas.N_COMP',
                  ])
                  ->distinct ('ID_CUOTA')
                  ->where(['Cuotas.ESTADO_VTO'=> 'PEN','c.COD_VENDED'=> $cod_vended])
                  ->contain(['Comprobantes','Comprobantes.Clientes'])
                  ->join(['table' => 'Clientes',
                  'alias' => 'cl',
                  'type' => 'INNER',
                  'conditions' => 'cl.COD_CLIENT = c.COD_CLIENT',
                  ])
                  ->autoFields(true);
      }
      // pr($sql_pen->toArray());
      $a = array();
      $a = $sql_pen->toArray();//CASTEA LA VARIABLE EN UN ARREGLO
      $a = print_r(json_encode($a));// CONVIERTE EL ARREGLO EN UN ARREGLO JSON PARA QUE PUEDA SER LEIDO EN LA FUNCION GET YA QUE ESTA SOLO LEE TEXTOS PLANOS Y JSON
        // pr($a);
      $this->set(compact(array(
          'data' => $a,
           '_serialize' => array('data')
      )));
    }
    public function cobrados($cod_vended = null){
      $this->autoRender = false;
      // $connection = ConnectionManager::get('default');
      // $results = $connection->execute('SELECT comprobantes.cod_client,clientes.razon_soci,comprobantes.cod_vended,cuotas.ESTADO_VTO,cuotas.importe_vt
      //             FROM cuotas left join comprobantes on cuotas.N_COMP =comprobantes.n_comp left join clientes on comprobantes.cod_client=clientes.COD_CLIENT
      //             where cuotas.estado_vto="CAN"
      //             order by cuotas.id_cuota')->fetchAll('assoc');
      if($cod_vended == -1){
        $sql_cobrados = $this->Cuotas->find()
                  ->select(['c.COD_CLIENT','ESTADO_VTO','cl.RAZON_SOCI', 'c.COD_VENDED','Cuotas.N_COMP_CAN','Cuotas.FECHA_CAN','Cuotas.IMPORTE_VT'])
                  ->join([
                          'table' => 'Comprobantes',
                          'alias' => 'c',
                          'type' => 'INNER',
                          'conditions' => 'c.N_COMP = Cuotas.N_COMP',
                  ])
                  ->where(['Cuotas.ESTADO_VTO'=> 'CAN'])
                  ->contain(['Comprobantes','Comprobantes.Clientes'])
                  ->join(['table' => 'Clientes',
                  'alias' => 'cl',
                  'type' => 'INNER',
                  'conditions' => 'cl.COD_CLIENT = c.COD_CLIENT',
                  ])
                  ->autoFields(true);
      }else{
        $sql_cobrados = $this->Cuotas->find()
                  ->select(['c.COD_CLIENT','ESTADO_VTO','cl.RAZON_SOCI', 'c.COD_VENDED','Cuotas.N_COMP_CAN','Cuotas.FECHA_CAN','Cuotas.IMPORTE_VT'])
                  ->join([
                          'table' => 'Comprobantes',
                          'alias' => 'c',
                          'type' => 'INNER',
                          'conditions' => 'c.N_COMP = Cuotas.N_COMP',
                  ])
                  ->where(['Cuotas.ESTADO_VTO'=> 'CAN','c.COD_VENDED'=> $cod_vended])
                  ->contain(['Comprobantes','Comprobantes.Clientes'])
                  ->join(['table' => 'Clientes',
                  'alias' => 'cl',
                  'type' => 'INNER',
                  'conditions' => 'cl.COD_CLIENT = c.COD_CLIENT',
                  ])
                  ->autoFields(true);
      }


                // $sql_pen = $this->paginate($query);
      $a = array();
      $a = $sql_cobrados->toArray();//CASTEA LA VARIABLE EN UN ARREGLO
      $a = print_r(json_encode($a));// CONVIERTE EL ARREGLO EN UN ARREGLO JSON PARA QUE PUEDA SER LEIDO EN LA FUNCION GET YA QUE ESTA SOLO LEE TEXTOS PLANOS Y JSON
        // pr($a);
      $this->set(compact(array(
          'data' => $a,
           '_serialize' => array('data')
      )));
    }
    public function todosajax($cod_vended = null){
      $this->autoRender = false;
      if($cod_vended == -1){
        $sql = $this->Cuotas->find()
                  ->select(['ID_CUOTA','c.COD_CLIENT','ESTADO_VTO','cl.RAZON_SOCI', 'c.COD_VENDED','Cuotas.N_COMP_CAN','Cuotas.FECHA_CAN','Cuotas.IMPORTE_VT'])
                  ->join([
                          'table' => 'Comprobantes',
                          'alias' => 'c',
                          'type' => 'INNER',
                          'conditions' => 'c.N_COMP = Cuotas.N_COMP',
                  ])
                  ->contain(['Comprobantes','Comprobantes.Clientes'])
                  ->join(['table' => 'Clientes',
                  'alias' => 'cl',
                  'type' => 'INNER',
                  'conditions' => 'cl.COD_CLIENT = c.COD_CLIENT',
                  ])
                  ->autoFields(true);
      }else{
        $sql = $this->Cuotas->find()
                            ->select(['ID_CUOTA','c.COD_CLIENT','ESTADO_VTO','cl.RAZON_SOCI', 'c.COD_VENDED','Cuotas.N_COMP_CAN','Cuotas.FECHA_CAN','Cuotas.IMPORTE_VT'])
                            ->join([
                                    'table' => 'Comprobantes',
                                    'alias' => 'c',
                                    'type' => 'INNER',
                                    'conditions' => 'c.N_COMP = Cuotas.N_COMP',
                            ])
                            ->where(['c.COD_VENDED'=> $cod_vended])
                            ->contain(['Comprobantes','Comprobantes.Clientes'])
                            ->join(['table' => 'Clientes',
                            'alias' => 'cl',
                            'type' => 'INNER',
                            'conditions' => 'cl.COD_CLIENT = c.COD_CLIENT',
                            ])
                            ->autoFields(true);
      }


                $sql = $this->paginate($sql);
      $a = array();
      $a = $sql->toArray();//CASTEA LA VARIABLE EN UN ARREGLO
      $a = print_r(json_encode($a));// CONVIERTE EL ARREGLO EN UN ARREGLO JSON PARA QUE PUEDA SER LEIDO EN LA FUNCION GET YA QUE ESTA SOLO LEE TEXTOS PLANOS Y JSON
        // pr($a);
      $this->set(compact(array(
          'data' => $a,
           '_serialize' => array('data')
      )));
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cuota = $this->Cuotas->newEntity();
        if ($this->request->is('post')) {
            $cuota = $this->Cuotas->patchEntity($cuota, $this->request->getData());
            if ($this->Cuotas->save($cuota)) {
                $this->Flash->success(__('The cuota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cuota could not be saved. Please, try again.'));
        }
        $this->set(compact('cuota'));
        $this->set('_serialize', ['cuota']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cuota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cuota = $this->Cuotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cuota = $this->Cuotas->patchEntity($cuota, $this->request->getData());
            if ($this->Cuotas->save($cuota)) {
                $this->Flash->success(__('The cuota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cuota could not be saved. Please, try again.'));
        }
        $this->set(compact('cuota'));
        $this->set('_serialize', ['cuota']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cuota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cuota = $this->Cuotas->get($id);
        if ($this->Cuotas->delete($cuota)) {
            $this->Flash->success(__('The cuota has been deleted.'));
        } else {
            $this->Flash->error(__('The cuota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
