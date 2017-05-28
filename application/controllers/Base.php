<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {


    public function __construct() {
        parent::__construct();
    }

    protected function _init($content_page = 'default', $data = array(), $footer = null) {
        $data['THEMES_CONTENT'] = $content_page; /* Use for init current page */
        $data['THEMES_FOOTER'] = $footer; /* Use for init JS on footer */
        $this->load->view('themes', $data);
    }

}
