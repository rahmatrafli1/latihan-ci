<?php

class Barang extends CI_Controller
{
	function index()
	{
		$this->load->model('model_barang');
		$judul = "Daftar Barang";
		$data['judul'] = $judul;
		$data['barang'] = $this->model_barang->list_barang()->result();
		$this->load->view('list_barang', $data);
	}

	function input()
	{
		$judul = "Input Barang";
		$data['judul'] = $judul;
		$this->load->view('input_barang', $data);
	}

	function input_simpan()
	{
		$databarang = [
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'harga' => $this->input->post('harga')
		];
		$this->db->insert('barang', $databarang);
		redirect('');
	}

	function edit()
	{
		$this->load->model('model_barang');
		$judul = "Edit Barang";
		$data['judul'] = $judul;
		$kode_barang = $this->uri->segment(3);
		$data['product'] = $this->model_barang->product($kode_barang)->row_array();
		$this->load->view('update_barang', $data);
	}

	function edit_simpan()
	{
		$id = $this->input->post('id');
		$databarang = [
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'harga' => $this->input->post('harga')
		];
		$this->db->where('kode_barang', $id);
		$this->db->update('barang', $databarang);
		redirect('');
	}

	function delete()
	{
		$kode_barang = $this->uri->segment(3);
		$this->db->where('kode_barang', $kode_barang);
		$this->db->delete('barang');
		redirect('');
	}
}
