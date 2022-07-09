<?php
class Kegiatan_model extends CI_Model{
    // Buat property atau variable
    
    public function getAll(){
        // menampilkan seluruh data yang ada di table kegiatan meggunakan query bulder
        $query = $this->db ->get('kegiatan');
        return $query->result();
    }
    public function getById($id){
        // menambahkan data berdasarkan id
        $query = $this->db->get_where('kegiatan', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO kegiatan (judul,kapasitas,harga_tiket,tanggal,tema,tempat,pic,foto_lukisan,jenis_id) VALUE (?,?,?,?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function simpan_foto($foto, $kegiatan_id){
        return $this->db->update('detail', ['foto' => $foto_lukisan], ['id' => $kegiatan_id]);
    }
    public function update($data){
        $sql = "UPDATE kegiatan SET judul=?,kapasitas=?,harga_tiket=?,tanggal=?,=?,tema=?,tempatl=?,pic=?,foto_lukisan=?,jenis_id=? WHERE id=?";
         $this->db->query($sql, $data);
    }
    public function update_foto($array){
        $sql = "UPDATE kegiatan set foto1=?";
        $this->db->query($sql, $array);
    }
    public function delete($data){
        // hapus data dosen
        $sql = "DELETE FROM kegiatan WHERE id=?";
        $this->db->query($sql, $data);
        }
}
?>