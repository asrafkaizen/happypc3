<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shifts Controller
 *
 * @property \App\Model\Table\ShiftsTable $Shifts
 *
 * @method \App\Model\Entity\Shift[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShiftsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Locations', 'Bills']
        ];
        $shifts = $this->paginate($this->Shifts);

        $this->set(compact('shifts'));
    }

    /**
     * View method
     *
     * @param string|null $id Shift id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shift = $this->Shifts->get($id, [
            'contain' => ['Users', 'Locations', 'Bills']
        ]);

        $this->set('shift', $shift);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shift = $this->Shifts->newEntity();
        if ($this->request->is('post')) {
            $shift = $this->Shifts->patchEntity($shift, $this->request->getData());


            $user_id = $_POST["user_id"];
            $location_id = $_POST["location_id"];
            $bill_id = $_POST["bill_id"];

            $query1 = "INSERT INTO shifts(user_id, location_id, bill_id) VALUES ('$user_id', '$location_id', '$bill_id')";


            $username = "root";
            $password = "";
            $database = "happypc";

            $mysqli = new \mysqli("localhost", $username, $password, $database);

            $mysqli->query("$query1");

            /*
            if ($this->Shifts->save($shifts)) {
                $this->Flash->success(__('The computer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The computer could not be saved. Please, try again.'));
            */

        }
        $users = $this->Shifts->Users->find('list', ['limit' => 200]);
        $locations = $this->Shifts->Locations->find('list', ['limit' => 200]);
        $bills = $this->Shifts->Bills->find('list', ['limit' => 200]);
        $this->set(compact('shift', 'users', 'locations', 'bills'));
    }


    //todo self-made add data method
    /*
    public function addbridge()
    {
        $user_id = $_POST["user_id"];
        $location_id = $_POST["location_id"];
        $bill_id = $_POST["bill_id"];

        $query1 = "INSERT INTO shifts(user_id, location_id, bill_id) VALUES ('$user_id', '$location_id', '$bill_id')";
        if ($conn->query($query1) === TRUE) {
            return $this->redirect(['action' => 'index']);
        }else{

        }

    }

    */

    /**
     * Edit method
     *
     * @param string|null $id Shift id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shift = $this->Shifts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shift = $this->Shifts->patchEntity($shift, $this->request->getData());
            if ($this->Shifts->save($shift)) {
                $this->Flash->success(__('The shift has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shift could not be saved. Please, try again.'));
        }
        $users = $this->Shifts->Users->find('list', ['limit' => 200]);
        $locations = $this->Shifts->Locations->find('list', ['limit' => 200]);
        $bills = $this->Shifts->Bills->find('list', ['limit' => 200]);
        $this->set(compact('shift', 'users', 'locations', 'bills'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shift id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shift = $this->Shifts->get($id);
        if ($this->Shifts->delete($shift)) {
            $this->Flash->success(__('The shift has been deleted.'));
        } else {
            $this->Flash->error(__('The shift could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
