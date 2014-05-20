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

        $this->load->model('grespanaria_model');
    }
	 
	
	public function index()
	{
		$this->home();
    }

    public function home()
    {
        $data['current'] = 'home';

        $this->load->view('templates/header',$data, $this->lang->lang());

        $data['noticias'] = $this->grespanaria_model->get_noticias_destaque();

        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');

    }
	
	public function grespanaria()
	{
		$data['current'] = 'grespanaria';
		$this->load->view('templates/header',$data);

        $data['profile'] = $this->grespanaria_model->get_page(1);
        $data['margres'] = $this->grespanaria_model->get_page(2);
        $data['love'] = $this->grespanaria_model->get_page(3);
        $data['bloom'] = $this->grespanaria_model->get_page(4);
        $data['easy'] = $this->grespanaria_model->get_page(5);

        $data['videos'] = $this->grespanaria_model->get_page_videos();
		$this->load->view('pages/grespanaria', $data);
		$this->load->view('templates/footer');
	}
	
	public function presentations()
	{
		$data['current'] = 'presentations';
		$this->load->view('templates/header',$data);

        $data['intro'] = $this->grespanaria_model->get_page(7);
        $data['apresentacoes'] = $this->grespanaria_model->get_apresentacoes();
        $data['video'] = $this->grespanaria_model->get_page_videos();
		$this->load->view('pages/presentations', $data);

		$this->load->view('templates/footer');	
	}

    public function media()
    {
        $data['current'] = 'media';
        $this->load->view('templates/header',$data);

        $data['fotos'] = $this->grespanaria_model->get_fotos();
        $data['videos'] = $this->grespanaria_model->get_videos();

        $this->load->view('pages/media', $data);
        $this->load->view('templates/footer');

    }

    public function news()
    {
        $data['current'] = 'news';
        $this->load->view('templates/header',$data);

        $data['noticias'] = $this->grespanaria_model->get_noticias();

        $this->load->view('pages/news', $data);
        $this->load->view('templates/footer');

    }

    public function noticia($id = null)
    {
        $data['current'] = 'news';
        $this->load->view('templates/header',$data);

        $data['noticias'] = $this->grespanaria_model->get_noticia($id);

        $this->load->view('pages/new', $data);
        $this->load->view('templates/footer');

    }

    public function disclaimer()
    {
        $data['current'] = 'page';
        $this->load->view('templates/header',$data);

        $data['disclaimer'] = $this->grespanaria_model->get_page(8);

        $this->load->view('pages/page', $data);
        $this->load->view('templates/footer');

    }
	
	public function certification()
	{
        $data['current'] = 'certification';
		$this->load->view('templates/header', $data);

        $data['intro'] = $this->grespanaria_model->get_page(6);
        $data['certificados'] = $this->grespanaria_model->get_certificados();
        $data['tipos'] = $this->grespanaria_model->get_certificados_tipos();
		$this->load->view('pages/certification', $data);

		$this->load->view('templates/footer');	
	}
	
	public function contactus()
	{
        $data['current'] = 'contactus';
		$this->load->view('templates/header',$data);

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