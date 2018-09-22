<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class crud_siswa extends CI_Model
{
	
	function __construct(){
		parent:: __construct();
		$this->load->database();//menload databasenya
	}

	/*fungsi unutk mengambil data dari tabel siswa*/
	public function tampil_siswa(){
		$query = $this->db->get('siswa');
		return $query->result();
	}

	/*fungsi unutk mengambil data dari tabel guru*/
	public function tampil_guru(){
		$query = $this->db->get('guru');
		return $query->result();
	}

	/*fungsi unutk mengambil data dari tabel jadwal*/
	public function tampil_jadwal(){
		$query = $this->db->get('jadwal');
		return $query->result();
	}

	/*fungsi untuk menambah data ke tabel siswa*/
	public function tambahdatasiswa($siswa){
		return $this->db->insert('siswa',$siswa);
	}

	/*fungsi untuk menambah data ke tabel siswa*/
	public function tambahdatajadwal($jadwal){
		return $this->db->insert('jadwal',$jadwal);
	}

	/*fungsi untuk menambah data ke tabel siswa*/
	public function tambahdataguru($guru){
		return $this->db->insert('guru',$guru);
	}

	/*fungsi untuk mengambil lalu mengupdate data dari tabel siswa*/
	public function editdatasiswa($siswa, $id){
		$this->db->where('siswa.id',$id);
		return $this->db->update('siswa',$siswa);
	}

	/*fungsi untuk mengambil lalu mengupdate data dari tabel guru*/
	public function editdataguru($guru, $id){
		$this->db->where('guru.guru_id',$id);
		return $this->db->update('guru',$guru);
	}

	/*fungsi untuk mengambil lalu mengupdate data dari tabel jadwal*/
	public function editdatajadwal($jadwal, $id){
		$this->db->where('jadwal.jadwal_id',$id);
		return $this->db->update('jadwal',$jadwal);
	}

	/*megambil id dari tabel siswa*/
	public function getuser($id){
		$query = $this->db->get_where('siswa',array('id' => $id ));
		return $query->row_array();
	}

	/*megambil id dari tabel guru*/
	public function getguru($id){
		$query = $this->db->get_where('guru',array('guru_id' => $id ));
		return $query->row_array();
	}

	/*megambil id dari tabel jadwal*/
	public function getjadwal($id){
		$query = $this->db->get_where('jadwal',array('jadwal_id' => $id ));
		return $query->row_array();
	}

	/*fungsi untuk mendelete data dari tabel siswa*/
	public function deletesiswa($id){
		$this->db->where('siswa.id', $id);
		return $this->db->delete('siswa');
	}

	/*fungsi untuk mendelete data dari tabel guru*/
	public function deleteguru($id){
		$this->db->where('guru.guru_id', $id);
		return $this->db->delete('guru');
	}

	/*fungsi untuk mendelete data dari tabel jadwal*/
	public function deletejadwal($id){
		$this->db->where('jadwal.jadwal_id', $id);
		return $this->db->delete('jadwal');
	}

	/*fungsi untuk menambah data ke tabel users*/
 	public function daftar($data)
    {
        $this->db->insert('users',$data);
    }

}
?>
