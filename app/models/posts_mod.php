<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Posts_mod extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function posts_list()
    {
        $query = $this->db->get('posts');
        return $query->result();
    }
}
