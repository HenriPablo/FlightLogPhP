<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FlightTimeTotalToDate Controller
 *
 * @property \App\Model\Table\FlightTimeTotalToDateTable $FlightTimeTotalToDate
 */
class FlightTimeTotalToDateController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $flightTimeTotalToDate = $this->paginate($this->FlightTimeTotalToDate);

        $this->set(compact('flightTimeTotalToDate'));
        $this->set('_serialize', ['flightTimeTotalToDate']);
    }

    /**
     * View method
     *
     * @param string|null $id Flight Time Total To Date id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flightTimeTotalToDate = $this->FlightTimeTotalToDate->get($id, [
            'contain' => []
        ]);

        $this->set('flightTimeTotalToDate', $flightTimeTotalToDate);
        $this->set('_serialize', ['flightTimeTotalToDate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flightTimeTotalToDate = $this->FlightTimeTotalToDate->newEntity();
        if ($this->request->is('post')) {
            $flightTimeTotalToDate = $this->FlightTimeTotalToDate->patchEntity($flightTimeTotalToDate, $this->request->data);
            if ($this->FlightTimeTotalToDate->save($flightTimeTotalToDate)) {
                $this->Flash->success(__('The flight time total to date has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flight time total to date could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('flightTimeTotalToDate'));
        $this->set('_serialize', ['flightTimeTotalToDate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight Time Total To Date id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flightTimeTotalToDate = $this->FlightTimeTotalToDate->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flightTimeTotalToDate = $this->FlightTimeTotalToDate->patchEntity($flightTimeTotalToDate, $this->request->data);
            if ($this->FlightTimeTotalToDate->save($flightTimeTotalToDate)) {
                $this->Flash->success(__('The flight time total to date has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flight time total to date could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('flightTimeTotalToDate'));
        $this->set('_serialize', ['flightTimeTotalToDate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight Time Total To Date id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flightTimeTotalToDate = $this->FlightTimeTotalToDate->get($id);
        if ($this->FlightTimeTotalToDate->delete($flightTimeTotalToDate)) {
            $this->Flash->success(__('The flight time total to date has been deleted.'));
        } else {
            $this->Flash->error(__('The flight time total to date could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
