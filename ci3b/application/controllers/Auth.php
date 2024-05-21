<?php

class Auth extends CI_Controller
{
    public function index()
    {
        if($this->session->isLogin=='islogin'){
            redirect(site_url('hello'));
        }
        $this->load->view('login_form');
    }
    public function login()
    {
        echo "anda mencoba login, data login dari form adalah:<br>";
        echo "NIM = " . $_POST['username'];
        echo "Password = " . $this->input->post('password') . "<br>";
        $nim = $this->input->post('username');
        $pass = $this->input->post('password');

        $this->load->model('AuthModel');
        $user = $this->AuthModel->loginCheck($nim, $pass);
        echo $user->num_rows();
        if ($user->num_rows() > 0) {
            echo "NIM dan Password sesuai, Login Berhasil";
            // $_SESSION['islogin']=false;
            $this->session->set_userdata('isLogin', 'islogin');
            $this->session->set_userdata('nim',$nim);
            redirect(site_url('hello'));
        } else {
            echo "<script>alert('NIM dan Password tidak sesuai, Login Gagal');</script>";
            redirect(base_url());
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function register(){
        $this->load->view('register_form');
    }

    public function addUser(){
        $user = array(
            "nim" => $this->input->post('nim'),
            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
            "pict" => "asset/img/".$this->input->post('nim').".jpg"
        );
        $filename = $user['nim'].".jpg";
        // print_r($user);
        $config['upload_path']='./asset/img/';
        $config['allowed_types']='*';
        $config['file_name']=$filename;
        $config['overwrite']=true;

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('picture')){
            echo "gagal upload, karena ".$this->upload->display_errors();
        }else{
            echo "berhasil upload";
            $this->load->model('MahasiswaModel');
            $this->MahasiswaModel->addMahasiswa($user);
            redirect(base_url());
        }
    }
}
