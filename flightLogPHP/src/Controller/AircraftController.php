<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aircraft Controller
 *
 * @property \App\Model\Table\AircraftTable $Aircraft
 */
class AircraftController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aircraft = $this->paginate($this->Aircraft);

        $this->set(compact('aircraft'));
        $this->set('_serialize', ['aircraft']);
    }

    /**
     * View method
     *
     * @param string|null $id Aircraft id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aircraft = $this->Aircraft->get($id, [
            'contain' => ['Flight']
        ]);

        $this->set('aircraft', $aircraft);
        $this->set('_serialize', ['aircraft']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aircraft = $this->Aircraft->newEntity();
        if ($this->request->is('post')) {
            $aircraft = $this->Aircraft->patchEntity($aircraft, $this->request->data);
            if ($this->Aircraft->save($aircraft)) {
                $this->Flash->success(__('The aircraft has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aircraft could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aircraft'));
        $this->set('_serialize', ['aircraft']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aircraft id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aircraft = $this->Aircraft->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aircraft = $this->Aircraft->patchEntity($aircraft, $this->request->data);
            if ($this->Aircraft->save($aircraft)) {
                $this->Flash->success(__('The aircraft has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aircraft could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aircraft'));
        $this->set('_serialize', ['aircraft']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aircraft id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aircraft = $this->Aircraft->get($id);
        if ($this->Aircraft->delete($aircraft)) {
            $this->Flash->success(__('The aircraft has been deleted.'));
        } else {
            $this->Flash->error(__('The aircraft could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
