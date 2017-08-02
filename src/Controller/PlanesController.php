<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Planes Controller
 *
 * @property \App\Model\Table\PlanesTable $Planes
 *
 * @method \App\Model\Entity\Plane[] paginate($object = null, array $settings = [])
 */
class PlanesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $planes = $this->paginate($this->Planes);

        $this->set(compact('planes'));
        $this->set('_serialize', ['planes']);
    }

    /**
     * View method
     *
     * @param string|null $id Plane id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $plane = $this->Planes->get($id, [
            'contain' => []
        ]);

        $this->set('plane', $plane);
        $this->set('_serialize', ['plane']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $plane = $this->Planes->newEntity();
        if ($this->request->is('post')) {
            $plane = $this->Planes->patchEntity($plane, $this->request->getData());
            if ($this->Planes->save($plane)) {
                $this->Flash->success(__('The plane has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plane could not be saved. Please, try again.'));
        }
        $this->set(compact('plane'));
        $this->set('_serialize', ['plane']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Plane id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $plane = $this->Planes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plane = $this->Planes->patchEntity($plane, $this->request->getData());
            if ($this->Planes->save($plane)) {
                $this->Flash->success(__('The plane has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plane could not be saved. Please, try again.'));
        }
        $this->set(compact('plane'));
        $this->set('_serialize', ['plane']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Plane id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $plane = $this->Planes->get($id);
        if ($this->Planes->delete($plane)) {
            $this->Flash->success(__('The plane has been deleted.'));
        } else {
            $this->Flash->error(__('The plane could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
