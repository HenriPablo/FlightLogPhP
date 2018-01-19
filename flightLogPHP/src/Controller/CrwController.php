<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Crw Controller
 *
 * @property \App\Model\Table\CrwTable $Crw
 *
 * @method \App\Model\Entity\Crw[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CrwController extends AppController
{

    public $components = ['Ajax.Ajax'];

    public function initialize()
    {
        parent::initialize();
        //$this->loadComponent('RequestHandler');
        //$this->loadComponent('RequestHandler', ['enableBeforeRedirect' => false]);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $crw = $this->paginate($this->Crw);

        $this->set(compact('crw'));
    }

    public function crwbyajax(){
        $id = $this->request->query('id');
        $crw = $this->Crw->getListByActingas($id);
        $this->set(compact('crw'));
        $this->set('_serialize', ['crw']);
    }

    /**
     * View method
     *
     * @param string|null $id Crw id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crw = $this->Crw->get($id, [
            'contain' => ['Actingas', 'Flight']
        ]);

        $this->set('crw', $crw);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crw = $this->Crw->newEntity();
        if ($this->request->is('post')) {
            $crw = $this->Crw->patchEntity($crw, $this->request->getData());
            if ($this->Crw->save($crw)) {
                $this->Flash->success(__('The crw has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crw could not be saved. Please, try again.'));
        }
        $actingas = $this->Crw->Actingas->find('list', ['limit' => 200]);
        $flight = $this->Crw->Flight->find('list', ['limit' => 200]);
        $this->set(compact('crw', 'actingas', 'flight'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crw id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crw = $this->Crw->get($id, [
            'contain' => ['Actingas', 'Flight']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crw = $this->Crw->patchEntity($crw, $this->request->getData());
            if ($this->Crw->save($crw)) {
                $this->Flash->success(__('The crw has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crw could not be saved. Please, try again.'));
        }
        $actingas = $this->Crw->Actingas->find('list', ['limit' => 200]);
        $flight = $this->Crw->Flight->find('list', ['limit' => 200]);
        $this->set(compact('crw', 'actingas', 'flight'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crw id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crw = $this->Crw->get($id);
        if ($this->Crw->delete($crw)) {
            $this->Flash->success(__('The crw has been deleted.'));
        } else {
            $this->Flash->error(__('The crw could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
