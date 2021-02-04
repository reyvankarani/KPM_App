<?php

function is_logged_in()
{
	$ci = get_instance();

	if(!$ci->session->userdata('logged_in')){
		redirect('users/login');
	} else {
		$role_id =  $ci->session->userdata('role_id'); //1

		$menu = $ci->uri->segment(1); //1

		$queryMenu = $ci->db->get_where('user_sub_menu', ['url' => $menu])->row_array();
		$menu_id = $queryMenu['menu_id'];

		$userAccess = $ci->db->get_where('user_access_menu', [
			'role_id' => $role_id, 
			'menu_id' => $menu_id
		]);

		if($userAccess->num_rows() < 1){
			redirect('users/blocked');
		}

	}
}

?>