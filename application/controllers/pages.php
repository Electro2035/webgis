<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function about()
    {
        $this->load->view('about');
    }

    public function deals()
    {
        $this->load->view('deals');
    }

    public function reservation()
    {
        $this->load->view('reservation');
    }

    public function contact()
    {
        $this->load->view('contact');
    }
}
