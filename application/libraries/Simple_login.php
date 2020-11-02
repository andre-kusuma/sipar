<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        //load data model user
        $this->CI->load->model('user_model');
    }

    //fungsi login
    public function login($username,$password)
    {

    }

    //fungsi cek login
    public function cek_login()
    {

    }

    //fungsi logout
    public function logout()
    {
        
    }

}