<?php

class Model_barang extends CI_Model
{

	function list_barang()
	{
		// ambil data barang dari tabel barang
		$barang = $this->db->get('barang');
		return $barang;
	}

	function product($kode_barang)
	{
		return $this->db->get_where('barang', ['kode_barang' => $kode_barang]);
	}
}
