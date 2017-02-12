<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Preferences Controller
 *
 * @property \App\Model\Table\PreferencesTable $Preferences
 */
class PreferencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $preferences = $this->paginate($this->Preferences);

        $this->set(compact('preferences'));
        $this->set('_serialize', ['preferences']);
    }

    /**
     * View method
     *
     * @param string|null $id Preference id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $preference = $this->Preferences->get($id, [
            'contain' => []
        ]);

        $this->set('preference', $preference);
        $this->set('_serialize', ['preference']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $preference = $this->Preferences->newEntity();
        if ($this->request->is('post')) {
            $preference = $this->Preferences->patchEntity($preference, $this->request->data);
            if ($this->Preferences->save($preference)) {
                $this->Flash->success(__('The preference has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The preference could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('preference'));
        $this->set('_serialize', ['preference']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Preference id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $preference = $this->Preferences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $preference = $this->Preferences->patchEntity($preference, $this->request->data);
            if ($this->Preferences->save($preference)) {
                $this->Flash->success(__('The preference has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The preference could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('preference'));
        $this->set('_serialize', ['preference']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Preference id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $preference = $this->Preferences->get($id);
        if ($this->Preferences->delete($preference)) {
            $this->Flash->success(__('The preference has been deleted.'));
        } else {
            $this->Flash->error(__('The preference could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
