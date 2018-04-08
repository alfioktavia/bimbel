<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login1_m extends CI_Model
{
    public $table = 'user'; // you MUST mention the table name
    
    public function get_user($username)
    {
        return $this->db->where('username', $username)->get($this->table)->row('password');
    }
    
    public function get_userID($username)
    {
        return $this->db->where('username', $username)->get($this->table)->row('id_user');
    }
    
    public function get_username($username)
    {
        return $this->db->where('username', $username)->get($this->table)->row('username');
    }
    
    public function get_level($username)
    {
        return $this->db->where('username', $username)->get($this->table)->row('level');
    }
    
   
}