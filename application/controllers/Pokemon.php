<?php
class Pokemon extends CI_Controller{

    public function __construct(){
        $this->load->model('pokemon_model'); // load model 'pokemon_model'
    }


    // URL : http://localhost/[directory]/index.php/pokemon/index
    public function index(){
        // TODO: dapatkan hasil dari fungsi get_all di pokemon_model
        $result=$this->pokemon_model->get_all();
        // TODO: load view pokemon_index, berikan data yang didapat dari fungsi get_all
        $data=array('result'=>$result);
        $this->load->view('pokemon_index',$data);
    }

    // URL : http://localhost/[directory]/index.php/pokemon/insert_form
    public function insert_form(){
        // TODO: load view pokemon_insert_form
        //versi Hario : 
        $this->load->view('pokemon_insert_form');
    }

    // URL : http://localhost/[directory]/index.php/insert_action
    public function insert_action(){
        $nama = $this->input->post('nama'); // dapatkan nilai inputan nama
        $tipe = $this->input->post('tipe'); // dapatkan nilai inputan tipe
        // TODO: panggil fungsi insert di pokemon_model
        // TODO: load view pokemon_insert_action
    }

    // URL : http://localhost/[directory]/index.php/pokemon/update_form/[id]
    public function update_form($id){
        // TODO: panggil fungsi get_one di pokemon_model 
        //versi Hario : 
        //$this->pokemon_model->get_one($id);
        $result=$this->pokemon_model->get_one($id);
        // TODO: load view pokemon_update_form, berikan data yang didapat dari fungsi get_one
        $data=array('result'=>$result);
        $this->load->view('pokemon_update_form',$data);
    }

    // URL : http://localhost/[directory]/index.php/update_action/[id]
    public function update_action($id){
        $nama = $this->input->post('nama'); // dapatkan nilai inputan nama
        $tipe = $this->input->post('tipe'); // dapatkan nilai inputan tipe
        // TODO: panggil fungsi update di pokemon_model
        // TODO: load view pokemon_update_action
    }

    // URL : http://localhost/[directory]/index.php/delete/[id]
    public function delete_action($id){
        // TODO: panggil fungsi delete di pokemon_model
        $this->pokemon_model->delete($id);
        // TODO: load view pokemon_delete
        $this->load->view('pokemon_delete');
    }

}
