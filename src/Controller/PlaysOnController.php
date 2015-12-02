<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlaysOn Controller
 *
 * @property \App\Model\Table\PlaysOnTable $PlaysOn
 */
class PlaysOnController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('playsOn', $this->paginate($this->PlaysOn));
        $this->set('_serialize', ['playsOn']);
    }

    /**
     * View method
     *
     * @param string|null $id Plays On id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playsOn = $this->PlaysOn->get($id, [
            'contain' => []
        ]);
        $this->set('playsOn', $playsOn);
        $this->set('_serialize', ['playsOn']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playsOn = $this->PlaysOn->newEntity();
        if ($this->request->is('post')) {
            $playsOn = $this->PlaysOn->patchEntity($playsOn, $this->request->data);
            if ($this->PlaysOn->save($playsOn)) {
                $this->Flash->success(__('The plays on has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plays on could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('playsOn'));
        $this->set('_serialize', ['playsOn']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Plays On id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playsOn = $this->PlaysOn->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playsOn = $this->PlaysOn->patchEntity($playsOn, $this->request->data);
            if ($this->PlaysOn->save($playsOn)) {
                $this->Flash->success(__('The plays on has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plays on could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('playsOn'));
        $this->set('_serialize', ['playsOn']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Plays On id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playsOn = $this->PlaysOn->get($id);
        if ($this->PlaysOn->delete($playsOn)) {
            $this->Flash->success(__('The plays on has been deleted.'));
        } else {
            $this->Flash->error(__('The plays on could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
