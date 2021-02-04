<?php
	class Users_model extends CI_Model{
		public function register($enc_password){
			//User data array 
			$email = $this->input->post('email');
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $email,
				'username' => $this->input->post('username'),
				'password' => $enc_password,
				'role_id' => 2,
				'is_active' => 0,
				'image' => 'user.png'
				);

			//siapkan token
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];
			//Menambah user
			$this->db->insert('users', $data);
			//Menambah token
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');

			return true;
		}

		
		private function _sendEmail($token, $type){
			$config = [
				 'protocol'  => 'smtp',
				 'smtp_host' => 'ssl://smtp.googlemail.com',
				 'smtp_user' => 'aplikasikpm.unisma@gmail.com',
				 'smtp_pass' => 'kpmunisma123',
				 'smtp_port' => 465,
				 'mailtype'  => 'html',
				 'charset' 	 => 'utf-8',
				 'newline'   => "\r\n"
			];

			$this->load->library('email', $config);

			$this->email->from('aplikasikpm.unisma@gmail.com', 'aplikasi kantor penjaminan mutu unisma');
			$this->email->to($this->input->post('email'));

			if($type == 'verify'){
			$this->email->subject('Account Verification');
			$this->email->message('click this link to verify your account : <a href="'. base_url() . 'users/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
			} else if($type == 'forgot'){
				$this->email->subject('Reset Password');
				$this->email->message('click this link to reset yout password: <a href="'. base_url() . 'users/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
			}

			if($this->email->send()){
				return true;
			}else{
				echo $this->email->print_debugger();
				die;
			}
		}

		public function login($username, $password){
			//validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id_user;
			}else{
				return false;
			}
		}

		//Memeriksa ketersediaan username
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(!($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
		//Memeriksa ketersediaan email
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(!($query->row_array())){
				return true;
			}else{
				return false;
			}
		}

		public function forgot_password($email)
		{
			$token = base64_encode(random_bytes(32));
		 	$user_token = 
		 				[
						'email' => $email,
						'token' => $token,
						'date_created' => time()
						];
				//Menambah token
			$this->db->insert('user_token', $user_token);
			$this->users_model->_sendEmail($token, 'forgot');

			$this->session->set_flashdata('tokensent', 'cek email anda untuk reset password');
		 	redirect('users/forgotpassword');	

		}

		
	}