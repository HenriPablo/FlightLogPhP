<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pilot Controller
 *
 * @property \App\Model\Table\PilotTable $Pilot
 */
class PilotController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pilot = $this->paginate($this->Pilot);

        $this->set(compact('pilot'));
        $this->set('_serialize', ['pilot']);
    }

    /**
     * View method
     *
     * @param string|null $id Pilot id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pilot = $this->Pilot->get($id, [
            'contain' => ['FlightPilotXref', 'PilotPilotRoleXref']
        ]);

        $this->set('pilot', $pilot);
        $this->set('_serialize', ['pilot']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pilot = $this->Pilot->newEntity();
        if ($this->request->is('post')) {
            $pilot = $this->Pilot->patchEntity($pilot, $this->request->data);
            if ($this->Pilot->save($pilot)) {
                $this->Flash->success(__('The pilot has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pilot could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pilot'));
        $this->set('_serialize', ['pilot']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pilot id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pilot = $this->Pilot->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pilot = $this->Pilot->patchEntity($pilot, $this->request->data);
            if ($this->Pilot->save($pilot)) {
                $this->Flash->success(__('The pilot has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pilot could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pilot'));
        $this->set('_serialize', ['pilot']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pilot id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pilot = $this->Pilot->get($id);
        if ($this->Pilot->delete($pilot)) {
            $this->Flash->success(__('The pilot has been deleted.'));
        } else {
            $this->Flash->error(__('The pilot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
