<?php
	class Users extends CI_Controller{
		public function register(){
			$data['title'] = 'Sign Up';

			if($this->session->userdata('logged_in')){
			redirect('home');}
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('users/register', $data);
			}else{
				// Encrypt Password
				$enc_password = md5($this->input->post('password'));

				$this->users_model->register($enc_password);
				//Set Message
				$this->session->set_flashdata('user_registered', 'Anda telah terdaftar. Please Check Your Email And Activate Your Account');
				redirect('users/login');
			}
		}

		public function verify(){
			$email = $this->input->get('email');
			$token = $this->input->get('token');

			$user = $this->db->get_where('users', ['email' => $email])->row_array();

			if($user){
				$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
				if($user_token){
					if(time() - $user_token['date_created'] < 86400){
						$this->db->set('is_active', 1);
						$this->db->where('email', $email);
						$this->db->update('users');

						$this->db->delete('user_token', ['email' => $email]);


						$this->session->set_flashdata('success_verify', 'Account Activation success! You may login now');
						redirect('users/login');
					} else {

	  					$this->db->delete('users', ['email' => $email]);
	  					$this->db->delete('user_token', ['email' => $email]);

						$this->session->set_flashdata('expiredtoken', 'Account Activation failed! token expired');
						redirect('users/login');	
					}
				} else {
					$this->session->set_flashdata('falsetoken', 'Account Activation failed! wrong token');
					redirect('users/redirect');	
				}
			} else {
				$this->session->set_flashdata('usernotfound', 'Account Activation failed! wrong email');
				redirect('users/login');	
			}
		}

		public function redirect(){
			$this->load->view('users/redirect');
		}


		public function login(){
			$data['title'] = 'Log In';

			if($this->session->userdata('logged_in')){
			redirect('home');}
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('users/login', $data);
			}else{
				//Get username
				$username = $this->input->post('username');
				//Get and Encrypt the password
				$password = md5($this->input->post('password'));

				$data = $this->db->get_where('users', ['username' => $username])->row_array();
				//Login user
				if($data['is_active'] == 1){
					$user_id = $this->users_model->login($username, $password);
					if($user_id){
					//Session
					$user_data = array(
						'id_user' => $user_id,
						'username' => $username,
						'role_id' => $data['role_id'],
						'logged_in' => true
						);
					$this->session->set_userdata($user_data);
					//Set Message
					$this->session->set_flashdata('login_success', 'Anda telah masuk.');
					redirect('home');
				}else{
					//Set Message
					$this->session->set_flashdata('login_failed', 'Anda gagal masuk.');
					redirect('users/login');
				}

				} else {
				   $this->session->set_flashdata('emailnotactive', 'Email is not active, Please check your inbox');
				   redirect('users/login');	
				}

				
			}
		}
		public function logout(){
			//unset data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');
			//Set Message
			$this->session->set_flashdata('logout_success', 'Anda telah keluar.');
			redirect('users/login');
		}

		//Mengecek ketersediaan username
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'Username sudah terpakai, mohon ubah username.');
			if($this->users_model->check_username_exists($username)){
				return true;
			}else{
				return false;
			}
		}
		//Mengecek ketersediaan email
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'Email sudah terpakai, mohon ubah email.');
			if($this->users_model->check_email_exists($email)){
				return true;
			}else{
				return false;
			}
		}

		public function blocked()
		{
			
			$this->load->view('pages/403');
		}

		public function profile()
		{
			$data['unit'] = $this->tendik_model->listUnit();
			$data['title'] = 'Profile';
			$data['user'] = $this->db->get_where('users', ['id_user' =>
			$this->session->userdata('id_user')])->row_array();

			// 	print_r($data['user']);

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');

			if($this->form_validation->run() == false){
				$this->load->view('templates/header', $data);
				$this->load->view('users/profile',$data);
				$this->load->view('templates/footer');
			}else {
				$name = $this->input->post('nama');

				$id = $this->session->userdata('id_user');

				//cek jika ada gambar yang akan diupload
				$upload_image = $_FILES['image']['name'];
				var_dump($upload_image);
				
				if ($upload_image){
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']     = '2048';
					$config['upload_path'] = './assets/src/img/avatars/';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('image')){
						$old_image = $data['user']['image'];
						if($old_image != 'user.png')
						{
							unlink(FCPATH . 'assets/src/img/avatars/' . $old_image);
						}


						$new_image = $this->upload->data('file_name');
						$this->db->set('image', $new_image);
					}else {
						echo $this->upload->display_errors();
					}
				}

				//$data = array(
				//'name' => $name,
				//);
				
				$this->db->set('name', $name);
				$this->db->where('id_user', $id);
				$this->db->update('users');
				$this->session->set_flashdata('message', 'Anda telah update profile.');
				redirect('home');
			}


			
		}

		public function changepassword()
		{
		 $data['unit'] = $this->tendik_model->listUnit();
		 $data['title'] = 'Ganti Password';
		 $data['user'] = $this->db->get_where('users', ['id_user' =>
			$this->session->userdata('id_user')])->row_array();

		 $this->form_validation->set_rules('current_password', 'Current_password', 'required');
		 $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|matches[new_password2]');
		 $this->form_validation->set_rules('new_password2', 'Ulangi Password', 'required|matches[new_password1]');

		 print_r($data['user']['password']);
		 if($this->form_validation->run() == false)
		 {
		 	$this->load->view('templates/header', $data);
		 	$this->load->view('users/changepassword');
		 	$this->load->view('templates/footer');
		 } else {
		 	$current_password = $this->input->post('current_password');
		 	$new_password = $this->input->post('new_password1');
		 	if(!md5($current_password) == $data['user']['password']){
		 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> password yang anda masukan salah</div>');
		 		redirect('users/profile/changepassword');
		 	} else {
		 		if($current_password == $new_password){
		 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> password baru dan password lama tidak boleh sama</div>');
		 		redirect('users/profile/changepassword');	
		 		} else {
		 			//password sudah ok
		 			$enc_password = md5($this->input->post('new_password1'));

		 			$this->db->set('password', $enc_password);
		 			$this->db->where('id_user', $this->session->userdata('id_user'));
		 			$this->db->update('users');
		 			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> password berhasil dirubah</div>');
		 			redirect('users/profile/changepassword');
		 		}
		 	}

		 }

		 	
		
		 //untuk password tambahkan |min_length[3];
		 //tambahkan valid email di register dan forgotpassword

		}

		public function forgotPassword()
		{
			$this->form_validation->set_rules('email', 'Email', 'required');

			if($this->form_validation->run() == false)
		 	{
		 		$data['title'] = 'Forgot Password';
				$this->load->view('users/forgot-password', $data);
		 	} else {
		 		$email = $this->input->post('email');

		 		$user = $this->db->get_where('users', ['email' => $email, 'is_active' => 1])->row_array();

		 		if($user){
		 			$this->users_model->forgot_password($email);
		 			
		 		}else{
		 			$this->session->set_flashdata('user_not_found', 'e-mail anda belum terdaftar atau belum di aktivasi');
		 			redirect('users/forgotpassword');
		 		}
		 	}
			
		}

		public function resetpassword(){
			$email = $this->input->get('email');
			$token = $this->input->get('token');

			// contoh untuk model -> $this->users_model->getuser();
			$user = $this->db->get_where('users', ['email' => $email])->row_array();

			if($user) {
				$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
				if($user_token){
					$this->session->set_userdata('reset_email', $email);
					$this->change_password();
				}else{
					$this->session->set_flashdata('resetpasswordtoken', 'reset password gagal! wrong token ');
		 			redirect('users/login');
				}
			} else {
				$this->session->set_flashdata('resetpasswordfailed', 'reset password gagal! wrong email ');
		 		redirect('users/login');
			}

		}

		public function change_password()
		{
			if(!$this->session->userdata('reset_email')){
				redirect('users/login');
			}
			$data['title'] = 'Change Password';

			$this->form_validation->set_rules('password1', 'Password1', 'required|matches[password2]');
			$this->form_validation->set_rules('password2', 'Password2', 'required|matches[password1]');

			if ($this->form_validation->run() === FALSE) {
			$this->load->view('users/change-password',$data);
			} else{
				$enc_password = md5($this->input->post('password1'));

				$email = $this->session->userdata('reset_email');

				$this->db->set('password', $enc_password);
				$this->db->where('email', $email);
				$this->db->update('users');

				$this->db->delete('user_token', ['email' => $email]);

				$this->session->unset_userdata('reset_email');

				$this->session->set_flashdata('resetpasswordsuccess', 'reset password berhasil! password sudah dirubah');
		 		redirect('users/login');
			}	
		}
	}
?>