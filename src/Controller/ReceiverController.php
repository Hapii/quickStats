<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Receiver Controller
 *
 * @property \App\Model\Table\ReceiverTable $Receiver
 */
class ReceiverController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('receiver', $this->paginate($this->Receiver));
        $this->set('_serialize', ['receiver']);
    }

    /**
     * View method
     *
     * @param string|null $id Receiver id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $receiver = $this->Receiver->get($id, [
            'contain' => []
        ]);
        $this->set('receiver', $receiver);
        $this->set('_serialize', ['receiver']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $receiver = $this->Receiver->newEntity();
        if ($this->request->is('post')) {
            $receiver = $this->Receiver->patchEntity($receiver, $this->request->data);
            if ($this->Receiver->save($receiver)) {
                $this->Flash->success(__('The receiver has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The receiver could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('receiver'));
        $this->set('_serialize', ['receiver']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Receiver id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $receiver = $this->Receiver->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receiver = $this->Receiver->patchEntity($receiver, $this->request->data);
            if ($this->Receiver->save($receiver)) {
                $this->Flash->success(__('The receiver has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The receiver could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('receiver'));
        $this->set('_serialize', ['receiver']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Receiver id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $receiver = $this->Receiver->get($id);
        if ($this->Receiver->delete($receiver)) {
            $this->Flash->success(__('The receiver has been deleted.'));
        } else {
            $this->Flash->error(__('The receiver could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
