<?php

/**
 * 
 * 
 * @author Lloric Garcia <emorickfighter@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index() {
        $this->my_header_view();
      //  $this->load->view('admin/home_top');
        $this->load->view('admin/footer');
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url(ADMIN_DIRFOLDER_NAME . 'login'), 'refresh');
    }

}
