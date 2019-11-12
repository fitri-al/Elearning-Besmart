<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_model extends CI_Model {
    
    public function getallmateri()
    {
        return $this->db->get('t_materi')->result_array();
    }

}