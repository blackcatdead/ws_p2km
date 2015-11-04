<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_service');
	}

	public function index()
	{
		echo 'login : '.'<a href='.site_url('/servicecontroller/login?username=admin&password=pass&status=1').'>'.site_url('/servicecontroller/login?username=admin&password=pass&status=1').'</a>';
		echo '</br>'.'orderHariIni : '.'<a href='.site_url('/servicecontroller/orderHariIni').'>'.site_url('/servicecontroller/orderHariIni').'</a>';
		echo '</br>'.'orderHariIni : '.'<a href='.site_url('/servicecontroller/orderHariIni?id_user_fk=1').'>'.site_url('/servicecontroller/orderHariIni?id_user_fk=1').'</a>';
		echo '</br>'.'order : '.'<a href='.site_url('/servicecontroller/order?status=0').'>'.site_url('/servicecontroller/order?status=0').'</a>';
		echo '</br>'.'tambahOrder : '.'<a href='.site_url('/servicecontroller/tambahOrder?id_user_fk=1&nama_pemesan=joki&no_meja=19&status=0').'>'.site_url('/servicecontroller/tambahOrder?id_user_fk=1&nama_pemesan=joki&no_meja=19&status=0').'</a>';
		echo '</br>'.'tambahDetailOrder : '.'<a href='.site_url('/servicecontroller/tambahDetailOrder?id_order_fk=5&id_menu_fk=1&quantity=3&catatan=tidak%20pedas&subtotal=30000&status=0').'>'.site_url('/servicecontroller/tambahDetailOrder?id_order_fk=5&id_menu_fk=1&quantity=3&catatan=tidak%20pedas&subtotal=30000&status=0').'</a>';
		echo '</br>'.'hapusDetailOrder : '.'<a href='.site_url('/servicecontroller/hapusDetailOrder?id_detail_order=3').'>'.site_url('/servicecontroller/hapusDetailOrder?id_detail_order=3').'</a>';

		http://localhost/ws_resto/index.php/servicecontroller/hapusDetailOrder?id_detail_order=3
	}

	public function uploadImage()
	{
		$file_path = "res/";
     
	    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
	    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
	        echo "success";
	    } else{
	        echo "fail";
	    }
		

	}

	public function login()
	{
		$data=$this->input->get();
		$res = $this->m_service->login($data);
		$response = json_encode($res);
		echo $response;
	}

	public function logout()
	{
		echo 'logout';
	}


	/*---------------------------tambah-----------------------------*/

	public function tambahUsaha()
	{
		$data=$this->input->get();
		$res = $this->m_service->tambahUsaha($data);
		echo $res;
	}

	public function tambahKegiatan()
	{
		$data=$this->input->get();
		$res = $this->m_service->tambahKegiatan($data);
		echo $res;
	}

	public function tambahDokumentasi()
	{
		$data=$this->input->get();
		$res = $this->m_service->tambahDokumentasi($data);
		echo $res;
	}

	/*---------------------------edit-----------------------------*/

	public function edithUsaha()
	{
		$data=$this->input->get();
		$res = $this->m_service->edithUsaha($data);
		echo $res;
	}

	public function editKegiatan()
	{
		$data=$this->input->get();
		$res = $this->m_service->editKegiatan($data);
		echo $res;
	}

	public function editDokumentasi()
	{
		$data=$this->input->get();
		$res = $this->m_service->editDokumentasi($data);
		echo $res;
	}

	/*---------------------------hapus-----------------------------*/

	public function hapusUsaha()
	{
		$data=$this->input->get();
		$res = $this->m_service->hapusUsaha($data);
		echo $res;
	}

	public function hapusKegiatan()
	{
		$data=$this->input->get();
		$res = $this->m_service->hapusKegiatan($data);
		echo $res;
	}

	public function hapusDokumentasi()
	{
		$data=$this->input->get();
		$res = $this->m_service->hapusDokumentasi($data);
		echo $res;
	}

	/*---------------------------View-----------------------------*/

	public function dataUser()
	{
		$data=$this->input->get();
		$res = $this->m_service->dataUser($data);
		$response = json_encode($res);
		echo $response;
	}

	public function dataUsaha()
	{
		$data=$this->input->get();
		$res = $this->m_service->dataUsaha($data);
		$response = json_encode($res);
		echo $response;
	}

	public function dataKegiatan()
	{
		$data=$this->input->get();
		$res = $this->m_service->dataKegiatan($data);
		$response = json_encode($res);
		echo $response;
	}

	public function dataDokumentasi()
	{
		$data=$this->input->get();
		$res = $this->m_service->dataDokumentasi($data);
		$response = json_encode($res);
		echo $response;
	}

	/*------------------------------------------------------------------*/
	
}
