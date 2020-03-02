<?php
    class SuperAdmin extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            
            $this->load->model('m_superAdmin');
        }

        function getDataUser(){
            $data = $this->m_superAdmin->dataUser();
            echo json_encode($data);
        }

        function getUser(){
            $id = $this->input->get('id');
            $data = $this->m_superAdmin->getUserById($id);
            echo json_encode($data);
        }

        function tambahUser(){
            $nama = $this->input->post('nama');
            $nip = $this->input->post('nip');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');

            $data = $this->m_superAdmin->simpanUser($nama, $nip, $username, $password, $level);
            // $data = $nama;

            echo json_encode($data);
        }

        function hapusUser(){
            $id = $this->input->post('id');
            $data = $this->m_superAdmin->deleteUser($id);
            echo json_encode($data);
        }
        function updateUser(){
            $id = $this->input->post('id');
            $dt = array(
                'id' => $id = $this->input->post('id'),
                'nama' => $nama = $this->input->post('nama'),
                'nip' => $nip = $this->input->post('nip'),
                'username' => $username = $this->input->post('username'),
                'password' => $passwrd = $this->input->post('password'),
                'level' => $level = $this->input->post('level')
            );
            $data = $this->m_superAdmin->update($id,$dt);
            echo json_encode($data);
        }
    }
    
?>