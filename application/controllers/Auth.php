<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('user_id', 'User_id', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Informasi Bimbingan Proyek';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_foother');
        } else {
            //validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $user_id = $this->input->post('user_id');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['user_id' => $user_id])->row_array();

        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'user_id' => $user['user_id'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('cordinator');
                } else if ($user['role_id'] == 2) {
                    redirect('dosen');
                } else {
                    redirect('mahasiswa');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                Wrong Password!
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            This User id has not registration !
            </div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        $this->form_validation->set_rules('name_mhs_1', 'Name_mhs_1', 'required|trim');
        $this->form_validation->set_rules('npm_mhs_1', 'Npm_mhs_1', 'required|trim');
        $this->form_validation->set_rules('name_mhs_2', 'Name_mhs_2', 'required|trim');
        $this->form_validation->set_rules('npm_mhs_2', 'Npm_mhs_2', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('katagori_proyek', 'Katagori_proyek', 'required|trim');
        $this->form_validation->set_rules('user_id', 'User_id', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'password too short !'
        ]);


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Informasi Bimbingan Proyek';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_foother');
        } else {
            $query = 'select * from user order by data_id DESC LIMIT 1';
            $data_id = $this->db->query($query)->row_array();
            $id = $data_id['data_id'];
            $i = (int)$id + 1;
            $data1 = [
                'name_mhs_1' => $this->input->post('name_mhs_1', true),
                'npm_mhs_1' => $this->input->post('npm_mhs_1', true),
                'name_mhs_2' => $this->input->post('name_mhs_2', true),
                'npm_mhs_2' => $this->input->post('npm_mhs_2', true),
                'kelas' => $this->input->post('kelas', true),
                'user_id' => $this->input->post('user_id', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'data_id' => $i,
                'date_created' => time()
            ];
            $data2 = [
                'katagori_proyek' => $this->input->post('katagori_proyek', true),
                'data_id' => $i
            ];
            $this->db->insert('user', $data1);
            $this->db->insert('user_data', $data2);
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            Congratulation! your account has been created. Please Login
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            You have been logged out!
            </div>');
        redirect('auth');
    }
}
