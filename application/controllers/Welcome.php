<?php
// session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->model('M_All');
	}

	public function index(){
		$data['artikel'] = $this->M_All->get('artikel')->result();

		$this->load->view('home/head_home',$data);
		$this->load->view('home/konten', $data);
		$this->load->view('home/foot_home');
	}
	
	public function view_data_kos($id)
	{
		$where_ = array('kode_kos' => $id);
		$data['kos'] = $this->M_All->view_where('kosan', $where_)->row();
		$data['result'] = $this->M_All->view_where('kamar', $where_)->result();
		
		$this->load->view('home/head_home',$data);
		$this->load->view('home/kos', $data);
		$this->load->view('home/foot_home');
	}

		
	public function chat(){
		$this->load->view('home/head_home');
		$this->load->view('home/chat');
		$this->load->view('home/foot_home');
	}

	public function view_artikel($id)
	{
		$where = array('id_artikel' => $id, );
		$data['artikel'] = $this->M_All->view_where('artikel', $where)->row();
		$this->load->view('home/head_home');
		$this->load->view('home/view_artikel', $data);
		$this->load->view('home/foot_home');
	}

	public function login_pencari(){
		$this->load->view('login/head_login');
		$this->load->view('login/login_pencari');
		$this->load->view('login/foot_login');
	}
	
		public function forget(){
		$this->load->view('login/head_login');
		$this->load->view('login/forget');
		$this->load->view('login/foot_login');
	}
	public function resetpass(){
		$this->load->view('login/head_login');
		$this->load->view('login/resetpass');
		$this->load->view('login/foot_login');
	}

    public function login_pemilik(){
        $this->load->view('login/head_login');
        $this->load->view('login/login_pemilik');
        $this->load->view('login/foot_login');
    }

	public function login_admin(){
		$this->load->view('login/head_login');
		$this->load->view('login/login_admin');
		$this->load->view('login/foot_login');
	}

	public function registrasi_pencari(){
		$this->load->view('registrasi/head_regis');
		$this->load->view('registrasi/registrasi_pencari');
		$this->load->view('registrasi/foot_regis');
	}

	public function registrasi_pemilik(){
		$this->load->view('registrasi/head_regis');
		$this->load->view('registrasi/registrasi_pemilik');
		$this->load->view('registrasi/foot_regis');
	}

	public function registrasi_admin(){
		$this->load->view('registrasi/head_regis');
		$this->load->view('registrasi/registrasi_admin');
		$this->load->view('registrasi/foot_regis');
	}

    public function proses_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password),
		);

		$cek = $this->M_All->view_where('user', $where);
		$rows = $cek->num_rows();
		$res = $cek->result();
		// print_r($res);
		$isadmin = $res[0]->is_admin;
		$ispemilik = $res[0]->is_pemilik;
		if ($isadmin) {
            if ($rows > 0 && $isadmin) {
				$where = array('id_user' => $res[0]->id_user);
				$admin = $this->M_All->view_where('admin', $where)->result();
                $data_session = array(
                    'id_admin' => $admin[0]->id_admin,
                    'admin' => 'admin',
                );

                $this->session->set_userdata($data_session);
                redirect(base_url('admin'));
            }else {
				echo "<script> alert('Username atau Password Salah'); </script>";
				$this->load->view('login/head_login');
				$this->load->view('login/login_admin');
				$this->load->view('login/foot_login');
            }
            if (empty($_SESSION['username'])) {
                    echo "<script> alert('Username atau Password Salah'); </script>";
                session_destroy();
                    header("location: ".base_url('Welcome/login_admin'));
            }
        } elseif ($ispemilik) {
            if ($rows > 0  && $ispemilik) {
				$where = array('id_user' => $res[0]->id_user);
				$pemilik = $this->M_All->view_where('pemilik_kos', $where)->result();
                $data_session = array(
                    'id_pemilik' => $pemilik[0]->id_pemilik,
                    'pemilik' => 'pemilik',
                );

                $this->session->set_userdata($data_session);
                redirect(base_url('pemilik'));
            }else {
				echo "<script> alert('Username atau Password Salah'); </script>";
				$this->load->view('login/head_login');
				$this->load->view('login/login_pemilik');
				$this->load->view('login/foot_login');
			}
            if (empty($_SESSION['id_pemilik'])) {
                echo "<script> alert('Username atau Password Salah'); </script>";
                session_destroy();
                header("location: ".base_url('Welcome/login_pemilik'));
            }
        }elseif (!$isadmin && !$ispemilik) {
            if ($rows > 0) {
				$where = array('id_user' => $res[0]->id_user);
				$pencari = $this->M_All->view_where('pencari_kos', $where)->result();
                $data_session = array(
                    'id_pencari' => $pencari[0]->id_pencari,
                    'pencari' => 'pencari',
                );
				print_r($pencari);
                $this->session->set_userdata($data_session);
                redirect(base_url('pencari'));
            }else {
				echo "<script> alert('Username atau Password Salah'); </script>";
				$this->load->view('login/head_login');
				$this->load->view('login/login_pencari');
				$this->load->view('login/foot_login');
            }
            if (empty($_SESSION['id_pencari'])) {
                // echo "<script> alert('Username atau Password Salah'); </script>";
                // session_destroy();
                // header("location: ".base_url('Welcome/login_pencari'));
            }
		}else{
			// if ($this->agent->is_referral())
			// {
			// 	echo $this->agent->referrer();
			// }
		}
    }

	public function login_pilihan(){
		$this->load->view('home/login_pilihan');
	}

	public function regis_pilihan(){
		$this->load->view('home/regis_pilihan');
	}

	 // Insert Pencari
  	public function insert_pencari(){
		$config['upload_path']          = './asset_registrasi/upload_pencari/';
		$config['overwrite']        = true;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
		
        if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
			echo "<script> alert('Foto Gagal diunggah');</script>";
        }
        else{
			$data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
			$username = $this->input->post('username');
			$where = array('username' => $username);
			$user = $this->M_All->view_where('user',$where)->num_rows();
			if ($this->input->post('konfirmasi') == $this->input->post('password') && $user == 0) {
				$password = md5($this->input->post('password'));
				$nama_pencari = $this->input->post('nama_pencari');
				$tempat_lahir = $this->input->post('tempat_lahir');
				$tgl_lahir = $this->input->post('tgl_lahir');
				$no_ktp = $this->input->post('no_ktp');
				$status = $this->input->post('status');
				$jenis_kelamin = $this->input->post('jenis_kelamin');
				$email = $this->input->post('email');
				$no_telp = $this->input->post('no_telp');
				$no_telp_wali = $this->input->post('no_telp_wali');
				$foto = $this->upload->data('file_name');
				$datauser = array(
					'username' => $username,
					'password' => $password,
					'is_pemilik' => 0,
					'is_admin' => 0,
				); 
				$id = $this->M_All->insert_get('user', $datauser);
				$data = array(
					'id_user' => $id,
					'nama_pencari' => $nama_pencari,
					'tempat_lahir' => $tempat_lahir,
					'tgl_lahir' => $tgl_lahir,
					'no_ktp' => $no_ktp,
					'status' => $status,
					'jenis_kelamin' => $jenis_kelamin,
					'email' => $email,
					'no_telp' => $no_telp,
					'no_telp_wali' => $no_telp_wali,
					'foto' => $foto,
				);
				if ($this->M_All->insert('pencari_kos', $data) != true) {
					redirect('welcome/login_pencari');
					echo "<script> alert('Akun Penghuni berhasil dibuat');</script>";
				}else{
					redirect('welcome/registrasi_pencari');
					echo "<script> alert('Akun Penghuni gagal dibuat');</script>";
				}
			} else {
				echo "<script> alert('Pastikan Password & konfirmasi password sama');</script>";
				redirect('Welcome/registrasi_pencari');
			}
        }
	}

	// Insert Pemilik
	public function insert_pemilik(){
		$config['upload_path']          = './asset_registrasi/upload_pemilik/';
		$config['overwrite']        = true;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
			echo "<script> alert('Foto Gagal diunggah');</script>";
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
			$username = $this->input->post('username');
			$where = array('username' => $username);
			$user = $this->M_All->view_where('user',$where)->num_rows();
			if ($this->input->post('konfirmasi') == $this->input->post('password') && $user == 0) {
				$password = md5($this->input->post('password'));
				$nama_pemilik = $this->input->post('nama_pemilik');
				$no_ktp = $this->input->post('no_ktp');
				$no_telp = $this->input->post('no_telp');
				$no_rek = $this->input->post('no_rek');
				$atas_nama_rek = $this->input->post('atas_nama_rek');
				$email = $this->input->post('email');
				$jenis_kelamin = $this->input->post('jenis_kelamin');
				$foto = $this->upload->data('file_name');
				$datauser = array(
					'username' => $username,
					'password' => $password,
					'is_pemilik' => 1,
					'is_admin' => 0,
				); 
				$id = $this->M_All->insert_get('user', $datauser);
				$data = array(
					'id_user' => $id,
					'nama_pemilik' => $nama_pemilik,
					'no_ktp' => $no_ktp,
					'no_telp' => $no_telp,
					'no_rek' => $no_rek,
					'atas_nama_rek' => $atas_nama_rek,
					'email' => $email,
					'jenis_kelamin' => $jenis_kelamin,
					'foto' => $foto,
				);
				if ($this->M_All->insert('pemilik_kos', $data) != true) {
					redirect('welcome/login_pemilik');
					echo "<script> alert('Akun Pemilik berhasil dibuat');</script>";
				}else{
					redirect('welcome/registrasi_pemilik');
					echo "<script> alert('Akun Pemilik gagal dibuat');</script>";
				}
			} else {
				echo "<script> alert('Pastikan Password & konfirmasi password sama');</script>";
				redirect('Welcome/registrasi_pemilik');
			}
        }
	}

	// Insert Admin
	public function insert_admin(){
		$config['upload_path']          = './asset_registrasi/upload_admin/';
		$config['overwrite']        = true;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
			echo "<script> alert('Foto Gagal diunggah');</script>";
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
			$username = $this->input->post('username');
			$where = array('username' => $username);
			$user = $this->M_All->view_where('user',$where)->num_rows();
			if ($this->input->post('konfirmasi') == $this->input->post('password') && $user == 0) {
				$password = md5($this->input->post('password'));
				$nama_admin = $this->input->post('nama_admin');
				$no_telp = $this->input->post('no_telp');
				$email = $this->input->post('email');
				$foto = $this->upload->data('file_name');
				$datauser = array(
					'username' => $username,
					'password' => $password,
					'is_pemilik' => 0,
					'is_admin' => 1,
				); 
				$id = $this->M_All->insert_get('user', $datauser);
				$data = array(
					'id_user' => $id,
					'nama_admin' => $nama_admin,
					'no_telp' => $no_telp,
					'email' => $email,
					'foto' => $foto,
				);
				if ($this->M_All->insert('admin', $data) != true) {
					redirect('welcome/login_admin');
					echo "<script> alert('Akun Admin berhasil dibuat');</script>";
				}else{
					redirect('welcome/registrasi_admin');
					echo "<script> alert('Akun Admin gagal dibuat');</script>";
				}
			} else {
				echo "<script> alert('Pastikan Password & konfirmasi password sama');</script>";
				redirect('Welcome/registrasi_admin');
			}
        }
	}

	function Logout(){
		$this->session->sess_destroy();
		redirect(base_url('welcome'));
  	}

}
