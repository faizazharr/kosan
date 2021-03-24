<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_All extends CI_Model{
    public function get($table)
    {
        return $this->db->get($table);
    }

    public function view_where($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

    public function get_where($from, $where)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->where($where);
        return $this->db->get();
    }


	public function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}
    
    public function insert_get($table,$data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
	public function update($table,$where,$data)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

    function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }

    function join($from, $at)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'pemilik_kos.id_pemilik = kosan.id_pemilik');
        return $this->db->get();
    }

    function join_transaksi_($from, $at, $at1, $at2, $at3, $where)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'pemesanan.id_kamar = kamar.id_kamar');
        $this->db->join($at1, 'kamar.kode_kos = kosan.kode_kos');
        $this->db->join($at2, 'kosan.id_pemilik = pemilik_kos.id_pemilik');
        $this->db->join($at3, 'pemesanan.id_pencari = pencari_kos.id_pencari');
        $this->db->where($where);
        return $this->db->get();
    }

    function join_transaksi($from, $at, $at1, $at2, $at3)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'pemesanan.id_kamar = kamar.id_kamar');
        $this->db->join($at1, 'kamar.kode_kos = kosan.kode_kos');
        $this->db->join($at2, 'kosan.id_pemilik = pemilik_kos.id_pemilik');
        $this->db->join($at3, 'pemesanan.id_pencari = pencari_kos.id_pencari');
        return $this->db->get();
    }

    function join_($from, $at, $at1, $at2, $where)
    {
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($at, 'pemesanan.id_kamar = kamar.id_kamar');
        $this->db->join($at1, 'kamar.kode_kos = kosan.kode_kos');
        $this->db->join($at2, 'kosan.id_pemilik = pemilik_kos.id_pemilik');
        // $this->db->join($at3, 'pemesanan.id_pencari = pencari_kos.id_pencari');
        $this->db->where($where);
        return $this->db->get();
    }

    function join_get_bayar($id)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('kamar', 'kamar.id_kamar = pemesanan.id_kamar');
        $this->db->join('kosan', 'kosan.kode_kos = kamar.kode_kos');
        $this->db->join('pemilik_kos', 'pemilik_kos.id_pemilik = kosan.id_pemilik');
        $this->db->where($id);
        return $this->db->get();
    }

    function join_get_bayar_($id)
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('kamar', 'kamar.id_kamar = pemesanan.id_kamar');
        $this->db->join('kosan', 'kosan.kode_kos = kamar.kode_kos');
        $this->db->join('pemilik_kos', 'pemilik_kos.id_pemilik = kosan.id_pemilik');
        $this->db->where($id);
        return $this->db->count_all_results();
    }

    function count($table)
    {
        return $this->db->count_all_results($table);
    }

    function count_($table, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('kosan', 'kosan.kode_kos = kamar.kode_kos');
        $this->db->where($where);
        return $this->db->count_all_results();
    }

    function count_where($table, $where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->count_all_results();// code...
    }

    function sum($kind, $table)
    {
        $this->db->select_sum($kind);
        $query = $this->db->get($table);

        return $query;
    }

    public function store_cart()
    {
        $this->db->select('*');// code...
    }
}
