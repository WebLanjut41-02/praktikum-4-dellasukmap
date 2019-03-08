<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('dbdaftar');
	}
	public function index()
	{
		$this->load->view('index');
	}

 
	public function tentang()
	{
		$this->load->view('tentangkami');
	}

	public function artikel()
	{
		$this->load->view('artikel');
	}

	public function produk()
	{
		$this->load->view('produk');
	}

	public function komen()
	{
		$this->load->view('komen');
	}
	public function pesan()
	{
		$data['nama'] = $this->input->post('nama');
		$data['kom'] = $this->input->post('komen');

		$this->load->view('komen',$data);
		
	}

	public function bantuan()
	{
		$this->load->view('bantuan');
	}

	public function log_in()
	{
		$this->load->view('login');
	}

	public function proseslogin()
	{
		$username = $this->session->userdata('username');
		if($username==""){
			$this->load->view('login');
		}else{
			redirect('login/logout');
		}
	}

	public function ceklogin()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if($username=="user" && $password=="123"){
			$this->session->set_userdata(array('username'=>$username));
			redirect('welcome/user');

		}elseif($username=="admin" && $password=="123"){
			$this->session->set_userdata(array('username'=>$username));
			redirect('welcome/admin');
		}else{
			$pesan = "Login Gagal! Masukkan Data Dengan Benar!";
        echo "<script type='text/javascript'>alert('$pesan'); </script>";
        echo "<meta http-equiv='refresh' content='1;url=log_in'>";
		
		}
	}

	public function user()
	{
		$this->load->view('user');
	}

	public function admin()
	{
		$this->load->view('admin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/log_in');
	}

	public function posting()
	{
		$this->load->view('posting');
	}

	public function prosesposting()
	{
		$data['judul'] = $this->input->post('judul');
		$data['status'] = $this->input->post('status');

		$this->load->view('posting',$data);
		
	}


	public function komen_user()
	{
		$this->load->view('komen_user');
	}

	public function proses_komen_user()
	{
		$data['nama'] = $this->input->post('nama');
		$data['komen'] = $this->input->post('komen');

			$this->load->view('komen_user',$data);
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function proses_register()
	{
		$data['nama'] = $this->input->post('nama');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
		$data['alamat'] = $this->input->post('alamat');
		$data['asal_sekolah'] = $this->input->post('asal_sekolah');
		$data['alamat_sekolah'] = $this->input->post('alamat_sekolah');
		$data['jurusan'] = $this->input->post('jurusan');
		$data['email'] = $this->input->post('email');

		$this->dbdaftar->inputdaftar($data);

		redirect('welcome/tampilprofildaftar');

		// $this->load->view('tampil_regis',$data);

		// if($data['nama']=="user"){
		// 	$this->session->set_userdata(array('nama'=>$data['nama']));
		// 	// $this->load->view('tampil_regis', $data);


		// }elseif($data['nama']=="admin"){
		// 	$this->session->set_userdata(array('nama'=>$data['nama']));
		// 	// $this->load->view('tampil_regis', $data);
		// }else{
		// 	$pesan = "Login Gagal! Nama akun sudah ada!";
  //       echo "<script type='text/javascript'>alert('$pesan'); </script>";
  //       echo "<meta http-equiv='refresh' content='1;url=register'>";

  //       $pesan=true;
  //       $errormsg='data tidak ada';
		
		// }

	}

	public function tampilprofildaftar()
	{

		$data['daftar'] = $this->dbdaftar->tampil_data()->result();
		$this->load->view('profildaftar',$data);
		
	}




	public function artikel_admin()
	{
		$this->load->view('artikel_admin');
	}

	public function tentang_admin()
	{
		$this->load->view('tentang_admin');
	}

	public function bantuan_admin()
	{
		$this->load->view('bantuan_admin');
	}

	public function proses_artikel_admin()
	{

		if( ($data['judul_artikel_admin'] = $this->input->post('judul_artikel_admin')) && ($data['artikel_admin'] = $this->input->post('artikel_admin')));

		$this->load->view('tampil_artikel_admin',$data);

		$pesan = "Posting Berhasil Berhasil! ";
        echo "<script type='text/javascript'>alert('$pesan'); </script>";
        echo "<meta http-equiv='refresh' content='';url=proses_artikel_admin>";
	
	}

	// public function coba(){
	// 	$data['judul_artikel_admin'] = $this->input->post('judul_artikel_admin');
	// 	$data['artikel_admin'] = $this->input->post('artikel_admin');

	// 	if($this->session->set_userdata(array('judul_artikel_admin'=>$judul_artikel_admin && 'artikel_admin'=>$artikel_admin));
	// 		redirect('welcome/proses_artikel_admin');
	// }

	public function tampildatasiswa()
	{
		$data['daftar'] = $this->dbdaftar->tampil_data()->result();
		$this->load->view('datasiswa',$data);
		
	}


	public function hapusdatasiswa($id_daftar){
		$where = array('id_daftar' => $id_daftar);
		$this->dbdaftar->hapus_data($where,'daftar');
		redirect('welcome/tampildatasiswa');
	}



}