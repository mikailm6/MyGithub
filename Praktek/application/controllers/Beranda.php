<?php 
defined("BASEPATH") or exit ('No Direct Script Case Acces Allowed');
/**
 * 
 */
/*Kelas beranda.php ini digunakan untuk di halaman dashboard*/
class Beranda extends CI_Controller
{

	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('crud_siswa');//menload model crud_siswa
		
	}
	public function index(){
		$this->load->view('account/beranda.php');//halaman awal jika localhost/praktek di akses
		
	}

	/*fungsi untuk menampilkan semua data yang ada pada tabel*/
	public function tampil(){
		$data['siswa'] = $this->crud_siswa->tampil_siswa();//tabel siswa
		$data['guru'] = $this->crud_siswa->tampil_guru();//tabel guru
		$data['jadwal'] = $this->crud_siswa->tampil_jadwal();//tabel jadwal
		$this->load->view('dashboard.php', $data);//menloadview dashboard.php beserta dengan data yang ada pada database
	}

	/*link untuk menambah data siswa*/
	public function linktambahdata(){
		$this->load->view('tambah_data_siswa.php');
	}

	/*link untuk menambah data guru*/
	public function linktambahdataguru(){
		$this->load->view('tambah_data_guru.php');
	}

	/*link untuk menambah data jadwal*/
	public function linktambahdatajadwal(){
		$this->load->view('tambah_data_jadwal.php');
	}

	/*fungsi untuk menambah data pada tabel siswa*/
	public function tambahdata(){
		$siswa['nama'] = $this->input->post('nama');
		$siswa['kelas'] = $this->input->post('kelas');
		$siswa['alamat'] = $this->input->post('alamat');
	
		$query = $this->crud_siswa->tambahdatasiswa($siswa);
		redirect('beranda/tampil');
	}

	/*fungsi untuk menambah data pada tabel guru*/
	public function tambahdataguru(){
		$guru['nama'] = $this->input->post('nama');
		$guru['mapel'] = $this->input->post('mapel');
		$guru['telp'] = $this->input->post('telp');

		$query = $this->crud_siswa->tambahdataguru($guru);
		redirect('beranda/tampil');
	}

	/*fungsi untuk menambah data pada tabel jadwal*/
	public function tambahdatajadwal(){
		$jadwal['guru_id'] = $this->input->post('guru_id');
		$jadwal['mapel'] = $this->input->post('mapel');
		$jadwal['hari'] = $this->input->post('hari');
		$jadwal['jam'] = $this->input->post('jam');
		$jadwal['jamakhir'] = $this->input->post('jamakhir');

		$query = $this->crud_siswa->tambahdatajadwal($jadwal);
		redirect('beranda/tampil');
	}

	/*link menuju editdatasiswa.php dengan mengambil id dari kolom*/
	public function linkeditdata($id){
		$data['siswa'] = $this->crud_siswa->getuser($id);//id data dari kolom
		$this->load->view('editdatasiswa', $data);//menload view editdatasiswa.php dengan data yang diambil sesuai dengan id
	}

	/*link menuju editdataguru.php dengan mengambil id dari kolom*/
	public function linkeditdataguru($id){
		$data['guru'] = $this->crud_siswa->getguru($id);//id data dari kolom
		$this->load->view('editdataguru', $data);//menload view editdataguru.php dengan data yang diambil sesuai dengan id
	}

	/*link menuju editdatajadwal.php dengan mengambil id dari kolom*/
	public function linkeditdatajadwal($id){
		$data['jadwal'] = $this->crud_siswa->getjadwal($id);//id data dari kolom
		$this->load->view('editdatajadwal', $data);//menload view editdatajadwal.php dengan data yang diambil sesuai dengan id
	}

	/*fungsi untuk mengupdate data siswa*/
	public function update($id){
		$siswa['nama'] = $this->input->post('nama');
		$siswa['kelas'] = $this->input->post('kelas');
		$siswa['alamat'] = $this->input->post('alamat');

		$query = $this->crud_siswa->editdatasiswa($siswa,$id);
		redirect('beranda/tampil');
	}

	/*fungsi untuk mengupdate data guru*/
	public function updateguru($id){
		$guru['nama'] = $this->input->post('nama');
		$guru['mapel'] = $this->input->post('mapel');
		$guru['telp'] = $this->input->post('telp');

		$query = $this->crud_siswa->editdataguru($guru,$id);
		redirect('beranda/tampil');
	}

	/*fungsi untuk mengupdate data jadwal*/
	public function updatejadwal($id){
		$jadwal['guru_id'] = $this->input->post('guru_id');
		$jadwal['mapel'] = $this->input->post('mapel');
		$jadwal['hari'] = $this->input->post('hari');
		$jadwal['jam'] = $this->input->post('jam');
		$jadwal['jamakhir'] = $this->input->post('jamakhir');

		$query = $this->crud_siswa->editdatajadwal($jadwal,$id);
		redirect('beranda/tampil');
	}

	/*fungsi untuk menghapus data dari tabel siswa sesuai dengan id yang ada pada kolom yang sama*/
	public function deletesiswa($id){
		$query = $this->crud_siswa->deletesiswa($id);
		redirect('beranda/tampil');
	}

	/*fungsi untuk menghapus data dari tabel guru sesuai dengan id yang ada pada kolom yang sama*/
	public function deleteguru($id){
		$query = $this->crud_siswa->deleteguru($id);
		redirect('beranda/tampil');
	}

	/*fungsi untuk menghapus data dari tabel jadwal sesuai dengan id yang ada pada kolom yang sama*/
	public function deletejadwal($id){
		$query = $this->crud_siswa->deletejadwal($id);
		redirect('beranda/tampil');
	}
}
	
?>