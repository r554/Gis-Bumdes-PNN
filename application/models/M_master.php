<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('data_hasil');
		$this->db->join('data_brg', 'data_brg.id_brg = data_hasil.id_brg', 'left');
		$this->db->join('data_mitra', 'data_mitra.id = data_hasil.id_mitra', 'left');
		$this->db->join('data_provinsi', 'data_provinsi.id_provinsi = data_mitra.id_provinsi', 'left');

		// $this->db->order_by('data_mitra.id', 'desc');
		return $this->db->get()->result();
	}

	// public function add($data)
	// {
	// 	$this->db->insert('tbl_bangunan', $data);
	// }
	
	public function detail($id_hasil)
	{
		$this->db->select('*');
		$this->db->from('data_hasil');
		$this->db->join('data_brg', 'data_brg.id_brg = data_hasil.id_brg', 'left');
		$this->db->join('data_mitra', 'data_mitra.id = data_hasil.id_mitra', 'left');
		$this->db->join('data_provinsi', 'data_provinsi.id_provinsi = data_mitra.id_provinsi', 'left');
		$this->db->where('id_hasil', $id_hasil);
		return $this->db->get()->row();
	}

    function getbrg()
  {
      $query = $this->db->query("SELECT * FROM data_brg ORDER BY id_brg ASC");
      return $query->result();
  }
  function getprovinsi()
  {
      $query = $this->db->query("SELECT * FROM data_provinsi  ORDER BY id_provinsi ASC");
      return $query->result();
  }

//     
  function filter($brg,$provinsi,$bulan,$tahun) {
        $query = $this->db->query("SELECT * FROM data_hasil
        JOIN data_brg ON data_brg.id_brg = data_hasil.id_brg 
        JOIN data_mitra ON data_mitra.id = data_hasil.id_mitra
        JOIN data_provinsi ON data_provinsi.id_provinsi = data_mitra.id_provinsi
         WHERE data_hasil.id_brg='$brg' AND data_mitra.id_provinsi='$provinsi' AND
         MONTH(data_hasil.tanggal)= '$bulan' AND YEAR(data_hasil.tanggal)= '$tahun'
         ");
       return $query->result();
   }

	// public function edit($data)
	// {
	// 	$this->db->where('id_bangunan', $data['id_bangunan']);
	// 	$this->db->update('tbl_bangunan', $data);
	// }

	// public function delete($data)
	// {
	// 	$this->db->where('id_bangunan', $data['id_bangunan']);
	// 	$this->db->delete('tbl_bangunan', $data);
	// }

}

/* End of file M_bangunan.php */