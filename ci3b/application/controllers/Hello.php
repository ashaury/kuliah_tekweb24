<?php

class Hello extends CI_Controller{
    public function index(){
        $this->load->model("MahasiswaModel");
        // $mahasiswaModel = new MahasiswaModel();
        $data['nama'] = $this->MahasiswaModel->getMahasiswa();
        $this->load->view("dashboard",$data);
    }
    public function kampus(){
        echo "Unjani";
    }
}
?>