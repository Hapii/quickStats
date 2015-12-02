<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Player Controller
 *
 * @property \App\Model\Table\PlayerTable $Player
 */
class PlayerController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('player', $this->paginate($this->Player));
        $this->set('_serialize', ['player']);
    }

    /**
     * View method
     *
     * @param string|null $id Player id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $player = $this->Player->get($id, [
            'contain' => []
        ]);
        $this->set('player', $player);
        $this->set('_serialize', ['player']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $player = $this->Player->newEntity();
        if ($this->request->is('post')) {
            $player = $this->Player->patchEntity($player, $this->request->data);
            if ($this->Player->save($player)) {
                $this->Flash->success(__('The player has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The player could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('player'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Player id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $player = $this->Player->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $player = $this->Player->patchEntity($player, $this->request->data);
            if ($this->Player->save($player)) {
                $this->Flash->success(__('The player has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The player could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('player'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Player id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $player = $this->Player->get($id);
        if ($this->Player->delete($player)) {
            $this->Flash->success(__('The player has been deleted.'));
        } else {
            $this->Flash->error(__('The player could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
