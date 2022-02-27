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
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['mhs'] = $this->db->get_where('user_data', ['data_id' => 4])->row_array();
        $bimbingan = "SELECT bimbingan.*, user.*, admin.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id
        WHERE user . mhs_id = " . $data['user']['mhs_id'] . " ";
        $data['tes'] = $this->db->query($bimbingan)->row_array();


        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }



    public function buku_pedoman()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/buku_pedoman', $data);
        $this->load->view('templates/footer');
    }



    public function templet_laporan_proyek()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/templet_laporan_proyek', $data);
        $this->load->view('templates/footer');
    }



    public function informasi_bimbingan_proyek()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id 
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id WHERE user . mhs_id = " . $data['user']['mhs_id'] . " ";
        $data['tes'] = $this->db->query($bimbingan)->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/informasi_bimbingan_proyek', $data);
        $this->load->view('templates/footer');
    }



    public function Persensi_Bimbingan_Proyek()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['berkas_bimbingan'] = $this->db->get_where('berkas_bimbingan', ['berkas_bimbingan_id' =>
        $data['user_data']['berkas_bimbingan_id']])->row_array();
        $bimbingan = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
         JOIN user ON bimbingan . mhs_id = user . mhs_id 
         JOIN admin ON bimbingan . dos_id = admin . dos_id 
         JOIN user_data ON user . data_id = user_data . data_id 
         JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id WHERE user . mhs_id = " .  $data['user']['mhs_id'] . " ";
        $data['tes'] = $this->db->query($bimbingan)->result_Array();
        $data['count_mhs1'] = $this->db->query($bimbingan)->num_rows();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/Persensi_Bimbingan_Proyek', $data);
        $this->load->view('templates/footer');
    }



    public function proposal()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['mhs'] = $this->db->get_where('user_data', ['data_id' => 4])->row_array();
        $data['setatus'] = $this->db->get_where('status', ['id' => $data['user_data']['status_proposal_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/proposal', $data);
        $this->load->view('templates/footer');
    }



    public function upload_proposal()
    {
        // backend
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();

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
            $this->session->set_flashdata('message_mhs_upload_proposal', '<div class="alert alert-success" role="alert">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
            Proposal berhasil diupload
            </div>');
            redirect('mahasiswa/proposal');
        } else {
            $this->session->set_flashdata('message_mhs_upload_proposal', '<div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Proposal gagal diupload
            </div>');
            redirect('mahasiswa/proposal');
        }
    }



    public function ubah_judul()
    {
        // backend
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();

        $this->form_validation->set_rules('judul_proyek', 'Judul Proyek', 'required');
        $this->form_validation->set_rules('laporan_proposal', 'Folder', 'required');

        if ($data) {
            $judul_proyek = $this->input->post('judul_proyek');

            $this->db->set('judul_proyek', $judul_proyek);
            $this->db->where('data_id', $data['user_data']['data_id']);
            $this->db->update('user_data');
            $this->session->set_flashdata('message_mhs_upload_proposal', '<div class="alert alert-success" role="alert">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
            Judul Proyek berhasil diubah
            </div>');
            redirect('mahasiswa/proposal');
        } else {
            $this->session->set_flashdata('message_mhs_upload_proposal', '<div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Judul Proyek gagal diubah
            </div>');
            redirect('mahasiswa/proposal');
        }
    }



    public function laporan()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['mhs'] = $this->db->get_where('user_data', ['data_id' => 4])->row_array();
        $data['setatus'] = $this->db->get_where('status', ['id' => $data['user_data']['status_laporan_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/laporan', $data);
        $this->load->view('templates/footer');
    }



    public function upload_laporan()
    {
        // backend
        $upload_file = $_FILES['laporan_proyek']['name'];
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();


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
                $this->session->set_flashdata('message_mhs_upload_laporan', '<div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Laporan berhasil diupload
                    </div>');
                redirect('mahasiswa/laporan');
            } else {
                $this->session->set_flashdata('message_mhs_upload_laporan', '<div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Laporan gagal diupload
                    </div>');
                redirect('mahasiswa/laporan');
            }
        }
    }


    public function surat_izin_sidang()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $mhs1 = "SELECT bimbingan.*, user.*, admin.*, user_data.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id  
         WHERE user . role_id = 3 AND user . user_id = '" . $data['user']['user_id'] . "'   ";
        $data['mhs2'] = $this->db->query($mhs1)->row_array();
        // var_dump($data['mhs2']);
        // die;


        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/surat_izin_sidang', $data);
        $this->load->view('templates/footer');
    }



    public function upload_tandatangan_1()
    {
        // backend
        $upload_file = $_FILES['tanda_tanga_digital_mhs_1']['name'];
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();


        if ($upload_file) {

            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 10048;
            $config['upload_path']          = './assets/File/Tanda_tangan_mhs/';

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('tanda_tanga_digital_mhs_1')) {
                $new_file = $this->upload->data('file_name');
                $this->db->set('tanda_tanga_digital_mhs_1', $new_file);
                $this->db->where('user_id', $data['user']['user_id']);
                $this->db->update('user');
                $this->session->set_flashdata('message_mhs_tandatangan', '<div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Tanda tangan berhasil diupload
                    </div>');
                redirect('mahasiswa/surat_izin_sidang');
            } else {
                $this->session->set_flashdata('message_mhs_tandatangan', '<div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Tanda tangan gagal diupload
                    </div>');
                redirect('mahasiswa/surat_izin_sidang');
            }
        }
    }



    public function upload_tandatangan_2()
    {
        $upload_file = $_FILES['tanda_tanga_digital_mhs_2']['name'];
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();


        if ($upload_file) {

            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 10048;
            $config['upload_path']          = './assets/File/Tanda_tangan_mhs/';

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('tanda_tanga_digital_mhs_2')) {
                $new_file = $this->upload->data('file_name');
                $this->db->set('tanda_tanga_digital_mhs_2', $new_file);
                $this->db->where('user_id', $data['user']['user_id']);
                $this->db->update('user');
                $this->session->set_flashdata('message_mhs_tandatangan', '<div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Tanda tangan berhasil diupload
                    </div>');
                redirect('mahasiswa/surat_izin_sidang');
            } else {
                $this->session->set_flashdata('message_mhs_tandatangan', '<div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Tanda tangan gagal diupload
                    </div>');
                redirect('mahasiswa/surat_izin_sidang');
            }
        }
    }



    public function my_profile()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/my_profile', $data);
        $this->load->view('templates/footer');
    }



    public function edit_my_profile_1()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();



        if ($data) {
            $name_mhs_1 = $this->input->post('name_mhs_1');
            $npm_mhs_1 = $this->input->post('npm_mhs_1');
            $kelas_mhs_1 = $this->input->post('kelas_mhs_1');
            $no_telpon_mhs_1 = $this->input->post('no_telpon_mhs_1');



            $this->db->set('name_mhs_1', $name_mhs_1);
            $this->db->set('npm_mhs_1', $npm_mhs_1);
            $this->db->set('kelas_mhs_1', $kelas_mhs_1);
            $this->db->set('no_telpon_mhs_1', $no_telpon_mhs_1);
            $this->db->where('user_id', $data['user']['user_id']);
            $this->db->update('user');
            $this->session->set_flashdata('message_mhs_edit_my_profile', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data berhasil diubah
            </div>');
            redirect('mahasiswa/my_profile');
        } else {
            $this->session->set_flashdata('message_mhs_edit_my_profile', '<div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data gagal diubah
            </div>');
            redirect('mahasiswa/my_profile');
        }
    }



    public function edit_my_profile_2()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();



        if ($data) {
            $name_mhs_2 = $this->input->post('name_mhs_2');
            $npm_mhs_2 = $this->input->post('npm_mhs_2');
            $kelas_mhs_2 = $this->input->post('kelas_mhs_2');
            $no_telpon_mhs_2 = $this->input->post('no_telpon_mhs_2');



            $this->db->set('name_mhs_2', $name_mhs_2);
            $this->db->set('npm_mhs_2', $npm_mhs_2);
            $this->db->set('kelas_mhs_2', $kelas_mhs_2);
            $this->db->set('no_telpon_mhs_2', $no_telpon_mhs_2);
            $this->db->where('user_id', $data['user']['user_id']);
            $this->db->update('user');
            $this->session->set_flashdata('message_mhs_edit_my_profile_2', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data berhasil diubah
            </div>');
            redirect('mahasiswa/my_profile');
        } else {
            $this->session->set_flashdata('message_mhs_edit_my_profile_2', '<div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data gagal diubah
            </div>');
            redirect('mahasiswa/my_profile');
        }
    }



    public function edit_profile()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mahasiswa/edit_profile', $data);
        $this->load->view('templates/footer');
    }



    public function ubah_profile()
    {
        // backend
        $data['title'] = 'Menu Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();



        if ($data) {
            $user_id = $this->input->post('user_id');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);



            $this->db->set('user_id', $user_id);
            $this->db->set('password', $password);
            $this->db->where('user_id', $data['user']['user_id']);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil diubah
            </div>');
            redirect('auth');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data gagal diubah
            </div>');
            redirect('auth');
        }
    }
}
