<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Regiones Controller
 *
 * @property \App\Model\Table\RegionesTable $Regiones
 */
class RegionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Regiones->find();
        $regiones = $this->paginate($query);

        $this->set(compact('regiones'));
    }

    /**
     * View method
     *
     * @param string|null $id Regiones id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $region = $this->Regiones->findById($id)->firstOrFail();
        $this->set(compact('region'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $region = $this->Regiones->newEmptyEntity();
        if ($this->request->is('post')) {
            $region = $this->Regiones->patchEntity($region, $this->request->getData());
            if ($this->Regiones->save($region)) {
                $this->Flash->success(__('The region has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The region could not be saved. Please, try again.'));
        }
        $this->set(compact('region'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Regiones id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $region = $this->Regiones->findById($id)->firstOrFail();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $region = $this->Regiones->patchEntity($region, $this->request->getData());
            if ($this->Regiones->save($region)) {
                $this->Flash->success(__('The region has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The region could not be updated. Please, try again.'));
        }
        $this->set(compact('region'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Regiones id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $region = $this->Regiones->findById($id)->firstOrFail();
        if ($this->Regiones->delete($region)) {
            $this->Flash->success(__('The region has been deleted.'));
        } else {
            $this->Flash->error(__('The region could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
