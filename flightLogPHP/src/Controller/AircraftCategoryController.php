<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AircraftCategory Controller
 *
 * @property \App\Model\Table\AircraftCategoryTable $AircraftCategory
 */
class AircraftCategoryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $aircraftCategory = $this->paginate($this->AircraftCategory);

        $this->set(compact('aircraftCategory'));
        $this->set('_serialize', ['aircraftCategory']);
    }

    /**
     * View method
     *
     * @param string|null $id Aircraft Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aircraftCategory = $this->AircraftCategory->get($id, [
            'contain' => []
        ]);

        $this->set('aircraftCategory', $aircraftCategory);
        $this->set('_serialize', ['aircraftCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aircraftCategory = $this->AircraftCategory->newEntity();
        if ($this->request->is('post')) {
            $aircraftCategory = $this->AircraftCategory->patchEntity($aircraftCategory, $this->request->data);
            if ($this->AircraftCategory->save($aircraftCategory)) {
                $this->Flash->success(__('The aircraft category has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aircraft category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aircraftCategory'));
        $this->set('_serialize', ['aircraftCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aircraft Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aircraftCategory = $this->AircraftCategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aircraftCategory = $this->AircraftCategory->patchEntity($aircraftCategory, $this->request->data);
            if ($this->AircraftCategory->save($aircraftCategory)) {
                $this->Flash->success(__('The aircraft category has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aircraft category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aircraftCategory'));
        $this->set('_serialize', ['aircraftCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aircraft Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aircraftCategory = $this->AircraftCategory->get($id);
        if ($this->AircraftCategory->delete($aircraftCategory)) {
            $this->Flash->success(__('The aircraft category has been deleted.'));
        } else {
            $this->Flash->error(__('The aircraft category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
