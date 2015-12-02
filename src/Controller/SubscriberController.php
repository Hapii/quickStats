<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subscriber Controller
 *
 * @property \App\Model\Table\SubscriberTable $Subscriber
 */
class SubscriberController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('subscriber', $this->paginate($this->Subscriber));
        $this->set('_serialize', ['subscriber']);
    }

    /**
     * View method
     *
     * @param string|null $id Subscriber id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subscriber = $this->Subscriber->get($id, [
            'contain' => []
        ]);
        $this->set('subscriber', $subscriber);
        $this->set('_serialize', ['subscriber']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subscriber = $this->Subscriber->newEntity();
        if ($this->request->is('post')) {
            $subscriber = $this->Subscriber->patchEntity($subscriber, $this->request->data);
            if ($this->Subscriber->save($subscriber)) {
                $this->Flash->success(__('The subscriber has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subscriber could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('subscriber'));
        $this->set('_serialize', ['subscriber']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subscriber id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subscriber = $this->Subscriber->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subscriber = $this->Subscriber->patchEntity($subscriber, $this->request->data);
            if ($this->Subscriber->save($subscriber)) {
                $this->Flash->success(__('The subscriber has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subscriber could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('subscriber'));
        $this->set('_serialize', ['subscriber']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subscriber id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subscriber = $this->Subscriber->get($id);
        if ($this->Subscriber->delete($subscriber)) {
            $this->Flash->success(__('The subscriber has been deleted.'));
        } else {
            $this->Flash->error(__('The subscriber could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
