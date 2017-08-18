<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->library('session');
        // Request PS dengan Code Jason
        // $in_mail = 'sugrio.drmawan@iconpln.co.id';
        // $in_password = 'icon+123';
        $in_mail = $this->input->post('in_mail');
        $in_password = $this->input->post('in_password');
        $data = array(
            "in_mail" => "$in_mail", 
            "in_password" => "$in_password"
            );
        

        // $url = 'http://10.14.158.190:8000/project-i-sekper-api/login/'; // SERVER
        $url = 'http://localhost:8080/project-i-sekper-api/login/'; // LoCalhost
        $options = array(
          'http' => array(
            'method'  => 'POST',
            'content' => json_encode( $data ),
            'header'=>  "Content-Type: application/json\r\n" .
            "Accept: application/json\r\n"
            )
          );

        $context  = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        $response = json_decode( $result);
        if ($response->{'message'} == "SUKSES") {
            $this->session->set_userdata('pengguna',$response->{'userName'});
            $this->template->load('template','index');
        } else {
            echo "<script>alert('Usename dan Password Tidak Valid');</script>";
            $this->template->load('login','login');
        }
        



    }


// KELUAR SIGN OUT
    function keluar()
    {
        $this->load->library('session');
        
        $this->session->unset_userdata('pengguna');
            
            $this->template->load('login','login');
        



    }


}