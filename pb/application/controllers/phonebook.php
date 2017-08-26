<?php

class phonebook extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('mdl_contacts');
    }

    public function index(){
        $this->load->view("v_dashboard");

    }
public function aboutme(){
    $this->load->view("aboutme");
}
public function addcontacts(){
    $this->load->view("v_addcontacts");
}
public function savecontact(){
    $data = array (
        "fullname" => $_POST['fullname'],
        "contactno" => $_POST['contactno'],
    );
    $this->mdl_contacts->addnewcontacts($data);
    redirect(base_url());
}}


?>