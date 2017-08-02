<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cuotas Controller
 *
 * @property \App\Model\Table\CuotasTable $Cuotas
 *
 * @method \App\Model\Entity\Cuota[] paginate($object = null, array $settings = [])
 */
class CuotasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
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
