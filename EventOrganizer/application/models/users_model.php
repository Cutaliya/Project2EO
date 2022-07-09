<?php
class users_model extends CI_Model{
    // Buat Properti atau Variabel
    private $table = "users" ;
    
    public function getAll(){
       $query = $this->db->get($this->table);
       return $query->result();
    // public $id, $username, $password, $email, $created_at, $last_login, $status, $role;

    // public function getAll(){
    //     // menampilkan seluruh data yang ada di table users menggunakan query builder
    //     $query = $this->db->get('users');
    //     return $query->result();
    }
    public function getById($id){
        // menampilkan data berdassarkan id
        $this->db->where("id", $id);
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }
    public function login($uname,$pass){
        $sql = "SELECT * FROM users WHERE username=? 
            and password=MD5(?)";
        $data = [$uname,$pass];
        $query = $this->db->query($sql, $data);
        return $query->row();

    }
    public function register($data_user){
        $sql = "INSERT INTO users (username, password, email, created_at, last_login, status, role) VALUES (?,MD5(?),?,now(),now(),0,'public')"; 
        $this->db->query($sql, $data_user);
    }
    public function simpan($data){
        $sql = "INSERT INTO users (username,password,email,created_at,last_login,status,role) VALUES (?,?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE users SET username=?,password=?,email=?,created_at=?,last_login=?,status=?,role=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($data){
        // Hapus data users
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>