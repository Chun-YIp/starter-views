<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends Application {
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function index() {
        $role = $this->session->userdata('userrole');
        if($role != 'admin')
            $this->data['content'] = "You are not authorized to view this page. Go away";
        else
            $this->data['content'] = "You are authorized to view this page. Hooray"; #change this to whatever
        $this->render('template');
    }
}