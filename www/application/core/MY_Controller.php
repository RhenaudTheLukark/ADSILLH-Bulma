<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function renderView($view, $data = array()) {
        $_data = array(
            'siteTitle' => $this->config->item('siteTitle'),
            'pageTitle' => $this->config->item('pageTitle'),
        );

        $_data = array_merge($_data, $data);

        $this->load->view('global/header', $data);
        $this->load->view($view, $data);
        $this->load->view('global/footer', $data);
    }
}