<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Defensivelineman Controller
 *
 * @property \App\Model\Table\DefensivelinemanTable $Defensivelineman
 */
class DefensivelinemanController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('defensivelineman', $this->paginate($this->Defensivelineman));
        $this->set('_serialize', ['defensivelineman']);
    }

    /**
     * View method
     *
     * @param string|null $id Defensivelineman id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $defensivelineman = $this->Defensivelineman->get($id, [
            'contain' => []
        ]);
        $this->set('defensivelineman', $defensivelineman);
        $this->set('_serialize', ['defensivelineman']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $defensivelineman = $this->Defensivelineman->newEntity();
        if ($this->request->is('post')) {
            $defensivelineman = $this->Defensivelineman->patchEntity($defensivelineman, $this->request->data);
            if ($this->Defensivelineman->save($defensivelineman)) {
                $this->Flash->success(__('The defensivelineman has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The defensivelineman could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('defensivelineman'));
        $this->set('_serialize', ['defensivelineman']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Defensivelineman id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $defensivelineman = $this->Defensivelineman->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $defensivelineman = $this->Defensivelineman->patchEntity($defensivelineman, $this->request->data);
            if ($this->Defensivelineman->save($defensivelineman)) {
                $this->Flash->success(__('The defensivelineman has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The defensivelineman could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('defensivelineman'));
        $this->set('_serialize', ['defensivelineman']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Defensivelineman id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $defensivelineman = $this->Defensivelineman->get($id);
        if ($this->Defensivelineman->delete($defensivelineman)) {
            $this->Flash->success(__('The defensivelineman has been deleted.'));
        } else {
            $this->Flash->error(__('The defensivelineman could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
