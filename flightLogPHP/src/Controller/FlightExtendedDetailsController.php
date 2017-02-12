<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FlightExtendedDetails Controller
 *
 * @property \App\Model\Table\FlightExtendedDetailsTable $FlightExtendedDetails
 */
class FlightExtendedDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Flight']
        ];
        $flightExtendedDetails = $this->paginate($this->FlightExtendedDetails);

        $this->set(compact('flightExtendedDetails'));
        $this->set('_serialize', ['flightExtendedDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Flight Extended Detail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flightExtendedDetail = $this->FlightExtendedDetails->get($id, [
            'contain' => ['Flight']
        ]);

        $this->set('flightExtendedDetail', $flightExtendedDetail);
        $this->set('_serialize', ['flightExtendedDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flightExtendedDetail = $this->FlightExtendedDetails->newEntity();
        if ($this->request->is('post')) {
            $flightExtendedDetail = $this->FlightExtendedDetails->patchEntity($flightExtendedDetail, $this->request->data);
            if ($this->FlightExtendedDetails->save($flightExtendedDetail)) {
                $this->Flash->success(__('The flight extended detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flight extended detail could not be saved. Please, try again.'));
            }
        }
        $flight = $this->FlightExtendedDetails->Flight->find('list', ['limit' => 200]);
        $this->set(compact('flightExtendedDetail', 'flight'));
        $this->set('_serialize', ['flightExtendedDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight Extended Detail id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flightExtendedDetail = $this->FlightExtendedDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flightExtendedDetail = $this->FlightExtendedDetails->patchEntity($flightExtendedDetail, $this->request->data);
            if ($this->FlightExtendedDetails->save($flightExtendedDetail)) {
                $this->Flash->success(__('The flight extended detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flight extended detail could not be saved. Please, try again.'));
            }
        }
        $flight = $this->FlightExtendedDetails->Flight->find('list', ['limit' => 200]);
        $this->set(compact('flightExtendedDetail', 'flight'));
        $this->set('_serialize', ['flightExtendedDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight Extended Detail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flightExtendedDetail = $this->FlightExtendedDetails->get($id);
        if ($this->FlightExtendedDetails->delete($flightExtendedDetail)) {
            $this->Flash->success(__('The flight extended detail has been deleted.'));
        } else {
            $this->Flash->error(__('The flight extended detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
