<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientesController
 *
 * @author Jose
 */
class ClientesController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Paginator');
    public $paginate = array(
        'limit' => 5,
        'order' => array('Cliente.id' => 'desc')
    );

    public function index() {
        $this->Paginator->settings = $this->paginate; 
        //$this->set('clientes', $this->Cliente->find('all'));
        $this->set('clientes', $this->Paginator->paginate('Cliente'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Cliente invalido'));
        }
        $cliente = $this->Cliente->findById($id);
        if (!$cliente) {
            throw new NotFoundException(__('Cliente invalido'));
        }
        $this->set('cliente', $cliente);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Cliente->create();
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash('Cliente registrado.', 'alert_success');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('No se pudo registrar cliente.', 'alert-danger');
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Cliente invalido'));
        }

        $cliente = $this->Cliente->findById($id);
        if (!$cliente) {
            throw new NotFoundException(__('Cliente invalido'));
        }

        if ($this->request->is(array('cliente', 'put'))) {
            $this->Cliente->id = $id;
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash('Cliente ha sido actualizado.', 'alert_success');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('No se pudo actualizar cliente.', 'alert-danger');
        }

        if (!$this->request->data) {
            $this->request->data = $cliente;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Cliente->delete($id)) {
            $this->Session->setFlash('Cliente ha sido eliminado.', 'alert_success');
            return $this->redirect(array('action' => 'index'));
        }
    }

}

?>
