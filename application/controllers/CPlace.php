<?php
class CPlace extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->Model('MPlace');
    }

    public function index(){
        $this->load->view('index');
    }

    public function getAllPlace(){
        $rs = $this->MPlace->getAllPlace();
        $data['allplace'] = $rs;
        $this->load->view('place', $data);
    }

    public function getAllPlaceToJson(){
        $rs = $this->MPlace->getAllPlace();
        header('Content-Type: text/html; charset-utf-8');
        echo (json_encode($rs, JSON_UNESCAPED_UNICODE));
    }

    public function getListNearPlaceWithRadius($lat = -7.302083928121449, $lon = 108.22048187234206, $rad = 1.5){
        $radius = $this->input->post('radius');
        $latitude = $this->input->post('lat');
        $longitude = $this->input->post('lon');

        if(isset($radius) && $radius != ""){
            $rad = $radius;
        }

        if(isset($latitude) && $latitude != ""){
            $lat = $latitude;
        }

        if(isset($longitude) && $longitude != ""){
            $lon = $longitude;
        }

        $rs = $this->MPlace->getListNearPlaceWithRadius($lat, $lon, $rad);
        $data['allplace'] = $rs;
        $this->load->view('nearplace', $data);
    }

    public function getListNearPlaceWithRadiusToJson($lat = -7.302083928121449, $lon = 108.22048187234206, $rad = 1.5){
        $radius = $this->input->post('radius');
        $latitude = $this->input->post('lat');
        $longitude = $this->input->post('lon');

        if(isset($radius) && $radius != ""){
            $rad = $radius;
        }

        if(isset($latitude) && $latitude != ""){
            $lat = $latitude;
        }

        if(isset($longitude) && $longitude != ""){
            $lon = $longitude;
        }

        $rs = $this->MPlace->getListNearPlaceWithRadius($lat, $lon, $rad);
        header('Content-Type: text/html; charset-utf-8');
        echo (json_encode($rs, JSON_UNESCAPED_UNICODE));
    }

    public function enterPositionAndRadius(){
        $this->load->view('frm_input');
    }
}