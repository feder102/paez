<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Zonas Controller
 *
 * @property \App\Model\Table\ZonasTable $Zonas
 *
 * @method \App\Model\Entity\Zona[] paginate($object = null, array $settings = [])
 */
class ZonasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $zonas = $this->paginate($this->Zonas);

        $this->set(compact('zonas'));
        $this->set('_serialize', ['zonas']);
    }

    /**
     * View method
     *
     * @param string|null $id Zona id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zona = $this->Zonas->get($id, [
            'contain' => []
        ]);

        $this->set('zona', $zona);
        $this->set('_serialize', ['zona']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zona = $this->Zonas->newEntity();
        if ($this->request->is('post')) {
            $zona = $this->Zonas->patchEntity($zona, $this->request->getData());
            if ($this->Zonas->save($zona)) {
                $this->Flash->success(__('The zona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zona could not be saved. Please, try again.'));
        }
        $this->set(compact('zona'));
        $this->set('_serialize', ['zona']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Zona id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zona = $this->Zonas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zona = $this->Zonas->patchEntity($zona, $this->request->getData());
            if ($this->Zonas->save($zona)) {
                $this->Flash->success(__('The zona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zona could not be saved. Please, try again.'));
        }
        $this->set(compact('zona'));
        $this->set('_serialize', ['zona']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Zona id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zona = $this->Zonas->get($id);
        if ($this->Zonas->delete($zona)) {
            $this->Flash->success(__('The zona has been deleted.'));
        } else {
            $this->Flash->error(__('The zona could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
