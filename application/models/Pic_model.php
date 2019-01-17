<?php 

class Pic_model extends CI_Model{
	
	//fetch all pictures from db
	function get_all_cert(){
		$all_hkis = $this->db->get('hki');
		return $all_hkis->result();
	}

	//save picture data to db
	function store_pic_data($data){
		$insert_data['nama'] = $data['nama'];
		$insert_data['judul'] = $data['judul'];
		$insert_data['institusi'] = $data['institusi'];
		$insert_data['fakultas'] = $data['fakultas'];
		$insert_data['prodi'] = $data['prodi'];
		$insert_data['ciptaan'] = $data['ciptaan'];
		$insert_data['deskripsi'] = $data['deskripsi'];
		$insert_data['file'] = $data['file'];

		$query = $this->db->insert('hki', $insert_data);
	}
	
	function ambil_nama($nama, $column){
		$this->db->select('*');
		$this->db->limit(5);
		$this->db->from('hki');
		$this->db->like('nama', $nama);
		return $this->db->get()->result_array();
	}

	function ambil_fakultas($nama, $column){
		$this->db->select('*');
		$this->db->limit(5);
		$this->db->from('fakultas');
		$this->db->like($column, $nama);
		return $this->db->get()->result_array();
	}

	function ambil_prodi($nama, $column){
		$this->db->select('*');
		$this->db->limit(5);
		$this->db->from('prodi');
		$this->db->like($column, $nama);
		return $this->db->get()->result_array();
	}

	function search($id){
		$this->db->select('hki.id, nama, institusi, nm_fakultas, nm_prodi, judul, ciptaan, deskripsi, file');
		$this->db->from('hki');
		$this->db->join('fakultas', 'hki.fakultas = fakultas.id');
		$this->db->join('prodi', 'hki.prodi = prodi.id');
		$query = $this->db->get();
		// $query = $this->db->get_where('hki', array('id' => $id));
		return $query->result();
	}
}