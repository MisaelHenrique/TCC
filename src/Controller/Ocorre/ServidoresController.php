<?php
namespace App\Controller\Ocorre;

use App\Controller\AppController;

/**
 * Servidores Controller
 *
 * @property \App\Model\Table\ServidoresTable $Servidores
 *
 * @method \App\Model\Entity\Servidore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServidoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $servidores = $this->paginate($this->Servidores);

        $this->set(compact('servidores'));
    }

    /**
     * View method
     *
     * @param string|null $id Servidore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servidore = $this->Servidores->get($id, [
            'contain' => [],
        ]);

        $this->set('servidore', $servidore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servidore = $this->Servidores->newEntity();
        if ($this->request->is('post')) {
            $servidore = $this->Servidores->patchEntity($servidore, $this->request->getData());
            if ($this->Servidores->save($servidore)) {
                $this->Flash->success(__('The servidore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servidore could not be saved. Please, try again.'));
        }
        $this->set(compact('servidore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Servidore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servidore = $this->Servidores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servidore = $this->Servidores->patchEntity($servidore, $this->request->getData());
            if ($this->Servidores->save($servidore)) {
                $this->Flash->success(__('The servidore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servidore could not be saved. Please, try again.'));
        }
        $this->set(compact('servidore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Servidore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servidore = $this->Servidores->get($id);
        if ($this->Servidores->delete($servidore)) {
            $this->Flash->success(__('The servidore has been deleted.'));
        } else {
            $this->Flash->error(__('The servidore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function logout()
    {
        $this->Flash->success(__('Logout efetuado com sucesso'));

        return $this->redirect($this->Auth->logout());
    }
}
