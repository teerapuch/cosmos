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

    public function findAll()
    {
        $query = $this->db->order_by('createdate','ASC')
        ->get_where($this->table,array('deleted !=' => '1'))->result();
        return $query;
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }
}
