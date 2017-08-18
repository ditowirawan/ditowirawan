<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class MasterUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    function index()
    {
        // Request PS dengan Code Jason
        // $url = 'http://10.14.158.190:8000/project-i-sekper-api/masteruser/';//SERVER
        $url = 'http://localhost:8080/project-i-sekper-api/masteruser/'; // LoCalhost
        $options = array(
          'http' => array(
            'method'  => 'GET',
            'header'=>  "Content-Type: application/json\r\n" .
            "Accept: application/json\r\n"
            )
          );

        $context  = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        $response1 = json_decode( $result, true);
        $data['user']=$response1;

        //combo
        $url = 'http://localhost:8080/project-i-sekper-api/combosubdir/'; // LoCalhost
        $options = array(
          'http' => array(
            'method'  => 'GET',
            'header'=>  "Content-Type: application/json\r\n" .
            "Accept: application/json\r\n"
            )
          );

        $context  = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        $response2 = json_decode( $result, true);
        $data['combo']=$response2;


        $this->template->load('template','master/user',$data);

        // var_dump($response1);
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // var_dump($response2);
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // var_dump($response);
        // $this->template->load('template','master/user',$response);


    }

    function tambahUser()
    {
        // Request PS dengan Code Jason

        // ambil inputan dari form
        // start
        $in_nip = $this->input->post('in_nip');
        $in_mail = $this->input->post('in_mail');
        $in_first_name = $this->input->post('in_first_name');
        $in_last_name = $this->input->post('in_last_name');
        $in_subdir = $this->input->post('in_subdir');
        $in_divisi = $this->input->post('in_divisi');
        $in_jabatan = $this->input->post('in_jabatan');
        $in_tlp = $this->input->post('in_tlp');
        $in_createdby = $this->input->post('in_createdby');
        $in_level = $this->input->post('in_level');
        // end

        // format inputan ke array
        // start
        $data = array(
            "nip" => "$in_nip", 
            "mail" => "$in_mail",
            "firstname" => "$in_first_name",
            "lastname" => "$in_last_name",
            "subdir" => "$in_subdir",
            "divisi" => "$in_divisi",
            "jabatan" => "$in_jabatan",
            "tlp" => "$in_tlp",
            "createdby" => "dito",
            "level" => (int) $in_level
            );
        // end

        // setting config manggil web service
        // url dan request : header, method, content

        // $url = 'http://10.14.158.190:8000/project-i-sekper-api/masteruser/';//SERVER
        $url = 'http://localhost:8080/project-i-sekper-api/adduser/'; // LoCalhost
        $options = array(
          'http' => array(
            'method'  => 'POST',
            'content' => json_encode( $data ),
            'header'=>  "Content-Type: application/json\r\n" .
            "Accept: application/json\r\n"
            )
          );

        // Manggil web service dengan parameter yg diset sebelumnya
        $context  = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );

        // merubah hasil dari webservice dalam bentuk array (json_decode)
        $response = json_decode( $result, true);
        if ($response['message'] == "SUKSES") {
            echo "<script>alert('".$response['message']."');</script>";
            $this->index();
        } else {
            echo "<script>alert('".$response['message']."');</script>";
        }



    }

    function comboBox()
    {
        $in_divisi = $this->input->post('in_divisi');

        $data = array(
            "divisi" => "$in_divisi"
            );

        $url = 'http://localhost:8080/project-i-sekper-api/combobox/'; // LoCalhost
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

    }

    function comboSubdir()
    {


        $url = 'http://localhost:8080/project-i-sekper-api/comboSubdir/'; // LoCalhost
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

    }
}