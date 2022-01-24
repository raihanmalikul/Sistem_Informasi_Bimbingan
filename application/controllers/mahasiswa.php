<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();

        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }



    public function buku_pedoman()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/buku_pedoman', $data);
        $this->load->view('templates/footer');
    }



    public function templet_laporan_proyek()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/templet_laporan_proyek', $data);
        $this->load->view('templates/footer');
    }



    public function informasi_bimbingan_proyek()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/informasi_bimbingan_proyek', $data);
        $this->load->view('templates/footer');
    }



    public function Persensi_Bimbingan_Proyek()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['berkas_bimbingan'] = $this->db->get_where('berkas_bimbingan', ['berkas_bimbingan_id' =>
        $data['user_data']['berkas_bimbingan_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/Persensi_Bimbingan_Proyek', $data);
        $this->load->view('templates/footer');
    }



    public function proposal()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->form_validation->set_rules('judul_proyek', 'Judul Proyek', 'required');
        $this->form_validation->set_rules('laporan_proposal', 'Folder', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mahasiswa/proposal', $data);
            $this->load->view('templates/footer');
        } else {
        }
    }



    public function upload_proposal()
    {
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // var_dump($upload_file);
        // die;
        $this->form_validation->set_rules('judul_proyek', 'Judul Proyek', 'required');
        $this->form_validation->set_rules('laporan_proposal', 'Folder', 'required');

        if ($this->form_validation->run() == false) {
            $judul_proyek = $this->input->post('judul_proyek');
            $keterangan_judul = $this->input->post('keterangan_judul');


            $upload_file = $_FILES['proposal_proyek']['name'];
            if ($upload_file) {
                $config['allowed_types']        = 'pdf|docx';
                $config['max_size']             = 10048;
                $config['upload_path']          = './assets/File/';

                // $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('proposal_proyek')) {
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('proposal_proyek', $new_file);
                }
            }

            $this->db->set('judul_proyek', $judul_proyek);
            $this->db->set('keterangan_judul', $keterangan_judul);
            $this->db->set('status_proposal_id', 2);
            $this->db->where('data_id', $data['user_data']['data_id']);
            $this->db->update('user_data');
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            proposal berhasil di upload
            </div>');
            redirect('mahasiswa/proposal');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            proposal gagal di upload
            </div>');
            redirect('mahasiswa/proposal');
        }
    }



    public function laporan()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->form_validation->set_rules('laporan_proyek', 'Folder', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mahasiswa/laporan', $data);
            $this->load->view('templates/footer');
        }
    }



    public function upload_laporan()
    {

        $upload_file = $_FILES['laporan_proyek']['name'];
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // var_dump($upload_file);
        // die;

        if ($upload_file) {

            $config['allowed_types']        = 'pdf|docx';
            $config['max_size']             = 10048;
            $config['upload_path']          = './assets/File/';

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('laporan_proyek')) {
                $new_file = $this->upload->data('file_name');
                $this->db->set('laporan_proyek', $new_file);
                $this->db->set('status_laporan_id', 2);
                $this->db->where('data_id', $data['user_data']['data_id']);
                $this->db->update('user_data');
                $this->session->set_flashdata('messagelaporan', '<div class="alert alert-primary" role="alert">
                laporan berhasil di upload
                    </div>');
                redirect('mahasiswa/laporan');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                laporan gagal di upload
                    </div>');
                redirect('mahasiswa/laporan');
            }
        }
    }


    public function surat_izin_sidang()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/surat_izin_sidang', $data);
        $this->load->view('templates/footer');
    }



    public function my_profile()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/my_profile', $data);
        $this->load->view('templates/footer');
    }



    public function edit_my_profile()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];


        if ($data) {
            $name_mhs_1 = $this->input->post('name_mhs_1');
            $npm_mhs_1 = $this->input->post('npm_mhs_1');
            $name_mhs_2 = $this->input->post('name_mhs_2');
            $npm_mhs_2 = $this->input->post('npm_mhs_2');
            $kelas = $this->input->post('kelas');

            $this->db->set('name_mhs_1', $name_mhs_1);
            $this->db->set('npm_mhs_1', $npm_mhs_1);
            $this->db->set('name_mhs_2', $name_mhs_2);
            $this->db->set('npm_mhs_2', $npm_mhs_2);
            $this->db->set('kelas', $kelas);
            $this->db->where('user_id', $data['user']['user_id']);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            data berhasil di ubah
            </div>');
            redirect('mahasiswa/my_profile');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            data gagal di ubah
            </div>');
            redirect('mahasiswa/my_profile');
        }
    }



    public function edit_profile()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/edit_profile', $data);
        $this->load->view('templates/footer');
    }



    public function ubah_profile()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];


        if ($data) {
            $user_id = $this->input->post('user_id');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);



            $this->db->set('user_id', $user_id);
            $this->db->set('password', $password);
            $this->db->where('user_id', $data['user']['user_id']);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            data berhasil di ubah
            </div>');
            redirect('auth');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            data gagal di ubah
            </div>');
            redirect('auth');
        }
    }
}
