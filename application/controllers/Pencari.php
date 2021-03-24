<?php
// session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencari extends CI_Controller{
	private $conn;
	function __construct(){
		parent::__construct();
		$this->load->model('M_All');
		$this->load->helper(array('form', 'url'));
		if ($this->session->userdata('pencari') != "pencari") {
			redirect(base_url(''));
		}
	}

	public function index(){
		$data['artikel'] = $this->M_All->get('artikel')->result();
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari_kos', $where)->row();
		$data['result'] = $this->M_All->join('pemilik_kos','kosan')->result();
		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/dashboard', $data);
		$this->load->view('pencari/foot_pencari');
		
	}

	public function mailbox(){
		$data['artikel'] = $this->M_All->get('artikel')->result();

		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari_kos', $where)->row();

		$data['result'] = $this->M_All->join('pemilik_kos','kosan')->result();

		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/mailbox', $data);
		$this->load->view('pencari/foot_pencari');
		
	}

	public function logoutt(){
		session_destroy();
		header("location: ".base_url());
	}

	function Logout(){
        $this->session->sess_destroy();
        redirect(base_url('welcome'));
    }

	public function pencarian(){
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari_kos', $where)->row();
		$data['result'] = $this->M_All->get('kosan')->result();
		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/konten', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function profile(){
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari_kos', $where)->row();
		$data['result'] = $this->M_All->get('kosan')->result();
		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/profile', $data);
		$this->load->view('pencari/foot_pencari');
	}
	public function view_data_kos($id)
	{
		$where_ = array('kode_kos' => $id);
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari_kos', $where)->row();
		$data['kos'] = $this->M_All->view_where('kosan', $where_)->row();
		$data['result'] = $this->M_All->view_where('kamar', $where_)->result();
		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/pesan_kos', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function pemesanan()
	{
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari_kos', $where)->row();
		$data['result'] = $this->M_All->get_where('pemesanan', $where)->result();

		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/pemesanan', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function pembayaran()
	{
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari_kos', $where)->row();
		$data['result'] = $this->M_All->join_get_bayar($where)->result();
		// $data['result'] = $this->M_All->get('pemesanan')->result();
		// $data['rek'] = $this->M_All->join_get_bayar($data['result'][0])->result();
		// print_r($data);

		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/pembayaran', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function pesan()
	{
		$id_pencari = $this->session->userdata('id_pencari');
		$where = array('id_pencari' => $id_pencari);
		$data['nama'] = $this->M_All->view_where('pencari_kos', $where)->row();
		$data['result'] = $this->M_All->get('pemesanan')->result();

		$this->load->view('pencari/sidebar_pencari');
		$this->load->view('pencari/header_pencari', $data);
		$this->load->view('pencari/about', $data);
		$this->load->view('pencari/foot_pencari');
	}

	public function pesan_kamar()
	{
		// $id_transaksi = $this->M_All->count('pemesanan')+1;
		$uang_muka = $this->input->post('uang_muka');
		$harga = $this->input->post('harga');
		$kode_kamar = $this->input->post('kode_kamar');
		$id_pencari = $this->input->post('id_pencari');
		$tgl_masuk = $this->input->post('tgl_masuk');
		// $tgl_keluar = $this->input->post('tgl_keluar');
		// $tgl_keluar = strtotime(date("Y-m-d",strtotime($tgl_masuk)).'1');
		// $tgl_keluar = date($tgl_masuk . " +1year");
		$tgl_keluar = date('Y-m-d', strtotime($tgl_masuk. ' + 1 year'));
		$selisih =  strtotime($tgl_keluar) - strtotime($tgl_masuk);
		$selisih_tahun = ceil($selisih/(60*60*24*365));
		$total_bayar = $harga * $selisih_tahun;
		$sisa_bayar = $total_bayar - $uang_muka;
		$data = array(
			// 'id_transaksi' => 'trx00'.$id_transaksi,
			'id_kamar' => $kode_kamar,
			'id_pencari' => $id_pencari,
			'tanggal_masuk' => $tgl_masuk,
			'tanggal_keluar' => $tgl_keluar,
			'jumlah_dp' => $total_bayar,
			'sisa_pembayaran' => $sisa_bayar,
			'status_transaksi' => 0,
		);
		// print_r($data);
		$this->M_All->insert('pemesanan', $data);
		redirect('pencari');
	}

	public function simpan_bukti()
	{
		$config['upload_path']          = './asset_admin/bukti_bayar/';
		$config['overwrite']        = true;
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 1024;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view('upload_form', $error);
			print_r($error);
			// echo "<script> alert('Foto Kos Gagal diunggah');</script>";
        }else{
            $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
			$foto = $this->upload->data('file_name');

			$where = array('id_transaksi' => $this->input->post('id_transaksi'), );

			$data = array(
				'status_transaksi' => 2,
				'bukti_bayar' => $foto,
				'tgl_bayar' => date('Y-m-d'),
				'sisa_pembayaran' => 0,
			);
			if ($this->M_All->update('pemesanan', $where, $data) != true) {
				$transaksi = $this->M_All->view_where('pemesanan', $where)->row();
				$where_kamar = array('kode_kos' => $transaksi->kode_kamar, );
				$kode_kos = $this->M_All->view_where('kamar', $where_kamar)->row();
				$where_updatesal = array('kode_kos' => $kode_kos->kode_kos, );
				$saldo = $this->M_All->view_where('kosan', $where_updatesal)->row();
				print_r($saldo);
				$saldo_akhir = ($saldo->saldo_kos + $transaksi->total_bayar);
				$updatesal = array('saldo_kos' => $saldo_akhir, );
				echo '<hr>total'.$saldo_akhir;
				$this->M_All->update('kosan', $where_updatesal, $updatesal );
				redirect('pencari/pembayaran/');
				echo "<script> alert('Upload bukti berhasil diupload');</script>";
			}else{
				redirect('pencari/pembayaran/');
				echo "<script> alert('Bukti gagal diupload');</script>";
			}
        }
	}
}
