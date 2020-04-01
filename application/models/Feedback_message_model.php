<?php

class Feedback_message_model extends CI_Model {

    protected $table = 'Feedback_Message';

    public function __construct() {
        parent::__construct();
    }

    public function get($id) {
        $this->db->where($this->table . '.id', $id);
        $this->db->select($this->table . '.*');
        $this->db->from($this->table);
        $query = $this->db->get();
        $data = $query->row_array();
        return $data;
    }

    public function get_all() {
            $query = $this->db->get($this->table);            
            return $query->result_array();        
    }

    public function get_all_by_id($feedbackId) {
        $this->db->where($this->table . '.FeedbackId', $feedbackId);
        $this->db->select($this->table . '.*');
        $this->db->from($this->table);
        $query = $this->db->get();            
        return $query->result_array();        
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}