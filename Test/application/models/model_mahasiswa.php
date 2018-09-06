<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_mahasiswa extends CI_Model {
		
		function __construct() 
		{
			parent :: __construct();
		}
		
		public function get_mhs()
		{
			$data = $this->db->query("SELECT * FROM menu");
			return $data->result();
		}
		
		public function get_edit_data($id)
		{
			$data = $this->db->query("SELECT * FROM menu WHERE id='$id'");
			return $data->result();
		}
		
		public function count_mahasiswa()
		{
			$data = $this->db->query("SELECT * FROM menu");
			return $data->num_rows();
		}
		
		public function simpan_data()
		{
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048000';
			$config['max_width']     = '5000';
			$config['max_height']    = '4000';
			$config['file_name']     = url_title($this->input->post('photo'));
			$filename = $this->upload->file_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			$data = $this->upload->data();
			
			$data = array(
				'id'          => "",
				'nama'        => $this->input->post('nama'),
				'detail'         => $this->input->post('detail'),
				'price'     => $this->input->post('price'),
				'photo'       => $data['file_name']
			);
			$this->db->insert('menu',$data);
			redirect('mahasiswa/index');
		}	
		
		public function eksekusi_edit()
		{
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048000';
			$config['max_width']     = '5000';
			$config['max_height']    = '4000';
			$config['file_name']     = url_title($this->input->post('photo'));
			$filename = $this->upload->file_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			$data = $this->upload->data();
			
			$id = $this->input->post('id');
			$data = array(
				'id'          => "",
				'nama'        => $this->input->post('nama'),
				'detail'         => $this->input->post('detail'),
				'price'     => $this->input->post('price'),
				'photo'       => $data['file_name']
			);
			
			$this->db->where('id',$id); 
			$this->db->update('menu',$data); 
			redirect('mahasiswa/index');
		}	
		
		public function hapus_data($id)
		{
			$this->db->query("DELETE FROM menu WHERE id='$id'");
			redirect('mahasiswa/index');
		}
	}
?>	