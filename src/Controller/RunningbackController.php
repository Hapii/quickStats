<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Runningback Controller
 *
 * @property \App\Model\Table\RunningbackTable $Runningback
 */
class RunningbackController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('runningback', $this->paginate($this->Runningback));
        $this->set('_serialize', ['runningback']);
    }

    /**
     * View method
     *
     * @param string|null $id Runningback id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $runningback = $this->Runningback->get($id, [
            'contain' => []
        ]);
        $this->set('runningback', $runningback);
        $this->set('_serialize', ['runningback']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $runningback = $this->Runningback->newEntity();
        if ($this->request->is('post')) {
            $runningback = $this->Runningback->patchEntity($runningback, $this->request->data);
            if ($this->Runningback->save($runningback)) {
                $this->Flash->success(__('The runningback has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The runningback could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('runningback'));
        $this->set('_serialize', ['runningback']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Runningback id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $runningback = $this->Runningback->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $runningback = $this->Runningback->patchEntity($runningback, $this->request->data);
            if ($this->Runningback->save($runningback)) {
                $this->Flash->success(__('The runningback has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The runningback could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('runningback'));
        $this->set('_serialize', ['runningback']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Runningback id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $runningback = $this->Runningback->get($id);
        if ($this->Runningback->delete($runningback)) {
            $this->Flash->success(__('The runningback has been deleted.'));
        } else {
            $this->Flash->error(__('The runningback could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
