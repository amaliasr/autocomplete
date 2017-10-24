<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete_Model extends CI_Model {
	

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			
		}	
		public function lihatBuku(){
			$this->db->select("buku.judul as judulBuku, buku.penerbit, kategori.nama as kategori, penulis.nama as penulis");
			$this->db->join('kategori', 'kategori.id = buku.fk_kategori', 'inner');
			$this->db->join('penulis_buku', 'penulis_buku.fk_buku = buku.id', 'inner');
			$this->db->join('penulis', 'penulis.id = penulis_buku.fk_penulis', 'inner');
			$query = $this->db->get('buku');
			return $query->result();
		}
		

}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>