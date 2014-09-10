<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work extends CI_Controller {
    
    protected $data = array();
    
    function __construct(){
        parent::__construct();
        $this->load->library('OutlawWrapper', '', 'ol');
        $this->load->helper('url');        
        $this->template->set_layout('work');
        $this->data['works'] = $this->ol->readAll('works');
        $this->data['site'] = $this->ol->readSingleton('site');
    }

    public function index(){      
        $this->data['singles'] = $this->ol->readAll('singles');      
        $this->template->build('work/index', $this->data);
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

    function view($url){
        $work = R::findOne('works', ' url = ? ',array($url));        
        if ($work){
            $this->data['work'] = $work;
            $this->template->build('work/view', $this->data);        
        }
        else{
            $single = R::findOne('singles', ' url = ? ',array($url));        
            $this->data['single'] = $single;
            $this->template->build('work/view_single', $this->data);        
        }
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
    
    function contact(){
        $this->template->build('work/contact', $this->data);          
    }

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
