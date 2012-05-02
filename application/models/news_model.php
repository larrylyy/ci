<?php

class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('message');
            return $query->result_array();
        }

        $query = $this->db->get_where('message', array('id' => $slug));
        return $query->row_array();
    }
    
    public function set_news() {
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
            'publisher_name' => $this->input->post('title'),
            'appendix' => $slug,
            'content' => $this->input->post('text')
        );
       
        return $this->db->insert('message', $data);
    }

}

//end of script