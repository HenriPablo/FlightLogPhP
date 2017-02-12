<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Flight Controller
 *
 * @property \App\Model\Table\FlightTable $Flight
 */
class FlightController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aircraft', 'Pilot']
        ];
        $flight = $this->paginate($this->Flight);

        $this->set(compact('flight'));
        $this->set('_serialize', ['flight']);
    }

    /**
     * View method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flight = $this->Flight->get($id, [
            'contain' => ['Aircraft', 'Pilot', 'FlightExtendedDetails', 'Story', 'FlightPilotXref']
        ]);

        $this->set('flight', $flight);
        $this->set('_serialize', ['flight']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Airport' );
        $this->set('airport', $this->Airport->find('all', array('fields' => array('Airport.id', 'Airport.name', 'Airport.ico_identifier')))  );
        // var_dump( $this->airport);
        //var_dump(get_defined_vars());
        $this->loadModel('Aircraft');
        $this->set('aircraft', $this->Aircraft->find('list', array('fields' => array('Aircraft.id','Aircraft.aircraft_tail_number'))));

        $flight = $this->Flight->newEntity();
        if ($this->request->is('post')) {
            $flight = $this->Flight->patchEntity($flight, $this->request->data);
            debug( $flight );

            /*$errors = $this->Flight->validate();// or perhaps validationError(), please confirm
            if(!$errors) {
                $this->Flight->save();
            }else{
                //show errors
                pr($errors);
            }*/

            if ($this->Flight->save($flight)) {
                $this->Flash->success(__('The flight has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                //debug($this->Flight->validationErrors); //show validationErrors
                //debug($this->Flight->getDataSource()->getLog(false, false)); //show last sql query
                $this->Flash->error( __('The flight could not be saved. Please, try again.') );
            }
        }
        $aircraft = $this->Flight->Aircraft->find('list', ['limit' => 200]);
        $pilot = $this->Flight->Pilot->find('list', ['limit' => 200]);
        $this->set(compact('flight', 'aircraft', 'pilot'));
        $this->set('_serialize', ['flight']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flight = $this->Flight->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flight = $this->Flight->patchEntity($flight, $this->request->data);
            if ($this->Flight->save($flight)) {
                $this->Flash->success(__('The flight has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The flight could not be saved. Please, try again.'));
            }
        }
        $aircraft = $this->Flight->Aircraft->find('list', ['limit' => 200]);
        $pilot = $this->Flight->Pilot->find('list', ['limit' => 200]);
        $this->set(compact('flight', 'aircraft', 'pilot'));
        $this->set('_serialize', ['flight']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flight id.
     * @return \Cake\Network\Response|null Redirects to index.
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
