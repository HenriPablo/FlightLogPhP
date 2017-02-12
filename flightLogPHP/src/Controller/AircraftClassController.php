<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AircraftClass Controller
 *
 * @property \App\Model\Table\AircraftClassTable $AircraftClass
 */
class AircraftClassController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aircraftClass = $this->paginate($this->AircraftClass);

        $this->set(compact('aircraftClass'));
        $this->set('_serialize', ['aircraftClass']);
    }

    /**
     * View method
     *
     * @param string|null $id Aircraft Clas id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aircraftClas = $this->AircraftClass->get($id, [
            'contain' => []
        ]);

        $this->set('aircraftClas', $aircraftClas);
        $this->set('_serialize', ['aircraftClas']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aircraftClas = $this->AircraftClass->newEntity();
        if ($this->request->is('post')) {
            $aircraftClas = $this->AircraftClass->patchEntity($aircraftClas, $this->request->data);
            if ($this->AircraftClass->save($aircraftClas)) {
                $this->Flash->success(__('The aircraft clas has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aircraft clas could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aircraftClas'));
        $this->set('_serialize', ['aircraftClas']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aircraft Clas id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aircraftClas = $this->AircraftClass->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aircraftClas = $this->AircraftClass->patchEntity($aircraftClas, $this->request->data);
            if ($this->AircraftClass->save($aircraftClas)) {
                $this->Flash->success(__('The aircraft clas has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aircraft clas could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aircraftClas'));
        $this->set('_serialize', ['aircraftClas']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aircraft Clas id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aircraftClas = $this->AircraftClass->get($id);
        if ($this->AircraftClass->delete($aircraftClas)) {
            $this->Flash->success(__('The aircraft clas has been deleted.'));
        } else {
            $this->Flash->error(__('The aircraft clas could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
