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
        $crud->columns('data','titulo_pt','texto_pt','foto');
		$crud->required_fields('data','titulo_pt','texto_pt','foto');

		$crud->field_type('texto_pt', 'text')->field_type('texto_en', 'text')->field_type('texto_fr', 'text')->field_type('texto_es', 'text')->field_type('texto_de', 'text')->field_type('texto_py', 'text');
		$crud->set_field_upload('foto','assets/uploads/noticias');

        $crud->callback_after_upload(array($this,'callback_after_upload_news'));

		$output = $crud->render();
        
		$data['titulo'] = 'Noticias';
		$data['sub-titulo'] = 'Faça aqui a gestão das Noticias'; 
		$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));	
			
		$this->_admin_output($output);
		
        }catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
       	
	}

    function noticias_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('noticias');
        $crud->set_subject('Noticias');
        $crud->columns('data_news','titulo_pt','texto_pt');

        $crud->required_fields('data','titulo_pt','texto_pt','foto');
        $crud->field_type('texto_pt', 'text')->field_type('texto_en', 'text')->field_type('texto_fr', 'text')->field_type('texto_es', 'text')->field_type('texto_de', 'text')->field_type('texto_py', 'text');
        $crud->set_field_upload('foto','assets/uploads/noticias');

        $crud->callback_after_upload(array($this,'callback_after_upload_news'));

        $output = $crud->render();

        $data['titulo'] = 'Noticias';
        $data['sub-titulo'] = 'Faça aqui a gestão das Noticias';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function callback_after_upload_news($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('image_moo');

        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name;

        //list - normal - thumb
        $this->image_moo->load($file_uploaded)->resize_crop(250, 167)->save_pa($prepend="", $append="", $overwrite=true);

        //refold
        //rename($field_info->upload_path."/"."list_".$uploader_response[0]->name, "assets/uploads/produtos/list/".$uploader_response[0]->name);
        return true;
    }

    function apresentacoes_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('apresentacoes');
        $crud->set_subject('Apresentações');
        $crud->columns('nome','url', 'tamanho');

        $crud->required_fields('nome','url', 'tamanho');
        $crud->set_field_upload('url','assets/uploads/files');

        $output = $crud->render();

        $data['titulo'] = 'Apresentações';
        $data['sub-titulo'] = 'Faça aqui a gestão das Apresentações';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function certificados_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('certificados');
        $crud->set_subject('Certificados');
        $crud->columns('nome', 'id_tipos', 'id_marcas');

        $crud->required_fields('nome', 'id_tipos', 'id_marcas');
        $crud->set_field_upload('url_pt','assets/uploads/files')->set_field_upload('url_en','assets/uploads/files')->set_field_upload('url_fr','assets/uploads/files')->set_field_upload('url_es','assets/uploads/files')->set_field_upload('url_de','assets/uploads/files')->set_field_upload('url_py','assets/uploads/files');
        $crud->display_as('id_tipos', 'Tipo de Certificados')->display_as('id_marcas', 'Marca');

        $crud->set_relation('id_tipos', 'certificados_tipos', 'nome_pt');
        $crud->set_relation('id_marcas', 'certificados_marcas', 'nome');

        $output = $crud->render();

        $data['titulo'] = 'Certificados';
        $data['sub-titulo'] = 'Faça aqui a gestão dos Certificados';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function certificados_tipo_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('certificados_tipos');
        $crud->set_subject('Tipos de Certificados');

        $crud->required_fields('nome_pt');

        $output = $crud->render();

        $data['titulo'] = 'Tipos de Certificados';
        $data['sub-titulo'] = 'Faça aqui a gestão dos Tipos de Certificados';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function media_photo_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('media_photo');
        $crud->set_subject('Media');
        $crud->columns('id_media_tipo', 'url');

        $crud->required_fields('id_media_tipo', 'url');
        $crud->display_as('id_media_tipo', 'Tipo de Galeria');
        $crud->set_relation('id_media_tipo', 'media_photo_tipos', 'nome_pt');
        $crud->set_field_upload('url','assets/uploads/media');

        $crud->callback_after_upload(array($this,'callback_after_upload_photo'));

        $output = $crud->render();

        $data['titulo'] = 'Fotos';
        $data['sub-titulo'] = 'Faça aqui a gestão das Fotos';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function callback_after_upload_photo($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('image_moo');

        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name;

        //list - normal - thumb
        $this->image_moo->load($file_uploaded)->resize_crop(1200, 720)->save_pa($prepend="", $append="", $overwrite=true);

        //refold
        //rename($field_info->upload_path."/"."list_".$uploader_response[0]->name, "assets/uploads/produtos/list/".$uploader_response[0]->name);
        return true;
    }

    function media_photo_tipo_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('media_photo_tipos');
        $crud->set_subject('Media');
        $crud->columns('nome_pt');

        $crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'nome_de', 'nome_py');

        $output = $crud->render();

        $data['titulo'] = 'Fotos';
        $data['sub-titulo'] = 'Faça aqui a gestão das Fotos Tipo Galeria';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function media_video_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('media_video');
        $crud->set_subject('Media');
        $crud->columns('nome_pt', 'url');

        $crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'nome_de', 'nome_py', 'url');

        $output = $crud->render();

        $data['titulo'] = 'Videos';
        $data['sub-titulo'] = 'Faça aqui a gestão dos Videos';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function page_video_management()
    {
        $crud = new grocery_CRUD();

        $crud->unset_delete();
        $crud->unset_add();
        $crud->unset_edit_fields('onde_fica');

        $crud->set_table('page_videos');
        $crud->set_subject('Videos');

        $crud->required_fields('url');

        $output = $crud->render();

        $data['titulo'] = 'Videos';
        $data['sub-titulo'] = 'Faça aqui a gestão dos Videos nas páginas';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

    function paginas_management()
    {
        $crud = new grocery_CRUD();

        $crud->unset_delete();
        $crud->unset_add();

        $crud->set_table('paginas');
        $crud->set_subject('Páginas');
        $crud->columns('nome_da_pagina','texto_pt');

        $crud->required_fields('titulo_pt','texto_pt');
        $crud->field_type('texto_pt', 'text')->field_type('texto_en', 'text')->field_type('texto_fr', 'text')->field_type('texto_es', 'text')->field_type('texto_de', 'text')->field_type('texto_py', 'text');

        $output = $crud->render();

        $data['titulo'] = 'Páginas';
        $data['sub-titulo'] = 'Faça aqui a gestão das Páginas';
        $this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

	
}