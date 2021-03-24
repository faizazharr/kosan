<?php
// session_start();
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Admin extends CI_Controller{
	// private $conn;
	function __construct(){
		parent::__construct();
		$this->load->model('M_All');
		$this->load->helper(array('form', 'url'));
		if ($this->session->userdata('admin') != "admin") {
			redirect(base_url(''));
		}
	}

	public function index(){
		$total_transaksi = $this->M_All->count('pemesanan');
		// print_r($total_transaksi);
		$where = array('id_pesan' => 0 );
		$yang_belum = $this->M_All->count_where('pemesanan', $where);
		$f = 0;
		if ($total_transaksi > 0) {
			$f = $yang_belum/$total_transaksi;
		}
		$persen = number_format($f*100, 0);
		$data['per'] = array(
			'total_transaksi' => $total_transaksi,
			'persen' => $persen,
			'yang_belum' => $yang_belum,
		);
		$data['jumlah_orang'] = $this->M_All->count('pencari_kos');
		$data['jumlah_kamar'] = $this->M_All->count('kamar');
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/foot_admin');
	}
	
	public function profile(){
		$total_transaksi = $this->M_All->count('pemesanan');
		$where = array('id_pesan' => 0, );
		$yang_belum = $this->M_All->count_where('pemesanan', $where);
		$f = 0;
		if ($total_transaksi > 0) {
			$f = $yang_belum/$total_transaksi;
		}
		$persen = number_format($f*100, 0);
		$data['per'] = array(
			'total_transaksi' => $total_transaksi,
			'persen' => $persen,
			'yang_belum' => $yang_belum,
		);
		$data['jumlah_orang'] = $this->M_All->count('pencari_kos');
		$data['jumlah_kamar'] = $this->M_All->count('kamar');
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/profile');
		$this->load->view('admin/foot_admin');
	}

	
	
	public function mailbox(){
		$total_transaksi = $this->M_All->count('pemesanan');
		$where = array('id_pesan' => 0, );
		$yang_belum = $this->M_All->count_where('pemesanan', $where);
		$f = 0;
		if ($total_transaksi > 0) {
			$f = $yang_belum/$total_transaksi;
		}
		$persen = number_format($f*100, 0);
		$data['per'] = array(
			'total_transaksi' => $total_transaksi,
			'persen' => $persen,
			'yang_belum' => $yang_belum,
		);
		$data['jumlah_orang'] = $this->M_All->count('pencari_kos');
		$data['jumlah_kamar'] = $this->M_All->count('kamar');
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/mailbox');
		$this->load->view('admin/foot_admin');
	}

	public function logoutt(){
		session_destroy();
		header("location: ".base_url());
	}

	function Logout(){
        $this->session->sess_destroy();
        redirect(base_url('welcome'));
    }

	public function data_penghuni(){
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		// $data['result'] = $this->M_All->join_transaksi('pemesanan', 'kamar', 'kosan', 'pemilik_kos', 'pencari_kos')->result();
		$data['result'] = $this->M_All->get('pencari_kos')->result();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/data_penghuni', $data);
		$this->load->view('admin/foot_admin');
	}

	public function data_kos($id=''){
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();

			// $sql="SELECT * FROM kosan";
			// $data['result']=$this->conn->query($sql);
		$data['result'] = $this->M_All->get('kosan')->result();
		if($id==''){
			$this->load->view('admin/sidebar_admin');
			$this->load->view('admin/header_admin', $data);
			$this->load->view('admin/data_kos', $data);
			$this->load->view('admin/foot_admin'); 
		}else{

			$this->load->view('admin/data_kos', $data); 
		}
	}

	public function data_pemilik($id=''){
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();

		$data['result'] = $this->M_All->get('pemilik_kos')->result();
		if($id==''){
		
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/data_pemilik', $data);
		$this->load->view('admin/foot_admin');
		}else{
			
		$this->load->view('admin/data_pemilik', $data);
		}
	}

	public function edit_pemilik($id='')
	{
		$where_ = array('id_pemilik' => $id, );
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$data['result'] = $this->M_All->view_where('pemilik_kos', $where_)->row();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/edit_pemilik', $data);
		$this->load->view('admin/foot_admin');
	}

	public function update_pemilik()
	{
		$where = array('id_pemilik' => $this->input->post('id_pemilik'), );
		$data = array(
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'no_telp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email'),
			'no_rek' => $this->input->post('no_rek'),
			'atas_nama_rek' => $this->input->post('atas_nama_rek'),
			'bank' => $this->input->post('bank'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		);
		$this->M_All->update('pemilik_kos', $where, $data);
		redirect('admin/data_pemilik');
	}

	public function transaksi($id=''){
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		// $data['result'] = $this->M_All->join_transaksi('pemesanan', 'kamar', 'kosan', 'pemilik_kos', 'pencari_kos')->result();
		$data['result'] = $this->M_All->get('pemesanan')->result();
		
		if($id==''){
	
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/transaksi', $data);
		$this->load->view('admin/foot_admin');
		}else{ 
		$this->load->view('admin/transaksi', $data); 
	
		}
	}

	public function edit_transaksi()
	{
		$where = array('id_pesan' => $this->input->post('id_pesan'), );
		$data = array(
			'total_bayar' => $this->input->post('total_bayar'),
			'tgl_bayar' => $this->input->post('tgl_bayar'),
			'tgl_masuk' => $this->input->post('tgl_masukr'),
			'tgl_keluar' => $this->input->post('tgl_keluar'),
			'sisa_pembayaran' => $this->input->post('sisa_pembayaran'),
		);
		$this->M_All->update('pemesanan', $where, $data);
		redirect('admin/transaksi');
	}

	public function hapus_transaksi($id)
	{
		$where = array('id_pesan' => $id);
		$this->M_All->delete($where, 'pemesanan');
		redirect('admin/transaksi');
	}

	public function artikel(){
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$data['result'] = $this->M_All->get('artikel')->result();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/artikel', $data);
		$this->load->view('admin/foot_admin');
		
	}

	public function edit_artikel($id='')
	{
		$where_ = array('id_artikel' => $id, );
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$data['result'] = $this->M_All->view_where('artikel', $where_)->row();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/edit_artikel', $data);
		$this->load->view('admin/foot_admin');
	}

	public function update_artikel($value='')
	{
		$where = array('id_artikel' => $this->input->post('id_artikel'), );
		$data = array(
			'judul' => $this->input->post('judul'),
			'kategori_artikel' => $this->input->post('kategori_artikel'),
			'deskripsi' => $this->input->post('deskripsi'),
		);
		$this->M_All->update('artikel', $where, $data);
		redirect('admin/artikel');
	}

	public function tambah_artikel()
	{
		$config['upload_path']          = './asset_admin/artikel/';
		$config['overwrite']        = true;
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = 1024;
		// $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
			echo "<script> alert('Foto Artikel Gagal diunggah');</script>";
        }else{
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
			$judul = $this->input->post('judul_artikel');
			$kategori_artikel = $this->input->post('kategori_artikel');
			$deskripsi = $this->input->post('deskripsi_artikel');
			$foto = $this->upload->data('file_name');

			$data = array(
				'judul' => $judul,
				'kategori_artikel' => $kategori_artikel,
				'deskripsi' => $deskripsi,
				'tgl_upload' => date('Y-m-d'),
				'tgl_ubah' => date('Y-m-d'),
				'foto' => $foto,
				'id_admin' => $this->session->userdata('id_admin')
			);
			if ($this->M_All->insert('artikel', $data) != true) {
				redirect('admin/artikel');
				// echo "<script> alert('Data Artikel berhasil ditambah');</script>";
			}else{
				redirect('admin/artikel');
				echo "<script> alert('Data Artikel gagal ditambah');</script>";
			}
        }
	}

	public function edit_kos($id='')
	{
		$where_ = array('kode_kos' => $id, );
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$data['kos'] = $this->M_All->view_where('kosan', $where_)->row();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/edit_kos', $data);
		$this->load->view('admin/foot_admin');
	}

	public function update_kos()
	{
		$where = array('kode_kos' => $this->input->post('kode_kos'), );
		$data = array(
			'nama_kos' => $this->input->post('nama_kos'),
			'alamat' => $this->input->post('alamat'),
			'deskripsi' => $this->input->post('deskripsi'),
		);
		$this->M_All->update('kosan', $where, $data);
		redirect('admin/data_kos');
	}

	public function hapus_pemilik($id)
	{
		$where = array('id_pemilik' => $id);
		$this->M_All->delete($where, 'pemilik_kos');
		redirect('admin/data_pemilik');
	}

	public function hapus_artikel($id)
	{
		$where = array('id_artikel' => $id);
		$this->M_All->delete($where, 'artikel');
		redirect('admin/artikel');
	}

	public function hapus_kos($id='')
	{
		$where = array('kode_kos' => $id);
		$this->M_All->delete($where,'kosan');
		redirect('admin/data_kos');
	}

	public function update_pencari()
	{
		$where = array('id_pencari' => $this->input->post('id_pencari'), );
		$data = array(
			'nama_pencari' => $this->input->post('nama_pencari'),
			'no_telp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status' => $this->input->post('status'),
			'no_telp_wali' => $this->input->post('no_telp_wali'),
		);
		$this->M_All->update('pencari_kos', $where, $data);
		redirect('admin/data_penghuni');
	}

	public function edit_penghuni($id='')
	{
		$where_ = array('id_pencari' => $id, );
		$idadmin = $this->session->userdata('id_admin');
		$where = array('id_admin' => $idadmin);
		$data['nama'] = $this->M_All->view_where('admin', $where)->row();
		$data['result'] = $this->M_All->view_where('pencari_kos', $where_)->row();
		$this->load->view('admin/sidebar_admin');
		$this->load->view('admin/header_admin', $data);
		$this->load->view('admin/edit_penghuni', $data);
		$this->load->view('admin/foot_admin');
	}

	public function hapus_penghuni($id='')
	{
		$where = array('id_pencari' => $id);
		$this->M_All->delete($where, 'pencari_kos');
		redirect('admin/data_penghuni');
	}


}
