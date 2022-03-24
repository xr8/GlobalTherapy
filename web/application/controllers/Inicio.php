<?php
class Inicio extends CI_Controller
{
//----->
    //--->
    public function __construct()
    {
        parent::__construct();
    }
    //--->
    public function index()
    {
        $sha1                    = random_string('sha1',16);
        $data['sha1']            = $sha1;
        $data['page_title']      = TITLE;
        $data['sub_page_title']  = 'User';
        $data['sub_page_title2'] = 'Login';
        $data['css']             = 'user';
        $data['js']              = 'libs,GlobalTherapy,utility,main';
        $rand = rand(1,3);
        $data['logo']            = CDN_URL."img/inicio/logo".$rand.".svg";

            $this->load->view('loop/header', $data);
            $this->load->view('loop/top'   , $data);

                $this->load->view('inicio/all', $data);

            $this->load->view('loop/bottom', $data);
            $this->load->view('loop/footer', $data);
    }

//----->
}