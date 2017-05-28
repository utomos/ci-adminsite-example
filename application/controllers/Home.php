<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base.php';

class Home extends Base {

    private $title = 'Home';

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['TITLE_PAGE'] = $this->title; /* Set Title Page from variable on Controller Home */
        $this->_init('home/index', $data, 'home/footer_index');
    }

}
