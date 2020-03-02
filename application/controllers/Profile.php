<?php
    class Profile extends CI_Controller
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('m_profile');
        }
        function updatePassword(){
            $id = $this->input->post('id');
            $pwlama = $this->input->post('pwlama');
            $pwbaru = $this->input->post('pwbaru');

            $where = array(
                'id' => $id,
                'password' => $pwlama
            );

            $update = array(
                'password' => $pwbaru
            );

            $data = $this->m_profile->updatePwd($where, $update);
            echo json_encode($data);
        }
    }
    
?>