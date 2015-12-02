<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Defensiveback Controller
 *
 * @property \App\Model\Table\DefensivebackTable $Defensiveback
 */
class DefensivebackController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('defensiveback', $this->paginate($this->Defensiveback));
        $this->set('_serialize', ['defensiveback']);
    }

    /**
     * View method
     *
     * @param string|null $id Defensiveback id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $defensiveback = $this->Defensiveback->get($id, [
            'contain' => []
        ]);
        $this->set('defensiveback', $defensiveback);
        $this->set('_serialize', ['defensiveback']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $defensiveback = $this->Defensiveback->newEntity();
        if ($this->request->is('post')) {
            $defensiveback = $this->Defensiveback->patchEntity($defensiveback, $this->request->data);
            if ($this->Defensiveback->save($defensiveback)) {
                $this->Flash->success(__('The defensiveback has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The defensiveback could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('defensiveback'));
        $this->set('_serialize', ['defensiveback']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Defensiveback id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $defensiveback = $this->Defensiveback->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $defensiveback = $this->Defensiveback->patchEntity($defensiveback, $this->request->data);
            if ($this->Defensiveback->save($defensiveback)) {
                $this->Flash->success(__('The defensiveback has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The defensiveback could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('defensiveback'));
        $this->set('_serialize', ['defensiveback']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Defensiveback id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $defensiveback = $this->Defensiveback->get($id);
        if ($this->Defensiveback->delete($defensiveback)) {
            $this->Flash->success(__('The defensiveback has been deleted.'));
        } else {
            $this->Flash->error(__('The defensiveback could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
