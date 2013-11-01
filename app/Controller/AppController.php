<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth'=>array(
            'loginRedirect'=>array('controller'=>'clientes', 'action'=>'index'),
            'logoutRedirect'=>array('controller'=>'users', 'action'=>'login'),
            'authError'=>"No puedes acceder a este sitio",
            'authorize'=>array('Controller')
        )
    );
    
    public function isAuthorized($user) {
        return true;
    }
    
    public function beforeFilter() {
        $this->Auth->deny();
        $this->Auth->allow(array('login'));        
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());        
    }
}
