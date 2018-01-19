<?php
/**
 *
 */
class user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "user_tbl";
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }
}
