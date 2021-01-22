<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Monitorings Controller
 *
 * @property \App\Model\Table\MonitoringsTable $Monitorings
 * @method \App\Model\Entity\Monitoring[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MonitoringsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $monitorings = $this->paginate($this->Monitorings);

        $this->set(compact('monitorings'));
    }

    /**
     * View method
     *
     * @param string|null $id Monitoring id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monitoring = $this->Monitorings->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('monitoring'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monitoring = $this->Monitorings->newEmptyEntity();
        if ($this->request->is('post')) {
            $monitoring = $this->Monitorings->patchEntity($monitoring, $this->request->getData());
            if ($this->Monitorings->save($monitoring)) {
                $this->Flash->success(__('The monitoring has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitoring could not be saved. Please, try again.'));
        }
        $this->set(compact('monitoring'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monitoring id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monitoring = $this->Monitorings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monitoring = $this->Monitorings->patchEntity($monitoring, $this->request->getData());
            if ($this->Monitorings->save($monitoring)) {
                $this->Flash->success(__('The monitoring has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitoring could not be saved. Please, try again.'));
        }
        $this->set(compact('monitoring'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monitoring id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monitoring = $this->Monitorings->get($id);
        if ($this->Monitorings->delete($monitoring)) {
            $this->Flash->success(__('The monitoring has been deleted.'));
        } else {
            $this->Flash->error(__('The monitoring could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
