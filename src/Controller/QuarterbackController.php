<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Quarterback Controller
 *
 * @property \App\Model\Table\QuarterbackTable $Quarterback
 */
class QuarterbackController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('quarterback', $this->paginate($this->Quarterback));
        $this->set('_serialize', ['quarterback']);
    }

    /**
     * View method
     *
     * @param string|null $id Quarterback id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quarterback = $this->Quarterback->get($id, [
            'contain' => []
        ]);
        $this->set('quarterback', $quarterback);
        $this->set('_serialize', ['quarterback']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quarterback = $this->Quarterback->newEntity();
        if ($this->request->is('post')) {
            $quarterback = $this->Quarterback->patchEntity($quarterback, $this->request->data);
            if ($this->Quarterback->save($quarterback)) {
                $this->Flash->success(__('The quarterback has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quarterback could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('quarterback'));
        $this->set('_serialize', ['quarterback']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quarterback id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quarterback = $this->Quarterback->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quarterback = $this->Quarterback->patchEntity($quarterback, $this->request->data);
            if ($this->Quarterback->save($quarterback)) {
                $this->Flash->success(__('The quarterback has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quarterback could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('quarterback'));
        $this->set('_serialize', ['quarterback']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quarterback id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quarterback = $this->Quarterback->get($id);
        if ($this->Quarterback->delete($quarterback)) {
            $this->Flash->success(__('The quarterback has been deleted.'));
        } else {
            $this->Flash->error(__('The quarterback could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
