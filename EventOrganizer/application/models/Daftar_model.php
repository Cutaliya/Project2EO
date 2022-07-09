<?php
class Daftar_model extends CI_Model{
    // Buat property atau variable
    public $id, $tanggal_daftar, $alasan, $users_id, $kegiatan_id, $kategori_peserta_id, $nosertifikat;
    
    public function getAll(){
        // menampilkan seluruh data yang ada ditable daftar menggunakan query builder
        $query = $this->db->get('daftar');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('daftar', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO daftar (tanggal_daftar,alasan,users_id,kegiatan_id,kategori_peserta_id,nosertifikat) VALUES (?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);    
    }
    public function update($data){
        $sql = "UPDATE daftar SET tanggal_daftar=?,alasan=?,users_id=?,kegiatan_id=?,kategori_peserta_id=?, nosertifikat=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus table dosen
        $sql = "DELETE FROM daftar WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>