<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Admin extends CI_Controller {  
      
      
    public function __construct() {
        parent::__construct();
        $this->load->model('Feedback_model');
    }

    public function index()  
    {  
        $data['query'] = $this->Feedback_model->get_all();
        $this->load->view('layout/header');  
        $this->load->view('admin', $data);  
        $this->load->view('layout/footer');  
    }  
}  
?>