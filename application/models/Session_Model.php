<?php

/**
 * 
 * @author Lloric Mauga Garcia <emorickfighter@gmail.com>
 */
class Session_Model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function check_session() {
        if ($this->uri->segment(1) == str_replace('/', '', ADMIN_DIRFOLDER_NAME)) {
            if (!$this->session->userdata('validated_admin')) {
                redirect(ADMIN_DIRFOLDER_NAME . 'login');
            }
        } else {
            if (!$this->session->userdata('validated_client')) {
                redirect(base_url());
            }
        }
    }

}
