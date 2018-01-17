<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actingas Controller
 *
 * @property \App\Model\Table\ActingasTable $Actingas
 *
 * @method \App\Model\Entity\Actingas[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActingasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $actingas = $this->paginate($this->Actingas);

        $this->set(compact('actingas'));
    }

    /**
     * View method
     *
     * @param string|null $id Actingas id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actinga = $this->Actingas->get($id, [
            'contain' => ['Crw', 'Flight']
        ]);

        $this->set('actinga', $actinga);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actinga = $this->Actingas->newEntity();
        if ($this->request->is('post')) {
            $actinga = $this->Actingas->patchEntity($actinga, $this->request->getData());
            if ($this->Actingas->save($actinga)) {
                $this->Flash->success(__('The actinga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actinga could not be saved. Please, try again.'));
        }
        $crw = $this->Actingas->Crw->find('list', ['limit' => 200]);
        $flight = $this->Actingas->Flight->find('list', ['limit' => 200]);
        $this->set(compact('actinga', 'crw', 'flight'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actingas id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actinga = $this->Actingas->get($id, [
            'contain' => ['Crw', 'Flight']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actinga = $this->Actingas->patchEntity($actinga, $this->request->getData());
            if ($this->Actingas->save($actinga)) {
                $this->Flash->success(__('The actinga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actinga could not be saved. Please, try again.'));
        }
        $crw = $this->Actingas->Crw->find('list', ['limit' => 200]);
        $flight = $this->Actingas->Flight->find('list', ['limit' => 200]);
        $this->set(compact('actinga', 'crw', 'flight'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actingas id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actinga = $this->Actingas->get($id);
        if ($this->Actingas->delete($actinga)) {
            $this->Flash->success(__('The actinga has been deleted.'));
        } else {
            $this->Flash->error(__('The actinga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
