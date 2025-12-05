<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    public function index()
    {
        $this->load->view('web/home');
    }

    public function about()
    {
        $this->load->view('web/about');
    }

    public function deals()
    {
        $this->load->view('web/deals');
    }

    public function reservation()
    {
        $this->load->view('web/reservation');
    }
}
