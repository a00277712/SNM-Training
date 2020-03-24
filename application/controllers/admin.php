<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Admin extends CI_Controller {  
      
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Feedback_model');
    }

    public function index()  
    {  
        $data['query'] = $this->Feedback_model->get_all();
        $this->load->view('layout/header');  
        $this->load->view('admin/index', $data);  
        $this->load->view('layout/footer');  
    }  

    public function edit($id = 0) {
        if (is_null($id) || ($id == 0)) {
            show_404(); // security                
        }
        $data = $this->Feedback_model->get($id);
        $data['id'] = $id;
        $this->load->view('layout/header', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('layout/footer', $data);
    }
    
    public function delete($id = 0) {
        if (is_null($id) || ($id == 0)) {
            show_404(); // security                
        }
        
        $this->Feedback_model->delete($id);
        redirect(site_url('/admin') , 'redirect');
    }
    
    public function store($id = null) {
        $rules = array(
            array(
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ),
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'phone',
                'label' => 'Phone Number',
                'rules' => 'required'
            ),
            array(
                'field' => 'comment',
                'label' => 'Comment',
                'rules' => 'required'
            ),
            array(
                'field' => 'priority',
                'label' => 'Priority',
                'rules' => 'required'
            ),
            array(
                'field' => 'status',
                'label' => 'Status',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data = $this->Feedback_model->get($id);
            $data['id'] = $id;
            $data['error'] = true;
            $this->load->view('layout/header');
            $this->load->view('admin/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $data = array(
                'Title' => $this->input->post('title'),
                'FullName' => $this->input->post('name'),
                'Email' => $this->input->post('email'),
                'Phone' => $this->input->post('phone'),
                'UserComment' => $this->input->post('comment'),
                'Priority' => $this->input->post('priority'),
                'IssueStatus' => $this->input->post('status')
            );

            $this->Feedback_model->update($id, $data);
        
            redirect(site_url('/admin'), 'refresh');
        }
    }
}  
?>