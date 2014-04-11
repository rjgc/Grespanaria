<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set("max_execution_time", "300");
ini_set("max_input_time", "600");
ini_set("memory_limit", "256M");
ini_set("post_max_size", "512M");
ini_set("upload_max_filesize", "128M");

header('Pragma: no-cache');
header('Cache-Control: private, no-cache');
header('Content-Disposition: inline; filename="files.json"');
header('X-Content-Type-Options: nosniff');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');

class Mediagest extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');
		$this->load->library('image_CRUD');
		$this->load->library('session');
        
        // load language file
		//$this->lang->load('indelague');
	}
	
	function _admin_output($output = null)
	{
        
        $this->load->view('mediagest/mediagest',$output);	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('example.php',$output);	
	}
	
	
	// por defeito abre a lista de produtos
	function index()
	{
		
	try{
		$crud = new grocery_CRUD();
		
		$crud->set_table('noticias');
		$crud->set_subject('Noticias');
		$crud->required_fields('data','titulo_pt','texto_pt','foto');

		$crud->field_type('texto_pt', 'text')->field_type('texto_en', 'text')->field_type('texto_fr', 'text')->field_type('texto_es', 'text')->field_type('texto_de', 'text')->field_type('texto_py', 'text');
		$crud->set_field_upload('foto','assets/uploads/noticias');

		$output = $crud->render();
        
		$data['titulo'] = 'Noticias';
		$data['sub-titulo'] = 'Faça aqui a gestão das Noticias'; 
		$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));	
			
		$this->_admin_output($output);
		
        }catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
       	
	}

    function certificados_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('certificados');
        $crud->set_subject('Certificados');
        $crud->columns('nome','tamanho','url');

        $crud->required_fields('nome','tamanho','url');

        $output = $crud->render();

        $data['titulo'] = 'Certificados';
        $data['sub-titulo'] = 'Faça aqui a gestão dos Certificados';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function noticias_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('noticias');
        $crud->set_subject('Noticias');
        $crud->columns('data','titulo_pt','texto_pt');

        $crud->required_fields('data','titulo_pt','texto_pt','foto');
        $crud->field_type('texto_pt', 'text')->field_type('texto_en', 'text')->field_type('texto_fr', 'text')->field_type('texto_es', 'text')->field_type('texto_de', 'text')->field_type('texto_py', 'text');
        $crud->set_field_upload('foto','assets/uploads/noticias');

        $output = $crud->render();

        $data['titulo'] = 'Noticias';
        $data['sub-titulo'] = 'Faça aqui a gestão das Noticias';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

	
}