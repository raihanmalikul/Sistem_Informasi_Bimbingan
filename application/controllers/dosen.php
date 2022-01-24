<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dosen extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }



    public function informasi_bimbingan_proyek()
    {
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/informasi_bimbingan_proyek', $data);
        $this->load->view('templates/footer');
    }



    public function persensi_bimbingan_proyek()
    {
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/persensi_bimbingan_proyek', $data);
        $this->load->view('templates/footer');
    }



    public function detail_Persensi_bimbingan($id)
    {
        $mhs2 = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id  
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id
         WHERE user . role_id = 3 AND user . user_id = '" . $id . "' ";
        $data['mhs'] = $this->db->query($mhs2)->row_array();
        $mhs1 = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id  
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id
         WHERE user . role_id = 3 AND user . user_id = '" . $id . "' ";
        $data['mhs1'] = $this->db->query($mhs1)->result_Array();
        // var_dump($data);
        // die;
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/detail_Persensi_bimbingan', $data);
        $this->load->view('templates/footer');
    }



    public function detail_Persensi_bimbingan_tambah()
    {
        $mhs2 = "SELECT bimbingan.*, user.*, admin.*, user_data.*,berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id 
         WHERE user . role_id = 3";
        $data['mhs'] = $this->db->query($mhs2)->result_Array();
        // var_dump($data);
        // die;
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];


        if ($data) {
            $tanggal = $this->input->post('tanggal');
            $date = date_create($tanggal);
            $tas = date_format($date, "d-F-Y");
            $data1 = [
                'berkas_bimbingan_id' => $this->input->post('berkas_bimbingan_id'),
                'tanggal' => $tas,
                'materi' => $this->input->post('materi'),
                'paraf_dosen' => $this->input->post('paraf_dosen')
            ];

            // $upload_file = $_FILES['image']['name'];
            // if ($upload_file) {
            //     $config['allowed_types']        = 'gif|jpg|png';
            //     $config['max_size']             = 10048;
            //     $config['upload_path']          = './assets/File/tandatangan_dosen';

            //     // $this->load->library('upload', $config);
            //     $this->upload->initialize($config);

            //     if ($this->upload->do_upload('image')) {
            //         $new_file = $this->upload->data('file_name');
            //         $this->db->set('proposal_proyek', $new_file);
            //     }
            // }

            $this->db->insert('berkas_bimbingan', $data1);
        }
    }



    public function surat_izin_sidang()
    {
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/surat_izin_sidang', $data);
        $this->load->view('templates/footer');
    }



    public function form_penilayan()
    {
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/form_penilayan', $data);
        $this->load->view('templates/footer');
    }



    public function detail_nilai()
    {
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/detail_nilai', $data);
        $this->load->view('templates/footer');
    }



    public function my_profile()
    {
        $data['title'] = 'Menu cordinator';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/my_profile', $data);
        $this->load->view('templates/footer');
    }



    public function edit_my_profile()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];


        if ($data) {
            $name = $this->input->post('name');
            $NIK = $this->input->post('NIK');
            $email = $this->input->post('email');


            $this->db->set('name', $name);
            $this->db->set('NIK', $NIK);
            $this->db->set('email', $email);
            $this->db->where('dos_id', $data['admin']['dos_id']);
            $this->db->update('admin');
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            data berhasil di ubah
            </div>');
            redirect('dosen/my_profile');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            data gagal di ubah
            </div>');
            redirect('dosen/my_profile');
        }
    }



    public function edit_profile()
    {
        $data['title'] = 'Menu cordinator';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        // echo 'Selamat data mahasiswa ' . $data['user']['name_mhs_1'] . ' dan ' . $data['user']['name_mhs_2'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/edit_profile', $data);
        $this->load->view('templates/footer');
    }



    public function ubah_profile()
    {
        $data['title'] = 'Menu Buku Pedoman';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
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
