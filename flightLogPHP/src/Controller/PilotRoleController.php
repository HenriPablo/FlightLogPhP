<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PilotRole Controller
 *
 * @property \App\Model\Table\PilotRoleTable $PilotRole
 */
class PilotRoleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pilotRole = $this->paginate($this->PilotRole);

        $this->set(compact('pilotRole'));
        $this->set('_serialize', ['pilotRole']);
    }

    /**
     * View method
     *
     * @param string|null $id Pilot Role id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pilotRole = $this->PilotRole->get($id, [
            'contain' => ['PilotPilotRoleXref']
        ]);

        $this->set('pilotRole', $pilotRole);
        $this->set('_serialize', ['pilotRole']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pilotRole = $this->PilotRole->newEntity();
        if ($this->request->is('post')) {
            $pilotRole = $this->PilotRole->patchEntity($pilotRole, $this->request->data);
            if ($this->PilotRole->save($pilotRole)) {
                $this->Flash->success(__('The pilot role has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pilot role could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pilotRole'));
        $this->set('_serialize', ['pilotRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pilot Role id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pilotRole = $this->PilotRole->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pilotRole = $this->PilotRole->patchEntity($pilotRole, $this->request->data);
            if ($this->PilotRole->save($pilotRole)) {
                $this->Flash->success(__('The pilot role has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pilot role could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pilotRole'));
        $this->set('_serialize', ['pilotRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pilot Role id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pilotRole = $this->PilotRole->get($id);
        if ($this->PilotRole->delete($pilotRole)) {
            $this->Flash->success(__('The pilot role has been deleted.'));
        } else {
            $this->Flash->error(__('The pilot role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
