<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{
    public function index()
    {
        $data['num_mhs'] = $this->db->get_where('user', ['role_id' => 3])->num_rows();
        $data['num_dos'] = $this->db->get_where('user', ['role_id' => 2])->num_rows();
        $data['num_kor'] = $this->db->get_where('user', ['role_id' => 1])->num_rows();
        // var_dump($data); die;
        $this->load->view('landingpage/index', $data);
    }

}