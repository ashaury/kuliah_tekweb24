<?php

class Hello extends CI_Controller
{
    public function index()
    {
        $this->load->model("MahasiswaModel");
        // $mahasiswaModel = new MahasiswaModel();
        $data['nama'] = $this->MahasiswaModel->getMahasiswa();

        $conn = mysqli_connect("localhost", "root", "", "db_kuliah");
        $sql = "SELECT * FROM mahasiswa";
        $res = mysqli_query($conn, $sql);

        foreach ($res as $row) {
            echo $row['nama'];
        }


        $this->load->view("dashboard", $data);
    }
    public function kampus()
    {
        echo "Unjani";
    }

    public function mahasiswas()
    {
        $this->load->model("MahasiswaModel");
        $data['res'] = $this->MahasiswaModel->getMahasiswas()->result();
        $this->load->view("mahasiswa_daftar",$data);
    }
    public function mahasiswa($nim){
        $this->load->model("MahasiswaModel");
        $data['res'] = $this->MahasiswaModel->getMahasiswaByNim($nim)->result();
        $this->load->view("mahasiswa_daftar",$data);
    }
}
