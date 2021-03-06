<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    protected $data = array();
    
    function __construct(){
        parent::__construct();
        $this->load->library('OutlawWrapper', '', 'ol');
        $this->load->helper('url');        
        $this->template->set_layout('basic');

        $this->ol->protect();
    }

    public function index(){
      
        $this->data['works'] = $this->ol->readAll('works');
        $this->template->build('admin/index', $this->data);
    }

    public function create()
    {
        $this->template->build('admin/create');
    }
        
    function inject(){
        if ( $id = $this->ol->create('works') ){
            redirect('/admin/edit/' . $id);          
        }
        else{
            exit(var_export($this->ol->getErrors()));
        }
    }
    
    function delete(){
        $this->ol->delete('works', $this->input->post('id'));
        redirect('/admin');
    }

    function edit($id){
        $this->data['work'] = $this->ol->read('works', $id);
        $this->template->build('admin/edit', $this->data);        
    }

    function view($id){
        $this->data['article'] = $this->ol->read('articles', $id);
        $this->template->build('demo/view', $this->data);        
    }
    
    function update(){
        $id = $_POST['id'];
        if ($this->ol->update('works', $id)){
            redirect('/admin/edit/' . $id);
        }
        else{
            exit(var_export($this->ol->getErrors()));
        }
    }

    function edit_contact(){
        $this->data['site'] = $this->ol->readSingleton('site');
        $this->template->build('admin/edit_contact', $this->data);        
    }

    function update_contact(){
        if ($this->ol->updateSingleton('site')){
            redirect('/admin/');
        }
        else{
            exit(var_export($this->ol->getErrors()));
        }      
    }
    
    function logout(){
        $this->ol->logout();
        redirect('/admin');
    }
    
    function delete_photo(){
        $id = $_REQUEST['id'];
        $this->ol->delete('photos', $id);
        redirect($_SERVER['HTTP_REFERER']);      
    }
    
    /*
     * Single Management
     */

    function single_management(){
        $this->data['singles'] = $this->ol->readAll('singles');
        $this->template->build('admin/single_management', $this->data);        
    }

    function add_single(){
        if ( $id = $this->ol->create('singles') ){
            redirect('/admin/single_management');          
        }
        else{
            exit(var_export($this->ol->getErrors()));
        }
    }

    function delete_single(){
        $id = $_REQUEST['id'];
        $this->ol->delete('singles', $id);
        redirect($_SERVER['HTTP_REFERER']);      
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
