<?php
class Jenis_kegiatan_model extends CI_Model{
    // Buat Property atau variable
    public $seminar, $workshop, $event_olah_raga, $bazaar,$pelatihan;

    public function getAll(){
        //menampilkan seluruh data yang ada di table jenis_kegiatan menggunakan query builder
        $query =  $this->db->get('jenis_kegiatan');
        return $query->result();
    }
    public function getByid($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('jenis_kegiatan',['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO jenis_kegiatan (seminar,workshop,event_olah_raga,bazaar,pelatihan) VALUES (?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getByid($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenis_kegiatan SET seminar=?,workshop=?,event_olah_raga=?,bazaar=?,pelatihan=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        $sql = "DELETE FROM jenis_kegiatan WHERE id=?";
        $this->db->query($sql,$data);
    }

}
?>