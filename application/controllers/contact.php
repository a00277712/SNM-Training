<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Contact extends CI_Controller {  
      
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Feedback_model');
    }

    public function index()  
    {  
        $this->load->view('layout/header');  
        $this->load->view('contact/index');  
        $this->load->view('layout/footer');  
    }

    public function thankYou($id = 0) {
        if (is_null($id) || ($id == 0)) {
            show_404(); // security                
        }
        $data['id'] = $id;
        $this->load->view('layout/header');
        $this->load->view('contact/thankYou', $data);
        $this->load->view('layout/footer');
    }
    
    public function edit($id = 0) {
        if (is_null($id) || ($id == 0)) {
            show_404(); // security                
        }
        $data = $this->Feedback_model->get($id);
        $data['id'] = $id;
        $this->load->view('layout/header');
        $this->load->view('contact/edit', $data);
        $this->load->view('layout/footer');
    }
    
    public function store($id = null) {
        $rules = array(
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
            )
        );

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data = $this->Feedback_model->get($id);
            $data['id'] = $id;
            $data['error'] = true;
            $this->load->view('layout/header');
            $this->load->view('contact/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $data = array(
                'FullName' => $this->input->post('name'),
                'Email' => $this->input->post('email'),
                'Phone' => $this->input->post('phone'),
                'UserComment' => $this->input->post('comment')
            );

            $id = $this->Feedback_model->insert($data);
        
            redirect(site_url('/contact/thankyou') . '/' . $id, 'refresh');
        }
    }

    public function update($id = 0) {
        if (is_null($id) || ($id == 0)) {
            show_404(); // security                
        }
        
        $rules = array(
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
            )
        );

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = true;
            $this->load->view('layout/header');
            $this->load->view('contact/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $data = array(
                'FullName' => $this->input->post('name'),
                'Email' => $this->input->post('email'),
                'Phone' => $this->input->post('phone'),
                'UserComment' => $this->input->post('comment')
            );

            $this->Feedback_model->update($id, $data);
        
            redirect(site_url('/contact/edit' . '/' . $id), 'refresh');
        }
    }

    public function add_message($id = null) {
        $data = array(
            'FeedbackId' => $id,
            'FullName' => $this->input->post('fullName'),
            'UserComment' => $this->input->post('newComment')
        );

        $this->Feedback_message_model->insert($data);
    
        redirect(site_url('/contact/edit') . '/' . $id, 'refresh');
    }
}  
?>