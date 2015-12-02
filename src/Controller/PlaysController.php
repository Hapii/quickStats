<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Plays Controller
 *
 * @property \App\Model\Table\PlaysTable $Plays
 */
class PlaysController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('plays', $this->paginate($this->Plays));
        $this->set('_serialize', ['plays']);
    }

    /**
     * View method
     *
     * @param string|null $id Play id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $play = $this->Plays->get($id, [
            'contain' => []
        ]);
        $this->set('play', $play);
        $this->set('_serialize', ['play']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $play = $this->Plays->newEntity();
        if ($this->request->is('post')) {
            $play = $this->Plays->patchEntity($play, $this->request->data);
            if ($this->Plays->save($play)) {
                $this->Flash->success(__('The play has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The play could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('play'));
        $this->set('_serialize', ['play']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Play id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $play = $this->Plays->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $play = $this->Plays->patchEntity($play, $this->request->data);
            if ($this->Plays->save($play)) {
                $this->Flash->success(__('The play has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The play could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('play'));
        $this->set('_serialize', ['play']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Play id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $play = $this->Plays->get($id);
        if ($this->Plays->delete($play)) {
            $this->Flash->success(__('The play has been deleted.'));
        } else {
            $this->Flash->error(__('The play could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
