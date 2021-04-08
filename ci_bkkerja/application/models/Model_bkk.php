<?php
class model_bkk extends CI_Model{
	function cek_user($email, $password){
		$query = $this->db->query("select * from user where disable = '0' and email='$email' and password='$password'");
		return $query;
	}

	function tampilcarikerja(){
		$query = $this->db->get('carikerja');
		return $query;
	}
	public function daftarsimpan(){
		$arraydata = array('nama_lowongan' => $this->input->post('namalowongan'),
							'deskripsi_lowongan'=> $this->input->post('deskripsilowongan'),
							'tanggal_akhir_lowongan'=> $this->input->post('tanggalakhirlowongan'));
		$this->db->Insert('carikerja',$arraydata);
							}
	function daftaredit($id){
		$this->db->where('id', $id);
		$query = $this->db->get('pendaftaran');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	function updatedaftar(){
		$id = $this->input->post('hidden');
			$arraydata = array('nama_lowongan' => $this->input->post['namalowongan'],
							'deskripsi_lowongan'=> $this->input->post['deskripsilowongan'],
							'tanggal_akhir_lowongan'=> $this->input->post['tanggalakhirlowongan']);
							    
			$this->db->where('id',$id);
			$this->db->update('pendaftaran', $arraydata);
			echo $this->db->last_query();extit;
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
	}

	public function deletedaftar($id){
		$this->db->where('id', $id);
		$this->db->delete('pendaftaran');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}