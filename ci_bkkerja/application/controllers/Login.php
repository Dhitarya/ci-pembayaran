<?php
class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('v_logintop');
	}

	function reg_user(){
		$this->load->view('v_regtop');
	}

	function add_user(){
		//setelah operasi penambahan user, kembali ke login awal
		redirect('login');
	}

	function auth(){
		$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		$encpassword = md5($password);

		$cek_user = $this->model_ppdb->cek_user($email,$encpassword);

		$data = $cek_user->row_array();

		if ($cek_user->num_rows() > 0){
			$data = $cek_user->row_array();
			$this->session->set_userdata('masuk',TRUE);
			if($data['level'] == '1'){
				$this->session->set_userdata('akses','1');
				$this->session->set_userdata('ses_id',$data['id']);
				$this->session->set_userdata('ses_nama',$data['namalengkap']);
				$this->session->set_userdata('ses_email',$data['email']);
				$this->session->set_userdata('ses_pass',$data['password']);
				$this->session->set_userdata('ses_level',$data['level']);
				redirect('main');
			}else if($data['level'] == '2'){
				$this->session->set_userdata('akses','2');
				$this->session->set_userdata('ses_id',$data['id']);
				$this->session->set_userdata('ses_nama',$data['namalengkap']);
				$this->session->set_userdata('ses_email',$data['email']);
				$this->session->set_userdata('ses_pass',$data['password']);
				$this->session->set_userdata('ses_level',$data['level']);
				redirect('main');
			}else{
				$data['salah'] = 'login salah';
				redirect('login');
			}
		}else{
			redirect('login');
		}
	
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}