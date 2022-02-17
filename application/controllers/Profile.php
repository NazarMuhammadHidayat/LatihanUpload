<?php

class Profile extends CI_Controller {

	 function index()
	{
		$this->load->view('v_profile');
	}
	function biodata($d1, $d2, $d3, $d4, $d5, $d6,$d7)
	{
		

		$data = [
			'id'		=> $d7,
			'nama' 		=> $d1,
			'alamat'	=> $d2,
			'jk'		=> $d3,
			'kls' 		=> $d4,
			'jurusan'	=> $d5,
			'hobi'		=> $d6,	
		

		];
		$this->load->view('biodata', $data);
	}

	function tambah_data(){
		$this->load->view('tambah_data');

	}

	function action_tambah_data(){
		$add = [

			'id' 			=> $this->input->post('id'),
			'nama' 			=> $this->input->post('nama'),
			'alamat' 		=> $this->input->post('alamat'),
			'jk' 			=> $this->input->post('jk'),
			'kls' 			=> $this->input->post('kls'), 
			'jurusan'		=> $this->input->post('jurusan'), 
			'hobi' 			=> $this->input->post('hobi'), 
		];

		$this->load->view('biodata',$add);
	}

	function tampil_data(){
		$this->load->model('M_profile');
		$data['profile'] = $this->M_profile->tampil_data()->result();
		$this->load->view('data_siswa',$data);
	}

	function tambah_data_p(){
		$this->load->view('tambah_data_p');
	}
	
	public function action_tambah_data_p(){
		$add = [
				'nama_depan'			=> $this->input->post('nama_depan'),
				'nama_belakang'			=> $this->input->post('nama_belakang'),
				'tempat_lahir'			=> $this->input->post('tempat_lahir'),
				'tanggal_lahir'			=> $this->input->post('tanggal_lahir'),
				'jenis_kelamin'			=> $this->input->post('jenis_kelamin'),
				'alamat'				=> $this->input->post('alamat'),
				'jenjang_pendidikan'	=> $this->input->post('jenjang_pendidikan'),
		];	

		$this->db->insert('tabel_siswa',$add);
		redirect('../profile/tampil_data');
	}

	 public function update_data($id){
		 $this->load->model('M_profile');
		 $data['profile'] = $this->M_profile->get_data_by_id($id)->row_array();
		 $this->load->view('update_data',$data);
	 }
	 public function action_update_data(){
		 $id = $this->input->post('id');
		 $update = [
			'nama_depan'				=>$this->input->post('nama_depan'),
			'nama_belakang'				=>$this->input->post('nama_belakang'),
			'tempat_lahir'				=>$this->input->post('tempat_lahir'),
			'tanggal_lahir'				=>$this->input->post('tanggal_lahir'),
			'jenis_kelamin'				=>$this->input->post('jenis_kelamin'),
			'alamat'					=>$this->input->post('alamat'),
			'jenjang_pendidikan'		=>$this->input->post('jenjang_pendidikan'),
		 ];

		 $update = $this->db->update('tabel_siswa' , $update, ['id' => $id]);
		 redirect('../profile/tampil_data');
	 }
}
?>	