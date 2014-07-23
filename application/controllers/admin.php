<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    protected $data = array();
    
    function __construct(){
        parent::__construct();
        $this->load->library('OutlawWrapper', '', 'ol');
        $this->load->helper('url');        
        $this->template->set_layout('basic');
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
        if ( $this->ol->create('works') ){
            redirect('/admin');          
        }
        else{
            exit(var_export($this->ol->getErrors()));
        }
    }
    
    function delete(){
        $this->ol->delete('works', $this->input->post('id'));
        redirect('/admin');
    }

    function edit(){
        $id = $_REQUEST['id'];
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
            redirect('/admin/');
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
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
