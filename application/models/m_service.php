<?php

class m_service extends CI_Model {


	function login($par)
	{
	
		$data = $this-> db ->get_where('user', $par, 1, 0);
		return $data -> result_array();
	}



/*---------------------------tambah-----------------------------*/

	public function tambahUsaha($par)
	{
		$data = $this->db->insert('usaha', $par);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function tambahKegiatan($par)
	{
		$data = $this->db->insert('kegiatan', $par);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function tambahDokumentasi($par)
	{
		$data = $this->db->insert('dokumentasi', $par);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	/*---------------------------edit-----------------------------*/

	public function edithUsaha($par)
	{
		$id_usaha=$par['id_usaha'];
		unset($par['id_usaha']);
		$this->db->where('id_usaha', $id_usaha);
		$data = $this->db->update('usaha', $par);


		return $data;
	}

	public function editKegiatan($par)
	{
		$this->db->where('id_kegiatan', $par['id_kegiatan']);
		$data = $this->db->update('kegiatan', $data);
		return $data;
	}

	public function editDokumentasi($par)
	{
		$this->db->where('id_dokumentasi', $par['id_dokumentasi']);
		$data = $this->db->update('dokumentasi', $data);
		return $data;
	}

	/*---------------------------hapus-----------------------------*/

	public function hapusUsaha($par)
	{
		$data = $this->db->delete('usaha', $par);
		return $data;
	}

	public function hapusKegiatan($par)
	{
		$data = $this->db->delete('kegiatan', $par);
		return $data;
	}

	public function hapusDokumentasi($par)
	{
		$data = $this->db->delete('dokumentasi', $par);
		return $data;
	}

	/*---------------------------View-----------------------------*/



	function dataUser($par)
	{
		
		$data = $this-> db ->get_where('user', $par, 1, 0);
		return $data -> result_array();
	}

	function dataUsaha($par)
	{
		$data = $this-> db ->get_where('usaha', $par, null, null);
		return $data -> result_array();
	}

	function dataKegiatan($par)
	{
		$data = $this-> db ->get_where('kegiatan', $par, null, null);
		return $data -> result_array();
	}

	function dataDokumentasi($par)
	{
		$data = $this-> db ->get_where('dokumentasi', $par, null, null);
		return $data -> result_array();
	}


	function orderHariIni($par)
	{
		$datestring = "%Y-%m-%d";
		$time = time();

		$datetime = mdate($datestring, $time);

		$this->db->where("DATE_FORMAT(datetime,'%Y-%m-%d') = "."'".$datetime."'",NULL,FALSE);
		if(!empty($par['id_user_fk']))
		{
			$this->db->where('id_user_fk',$par['id_user_fk']);	
		}
		$data = $this->db->count_all_results('order');
		return $data;
	}

	function order($par)
	{
		$data = $this-> db ->get_where('order', $par, null, null);
		return $data -> result_array();
	}

	function tambahOrder($par)
	{
		$data = $this->db->insert('order', $par);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	function hapusOrder($par)
	{
		$this -> db -> trans_start();
		$par2['id_order_fk']=$par['id_order'];
		$this->db->delete('detail_order', $par2);

		$this->db->delete('order', $par);
		//$insert_id = $this->db->insert_id();
		 $this->db->trans_complete();
		return $this -> db -> trans_status();
	}

	function ubahOrder($par)
	{
		$this->db->where('id_order', $par['id_order']);
		$data = $this->db->update('order', $data);
		return $data;
	}

	function tambahDetailOrder($par)
	{
		$data = $this->db->insert('detail_order', $par);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}


	function hapusDetailOrder($par)
	{
		$data = $this->db->delete('detail_order', $par);
		//$insert_id = $this->db->insert_id();
		return $data;
	}
	
	function ubahDetailOrder($par)
	{
		$this->db->where('id_order', $par['id_detail_order']);
		$data = $this->db->update('detail_order', $data);
		return $data;
	}
}
?>




