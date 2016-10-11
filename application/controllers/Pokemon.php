<?php
class Pokemon_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    /* Fungsi ini me return semua record yang ada dalam tabel pokemon */
    public function get_all(){
        return $this->db->get('pokemon')->result();
    }
    /* Fungsi ini me return satu record dari tabel pokemon dalam bentuk object. 
     * Record yang di return adalah record dengan id $id 
     */
    public function get_one($id){
        // TODO: Modif bagian ini
        return $this->db->get_where('pokemon',array('id' => $id))->result();
    }
    /* Fungsi ini menginsertkan data ke dalam tabel pokemon.
     * Parameter $data berisi data yang akan di insertkan dalam bentuk associative array
     * yang terdiri dari pasangan key=>value. Key adalan nama field, sedangkan value adalah
     * nilai field
     */
    public function insert($data){
        // TODO: Modif bagian ini
        $this->db->insert('pokemon', $data);
    }
    /* Fungsi ini mengupdate data ke dalam tabel pokemon yang memiliki id=$id.
     * Parameter $data berisi data yang akan di insertkan dalam bentuk associative array
     * yang terdiri dari pasangan key=>value. Key adalan nama field, sedangkan value adalah
     * nilai field
     */
    public function update($data, $id){
        // TODO: Modif bagian ini
        $this->db->where('id', $id);
        $this->db->update('pokemon', $data);
    }
    /* Fungsi ini menghapus satu record dari tabel pokemon yang memiliki id=$id*/
    public function delete($id){
        // TODO: Modif bagian ini
        $this->db->delete('pokemon', array('id' => $id));
    }
}
