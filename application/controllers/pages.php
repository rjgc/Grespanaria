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

        $this->load->model('company_model');
        $this->load->model('grespanaria_model');
    }
	 
	
	public function index()
	{
		$this->home();
    }

    public function home()
    {
        $data['current'] = 'home';
        $this->load->view('templates/header',$data);

        $data['noticias'] = $this->grespanaria_model->get_noticias_destaque();

        $this->load->view('pages/home', $data);
        $this->load->view('templates/footer');

    }
	
	public function grespanaria()
	{
		$data['current'] = 'grespanaria';
		$this->load->view('templates/header',$data);

		$this->load->view('pages/grespanaria');
		$this->load->view('templates/footer');
	}
	
	public function presentations()
	{
		$data['current'] = 'presentations';
		$this->load->view('templates/header',$data);

		$this->load->view('pages/presentations');
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
	
	public function certification()
	{
        $data['current'] = 'certification';
		$this->load->view('templates/header', $data);

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