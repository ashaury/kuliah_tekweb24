<?php
    class Prodi extends CI_Controller{
        public function index(){
            //instance object prodi model
            // $ProdiModel = new ProdiModel(); 
            $this->load->model("ProdiModel");

            // $res = $this->ProdiModel->getProdis();

            // $data['prodi'] = mysqli_fetch_row($res);

            $data['prodi'] = $this->ProdiModel->getProdis()->result();

            $this->load->view("prodi_daftar",$data);
        }
    }

?>