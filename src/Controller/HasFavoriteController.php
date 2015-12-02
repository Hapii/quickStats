<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HasFavorite Controller
 *
 * @property \App\Model\Table\HasFavoriteTable $HasFavorite
 */
class HasFavoriteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('hasFavorite', $this->paginate($this->HasFavorite));
        $this->set('_serialize', ['hasFavorite']);
    }

    /**
     * View method
     *
     * @param string|null $id Has Favorite id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hasFavorite = $this->HasFavorite->get($id, [
            'contain' => []
        ]);
        $this->set('hasFavorite', $hasFavorite);
        $this->set('_serialize', ['hasFavorite']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hasFavorite = $this->HasFavorite->newEntity();
        if ($this->request->is('post')) {
            $hasFavorite = $this->HasFavorite->patchEntity($hasFavorite, $this->request->data);
            if ($this->HasFavorite->save($hasFavorite)) {
                $this->Flash->success(__('The has favorite has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The has favorite could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hasFavorite'));
        $this->set('_serialize', ['hasFavorite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Has Favorite id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hasFavorite = $this->HasFavorite->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hasFavorite = $this->HasFavorite->patchEntity($hasFavorite, $this->request->data);
            if ($this->HasFavorite->save($hasFavorite)) {
                $this->Flash->success(__('The has favorite has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The has favorite could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hasFavorite'));
        $this->set('_serialize', ['hasFavorite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Has Favorite id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hasFavorite = $this->HasFavorite->get($id);
        if ($this->HasFavorite->delete($hasFavorite)) {
            $this->Flash->success(__('The has favorite has been deleted.'));
        } else {
            $this->Flash->error(__('The has favorite could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
