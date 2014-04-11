<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct()
    {
        parent::__construct();
 
        // you might want to just autoload these two helpers
		$this->load->helper('language');
		$this->load->helper('url');
		$this->load->helper('text');
 
		// load language file
	/*	$this->lang->load('gestinfor');
        
    */
        $this->load->model('company_model');/*
        $this->load->model('news_model');
        $this->load->model('home_model');
        $this->load->model('xml2mysql');
        $this->load->model('formacao_model');*/
    }
	 
	
	public function index()
	{
		$this->home();        
        /*$result = $this->company_model->gest_page('1');
        $data['news'] = $this->news_model->get_news();
       
       	$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
       	        // vai buscar lista de produtos ou detalhe
        $data['gest_page'] = $result[0];

		$data['title'] = lang('indelague.home');
	    $data['current'] = 'home';
        
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('templates/sidebar', $data);
		//$this->load->view('templates/carousel');
		$this->load->view('home');
		$this->load->view('templates/footer', $data);*/

	}

	public function home()
	{
        //$result = $this->company_model->gest_page('1');
        /*$data['news'] = $this->news_model->get_news();
       
       	$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
       	$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
       	        // vai buscar lista de produtos ou detalhe
        //$data['gest_page'] = $result[0];

		$data['title'] = lang('indelague.home');
	    $data['current'] = 'home';
        */
	
		/*$data['galeria_obra'] = $this->company_model->get_galeria_obra(1);
		$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
		$data['galeria_obras'] = $this->company_model->get_galeria_obras();
		$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
		
		$this->load->view('templates/header_caixilharia');
		//$this->load->view('templates/nav', $data);
		//$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/carousel_caixilharia');
		$this->load->view('pages/caixilharia',$data);
		$this->load->view('templates/footer');*/
		
		$data['current'] = 'home';
		$this->load->view('templates/header',$data);
		/*$this->load->view('templates/nav', $data);
		$this->load->view('templates/carousel');*/
		$this->load->view('pages/home');
		$this->load->view('templates/footer');	

	}
	
	public function grespanaria()
	{
        //$result = $this->company_model->gest_page('1');
        /*$data['news'] = $this->news_model->get_news();
       
       	$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
       	$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
       	        // vai buscar lista de produtos ou detalhe
        //$data['gest_page'] = $result[0];

		$data['title'] = lang('indelague.home');
	    $data['current'] = 'home';
        */
		/*$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
		$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
		$data['galeria_obras'] = $this->company_model->get_galeria_obras();
		$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
		
		$this->load->view('templates/header_caixilharia');
		//$this->load->view('templates/nav', $data);
		//$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/carousel_caixilharia');
		$this->load->view('pages/caixilharia',$data);
		$this->load->view('templates/footer');*/
		
		$data['current'] = 'grespanaria';
		$this->load->view('templates/header',$data);
		/*$this->load->view('templates/nav', $data);
		$this->load->view('templates/carousel');*/
		$this->load->view('pages/grespanaria');
		$this->load->view('templates/footer');
	}
	
	public function presentations()
	{
        //$result = $this->company_model->gest_page('1');
        /*$data['news'] = $this->news_model->get_news();
       
       	$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
       	$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
       	        // vai buscar lista de produtos ou detalhe
        //$data['gest_page'] = $result[0];

		$data['title'] = lang('indelague.home');
	    $data['current'] = 'home';
        */
		/*$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
		$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
		$data['galeria_obras'] = $this->company_model->get_galeria_obras();
		$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
		$this->load->view('templates/header_vidro');
		//$this->load->view('templates/nav', $data);
		//$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/carousel_vidro');
		$this->load->view('pages/vidro',$data);
		$this->load->view('templates/footer');*/
		
		$data['current'] = 'presentations';
		$this->load->view('templates/header',$data);
		/*$this->load->view('templates/nav', $data);
		$this->load->view('templates/carousel');*/
		$this->load->view('pages/presentations');
		$this->load->view('templates/footer');	
	}
	
	public function news()
	{
        //$result = $this->company_model->gest_page('1');
        /*$data['news'] = $this->news_model->get_news();
       
       	$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
       	$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
       	        // vai buscar lista de produtos ou detalhe
        //$data['gest_page'] = $result[0];

		$data['title'] = lang('indelague.home');
	    $data['current'] = 'home';
        */
		/*$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
		$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
		$data['galeria_obras'] = $this->company_model->get_galeria_obras();
		$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
		$this->load->view('templates/header_extrusao');
		//$this->load->view('templates/nav', $data);
		//$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/carousel_extrusao');
		$this->load->view('pages/extrusao',$data);
		$this->load->view('templates/footer');*/
		
		$data['current'] = 'news';
		$this->load->view('templates/header',$data);
		/*$this->load->view('templates/nav', $data);
		$this->load->view('templates/carousel');*/
		$this->load->view('pages/news');
		$this->load->view('templates/footer');	

	}
	
	public function certification()
	{
        //$result = $this->company_model->gest_page('1');
        /*$data['news'] = $this->news_model->get_news();
       
       	$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
       	$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
       	        // vai buscar lista de produtos ou detalhe
        //$data['gest_page'] = $result[0];

		$data['title'] = lang('indelague.home');
	    $data['current'] = 'home';
        */
		/*$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
		$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
		$data['galeria_obras'] = $this->company_model->get_galeria_obras();
		$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
		
		$this->load->view('templates/header_tratamento');
		//$this->load->view('templates/nav', $data);
		//$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/carousel_tratamento');
		$this->load->view('pages/tratamento',$data);
		$this->load->view('templates/footer');*/
		
		$data['current'] = 'certification';
		$this->load->view('templates/header',$data);
		/*$this->load->view('templates/nav', $data);
		$this->load->view('templates/carousel');*/
		$this->load->view('pages/certification');
		$this->load->view('templates/footer');	
	}
	
	public function contactus()
	{
        //$result = $this->company_model->gest_page('1');
        /*$data['news'] = $this->news_model->get_news();
       
       	$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
       	$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
       	        // vai buscar lista de produtos ou detalhe
        //$data['gest_page'] = $result[0];

		$data['title'] = lang('indelague.home');
	    $data['current'] = 'home';
        */
		/*$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
		$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
		$data['galeria_obras'] = $this->company_model->get_galeria_obras();
		$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
		
		$this->load->view('templates/header_tratamento');
		//$this->load->view('templates/nav', $data);
		//$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/carousel_tratamento');
		$this->load->view('pages/tratamento',$data);
		$this->load->view('templates/footer');*/
		
		$data['current'] = 'contactus';
		$this->load->view('templates/header',$data);
		/*$this->load->view('templates/nav', $data);
		$this->load->view('templates/carousel');*/
		$this->load->view('pages/contactus');
		$this->load->view('templates/footer');	
	}
	
    
		
	

	/* ------  URL ENGLISH ------- */
	public function company() {
		$this->empresa();
	}
}

/* End of file home.php */
/* Location: ./application/controllers/company.php */