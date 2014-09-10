<?php
class Hlis_cs_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_latest_ten_news() {
        $query = $this->db->get('news');
        return $query->result();
    }
}