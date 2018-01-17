<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Flight Controller
 *
 * @property \App\Model\Table\FlightTable $Flight
 *
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FlightController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $flight = $this->paginate($this->Flight);

        $this->set(compact('flight'));
    }

    /**
     * View method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flight = $this->Flight->get($id, [
            'contain' => ['Actingas', 'Crw']
        ]);

        $this->set('flight', $flight);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flight = $this->Flight->newEntity();
        if ($this->request->is('post')) {
            $flight = $this->Flight->patchEntity($flight, $this->request->getData());
            if ($this->Flight->save($flight)) {
                $this->Flash->success(__('The flight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight could not be saved. Please, try again.'));
        }
        $actingas = $this->Flight->Actingas->find('list', ['limit' => 200]);
        $crw = $this->Flight->Crw->find('list', ['limit' => 200]);
        $this->set(compact('flight', 'actingas', 'crw'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flight = $this->Flight->get($id, [
            'contain' => ['Actingas', 'Crw']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flight = $this->Flight->patchEntity($flight, $this->request->getData());
            if ($this->Flight->save($flight)) {
                $this->Flash->success(__('The flight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The flight could not be saved. Please, try again.'));
        }
        $actingas = $this->Flight->Actingas->find('list', ['limit' => 200]);
        $crw = $this->Flight->Crw->find('list', ['limit' => 200]);
        $this->set(compact('flight', 'actingas', 'crw'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flight = $this->Flight->get($id);
        if ($this->Flight->delete($flight)) {
            $this->Flash->success(__('The flight has been deleted.'));
        } else {
            $this->Flash->error(__('The flight could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
