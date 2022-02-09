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
        // backend
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();
        $data['mhs'] = $this->db->get_where('user_data', ['data_id' => 4])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }



    public function informasi_bimbingan_proyek()
    {
        // backend
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/informasi_bimbingan_proyek', $data);
        $this->load->view('templates/footer');
    }



    public function persensi_bimbingan_proyek()
    {
        // backend

        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/persensi_bimbingan_proyek', $data);
        $this->load->view('templates/footer');
    }



    public function detail_Persensi_bimbingan($id)
    {
        // backend
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
        $data['count_mhs1'] = $this->db->query($mhs1)->num_rows();

        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        // echo '<pre>';
        // var_dump($data['mhs1']);
        // echo '</pre>';
        // die;

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/detail_Persensi_bimbingan', $data);
        $this->load->view('templates/footer');
    }



    public function detail_Persensi_bimbingan_tambah($id)
    {
        // backend
        $mhs2 = "SELECT bimbingan.*, user.*, admin.*, user_data.*,berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id 
         WHERE user . role_id = 3 ORDER BY tanggal ASC";
        $data['mhs'] = $this->db->query($mhs2)->result_Array();
        $mhs1 = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id  
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id
         WHERE user . role_id = 3 AND user . user_id = '" . $id . "' ";
        $data['mhs2'] = $this->db->query($mhs1)->row_array();


        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

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



            $this->db->insert('berkas_bimbingan', $data1);
            $this->session->set_flashdata('message_dos_detail_Persensi', '<div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Persensi berhasil di tambahkan
                    </div>');
            redirect('dosen/detail_Persensi_bimbingan/' . $data['mhs2']['user_id']);
        } else {
            $this->session->set_flashdata('message_dos_detail_Persensi', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Persensi gagal di tambahkan
                </div>');
            redirect('dosen/detail_Persensi_bimbingan/' . $data['mhs2']['user_id']);
        }
    }



    public function detail_Persensi_bimbingan_edit($id)
    {
        // backend
        $mhs2 = "SELECT bimbingan.*, user.*, admin.*, user_data.*,berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id 
         WHERE user . role_id = 3 AND berkas_bimbingan . id =  $id   ";
        $data1['mhs'] = $this->db->query($mhs2)->result_Array();
        $mhs1 = "SELECT bimbingan.*, user.*, admin.*, user_data.*,berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id 
         WHERE user . role_id = 3 AND berkas_bimbingan . id =  $id   ";
        $data['mhs'] = $this->db->query($mhs1)->row_array();



        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        if ($data) {
            $tanggal = $this->input->post('tanggal');
            $berkas_bimbingan_id = $this->input->post('berkas_bimbingan_id');
            $materi = $this->input->post('materi');
            $paraf_dosen = $this->input->post('paraf_dosen');

            $this->db->set('tanggal', $tanggal);
            $this->db->set('berkas_bimbingan_id', $berkas_bimbingan_id);
            $this->db->set('materi', $materi);
            $this->db->set('paraf_dosen', $paraf_dosen);
            $this->db->where('id', $id);
            $this->db->update('berkas_bimbingan');
            $this->session->set_flashdata('message_dos_detail_Persensi', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Persensi berhasil di ubah
                </div>');
            redirect('dosen/detail_Persensi_bimbingan/' . $data['mhs']['user_id']);
        } else {
            $this->session->set_flashdata('message_dos_detail_Persensi', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Persensi gagal di ubah
                </div>');
            redirect('dosen/detail_Persensi_bimbingan/' . $data['mhs']['user_id']);
        }
    }



    public function detail_Persensi_bimbingan_hapus($id)
    {
        // backend
        $mhs2 = "SELECT bimbingan.*, user.*, admin.*, user_data.*,berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id 
         WHERE user . role_id = 3 AND berkas_bimbingan . id =  $id   ";
        $data1['mhs'] = $this->db->query($mhs2)->result_Array();
        $mhs1 = "SELECT bimbingan.*, user.*, admin.*, user_data.*,berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id 
         WHERE user . role_id = 3 AND berkas_bimbingan . id =  $id   ";
        $data['mhs'] = $this->db->query($mhs1)->row_array();



        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        if ($data) {

            $this->db->where('id', $id);
            $this->db->delete('berkas_bimbingan');
            $this->session->set_flashdata('message_dos_detail_Persensi', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Persensi berhasil di hapus
                </div>');
            redirect('dosen/detail_Persensi_bimbingan/' . $data['mhs']['user_id']);
        } else {
            $this->session->set_flashdata('message_dos_detail_Persensi', '<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Persensi gagal di hapus
                </div>');
            redirect('dosen/detail_Persensi_bimbingan/' . $data['mhs']['user_id']);
        }
    }



    public function surat_izin_sidang()
    {
        // backend
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/surat_izin_sidang', $data);
        $this->load->view('templates/footer');
    }


    public function surat_izin_sidang_tambah($id)
    {
        // var_dump($id);
        // die;
        // backend
        $mhs2 = "SELECT bimbingan.*, user.*, admin.*, user_data.*,berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id 
         WHERE user . role_id = 3";
        $data['mhs'] = $this->db->query($mhs2)->result_Array();
        $mhs1 = "SELECT bimbingan.*, user.*, admin.*, user_data.*, berkas_bimbingan.* FROM bimbingan 
        JOIN user ON bimbingan . mhs_id = user . mhs_id 
        JOIN admin ON bimbingan . dos_id = admin . dos_id 
        JOIN user_data ON user . data_id = user_data . data_id  
        JOIN berkas_bimbingan ON user_data . berkas_bimbingan_id = berkas_bimbingan . berkas_bimbingan_id
         WHERE user . role_id = 3 AND user . user_id = '" . $id . "' ";
        $data['mhs2'] = $this->db->query($mhs1)->row_array();
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();


        if ($data) {


            $tanggal_surat = $this->input->post('tanggal_surat');
            $date = date_create($tanggal_surat);
            $tas = date_format($date, "d-F-Y");
            $tanda_tangan = $this->input->post('tanda_tangan');
            $persentase_laporan    = $this->input->post('persentase_laporan');
            $persentase_apliksai = $this->input->post('persentase_apliksai');

            $this->db->set('status_surat_id', 2);
            $this->db->set('tanda_tangan', $tanda_tangan);
            $this->db->set('tanggal_surat', $tas);
            $this->db->set('persentase_laporan', $persentase_laporan);
            $this->db->set('persentase_apliksai', $persentase_apliksai);
            $this->db->where('user_id', $id);
            $this->db->update('user');
            echo 'berhasil';
            redirect('dosen/surat_izin_sidang');
        }
    }



    public function form_penilayan()
    {
        // backend
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/form_penilayan', $data);
        $this->load->view('templates/footer');
    }



    public function detail_nilai()
    {
        // backend
        $data['title'] = 'Menu Dosen';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/detail_nilai', $data);
        $this->load->view('templates/footer');
    }



    public function my_profile()
    {
        // backend
        $data['title'] = 'Menu cordinator';
        $data['user'] = $this->db->get_where('user', ['user_id' =>
        $this->session->userdata('user_id')])->row_array();
        $data['user_data'] = $this->db->get_where('user_data', ['data_id' =>
        $data['user']['data_id']])->row_array();
        $data['admin'] = $this->db->get_where('admin', ['dos_id' =>
        $data['user']['dos_id']])->row_array();

        //frontend
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_1', $data);
        $this->load->view('dosen/my_profile', $data);
        $this->load->view('templates/footer');
    }



    public function edit_my_profile()
    {
        //frontend
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
            $no_telpon = $this->input->post('no_telpon');

            $this->db->set('name', $name);
            $this->db->set('NIK', $NIK);
            $this->db->set('email', $email);
            $this->db->set('no_telpon', $no_telpon);
            $this->db->where('dos_id', $data['admin']['dos_id']);
            $this->db->update('admin');
            $this->session->set_flashdata('message_dos_my_profile', '<div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            data berhasil di ubah
            </div>');
            redirect('dosen/my_profile');
        } else {
            $this->session->set_flashdata('message_dos_my_profile', '<div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
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
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            data berhasil di ubah
            </div>');
            redirect('auth');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            data gagal di ubah
            </div>');
            redirect('auth');
        }
    }
}
