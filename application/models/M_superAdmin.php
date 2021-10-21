<?php 
    class M_superAdmin extends CI_Model
    {
        function dataUser(){
            $hasil = $this->db->query("SELECT * FROM privilege ORDER BY id DESC");
            return $hasil->result();
        }
        function simpanUser($nama, $nip, $username, $password, $level){
            $tanggal = date("Y-m-d H:i:s");

            $hasil = $this->db->query("INSERT INTO privilege (nama, nip, username, password, level, tanggal) VALUES('$nama','$nip','$username','$password','$level','$tanggal')");

            return $hasil;
        }

        function deleteUser($id){
            $this->db->where('id',$id);
            $hasil = $this->db->delete('privilege');
            return $hasil;
        }

        function getUserById($id){
            $hasil = $this->db->query("SELECT * FROM privilege WHERE id='$id'");
            if($hasil->num_rows()>0){
                foreach($hasil->result() as $data){
                    $hasil = array(
                        'nama' => $data->nama,
                        'nip' => $data->nip,
                        'username' => $data->username,
                        'password' => $data->password,
                        'level' => $data->level
                    );
                }
            }
            return $hasil;
        }
        function update($id, $data){
            $this->db->where('id',$id);
            return $this->db->update('privilege',$data);
        }
    }
    
?>