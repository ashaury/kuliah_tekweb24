<?php

class Hello extends CI_Controller
{
    
    public function __construct()
    {
        //construct ini akan mengoveride construct awal yang diturunkan oleh Class Parent 
        //perlu untuk memanggil ulang construct milik parent (CI_Controller)
        parent::__construct();
        //JIKA TIDAK LOGIN ARAHKAN KE AUTH/HALAMAN LOGIN
        if(($this->session->isLogin!='islogin')){
            redirect(base_url());
        }

    }

    public function index()
    {
        $this->load->model("MahasiswaModel");
        // $mahasiswaModel = new MahasiswaModel();
        $data['nama'] = $this->MahasiswaModel->getMahasiswa();
        $data['mhs'] = $this->MahasiswaModel->getMahasiswaByNim($this->session->nim);

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
