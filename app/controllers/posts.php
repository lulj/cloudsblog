<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Posts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->load->model('posts_mod');
        $data['query'] = $this->posts_mod->posts_list();
        $this->load->view('index',$data);
    }
}
