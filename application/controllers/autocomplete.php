<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function read(){
		$this->load->model('autocomplete_model');
		$data["lihat"] = $this->autocomplete_model->lihatBuku();
		$this->load->view('index',$data);
	}
	
	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('buku')->like('judul',$keyword)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->judul,
				'penerbit'	=>$row->penerbit

			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}
}
?>