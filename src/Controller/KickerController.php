<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kicker Controller
 *
 * @property \App\Model\Table\KickerTable $Kicker
 */
class KickerController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('kicker', $this->paginate($this->Kicker));
        $this->set('_serialize', ['kicker']);
    }

    /**
     * View method
     *
     * @param string|null $id Kicker id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kicker = $this->Kicker->get($id, [
            'contain' => []
        ]);
        $this->set('kicker', $kicker);
        $this->set('_serialize', ['kicker']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kicker = $this->Kicker->newEntity();
        if ($this->request->is('post')) {
            $kicker = $this->Kicker->patchEntity($kicker, $this->request->data);
            if ($this->Kicker->save($kicker)) {
                $this->Flash->success(__('The kicker has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kicker could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kicker'));
        $this->set('_serialize', ['kicker']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kicker id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kicker = $this->Kicker->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kicker = $this->Kicker->patchEntity($kicker, $this->request->data);
            if ($this->Kicker->save($kicker)) {
                $this->Flash->success(__('The kicker has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kicker could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kicker'));
        $this->set('_serialize', ['kicker']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kicker id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kicker = $this->Kicker->get($id);
        if ($this->Kicker->delete($kicker)) {
            $this->Flash->success(__('The kicker has been deleted.'));
        } else {
            $this->Flash->error(__('The kicker could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
