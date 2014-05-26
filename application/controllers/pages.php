<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
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

    public function contact()
    {
        if(count($_POST) > 0) {
            $this->send_contactus();
        } else {
            $this->contactus();
        }
    }

    public function contactus()
    {
        $data['current'] = 'contactus';
        $this->load->helper(array('form', 'url', 'captcha'));

        $this->load->view('templates/header',$data);

        $config = array(
            'img_path' => 'assets/captcha/',
            'img_url' => base_url().'assets/captcha/',
            'font_path' => 'assets/grespanaria/font/OpenSans-Bold.ttf',
            'img_width' => '100',
            'img_height' => 35,
            'expiration' => 7200
        );

        $captcha = create_captcha($config);

        $data = array(
            'captcha_time' => $captcha['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => strtolower($captcha['word'])
        );
        $this->session->set_userdata($data);
        $data['cap_img']=$captcha['image'];

        $this->load->view('pages/contactus', $data);
        $this->load->view('templates/footer');  
    }

    public function send_contactus()
    {
        $data['current'] = 'contactus';
        $this->load->helper(array('form', 'url', 'captcha'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('sender_name', lang('g_form_name') , 'required');
        $this->form_validation->set_rules('sender_email', lang('g_form_email'), 'required');
        $this->form_validation->set_rules('subject', lang('g_form_subject'), 'required');
        $this->form_validation->set_rules('message', lang('g_form_message'), 'required');
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_check_captcha');

        $this->load->view('templates/header',$data);

        if ($this->form_validation->run() == FALSE)
        {
            $config = array(
                'img_path' => 'assets/captcha/',
                'img_url' => base_url().'assets/captcha/',
                'font_path' => 'assets/grespanaria/font/OpenSans-Bold.ttf',
                'img_width' => '100',
                'img_height' => 35,
                'expiration' => 7200
            );

            $captcha = create_captcha($config);

            $data = array(
                'captcha_time' => $captcha['time'],
                'ip_address' => $this->input->ip_address(),
                'word' => strtolower($captcha['word'])
            );
            $this->session->set_userdata($data);
            $data['cap_img']=$captcha['image'];

            $data['erros'] = "Error";
            $this->load->view('pages/contactus', $data);

        }
        else
        {

            //Enviar email
            $this->load->library('email');
            $config = array('useragent'        => 'CodeIgniter',
                'protocol'         => 'mail',
                'mailpath'         => '/usr/sbin/sendmail',
                'smtp_host'        => 'mail.critecns.com',
                'smtp_user'        => 'webmaster@critecns.com',
                'smtp_pass'        => 'k45wrhyb3n',
                'smtp_port'        => 25,
                'smtp_timeout'     => 5,
                'wordwrap'         => TRUE,
                'wrapchars'        => 76,
                'mailtype'         => 'html',
                'charset'          => 'utf-8',
                'validate'         => FALSE,
                'priority'         => 3,
                'bcc_batch_mode'   => FALSE,
                'bcc_batch_size'   => 200
            );

            // Run some setup
            $this->email->initialize($config);
            $this->email->from(set_value("sender_email"));
            $this->email->to('geral@grespanaria.pt');
            $this->email->subject(set_value("subject"));
            $this->email->message('Exmo.(s) do Grupo Gres Panaria,<br><br>'.set_value("message").'<br><br>Os meus dados pessoais são:<br><br>Nome: '.set_value("sender_name").'<br>E-mail: '.set_value("sender_email").'<br><br>Atenciosamente,<br><br>'.set_value("sender_name").'');

            $this->email->send();

            // Run some setup
            $this->email->initialize($config);
            $this->email->from('geral@grespanaria.pt');
            $this->email->to(set_value("sender_email"));
            $this->email->subject(set_value("subject"));
            $this->email->message('Agradecemos o seu contacto. Ao qual responderemos o mais breve possível.<br> Caso queira rever o seu e-mail, aqui fica uma cópia do mesmo:<br><br> Exmo.(s) do Grupo Gres Panaria,<br><br>'.set_value("message").'<br><br>Os meus dados pessoais são:<br><br>Nome: '.set_value("sender_name").'<br>E-mail: '.set_value("sender_email").'<br><br>Atenciosamente,<br><br>'.set_value("sender_name").'');

            $this->email->send();


            $config = array(
                'img_path' => 'assets/captcha/',
                'img_url' => base_url().'assets/captcha/',
                'font_path' => 'assets/grespanaria/font/OpenSans-Bold.ttf',
                'img_width' => '100',
                'img_height' => 35,
                'expiration' => 7200
            );

            $captcha = create_captcha($config);
            $data['cap_img']=$captcha['image'];

            $this->session->unset_userdata($data);
            $this->session->set_flashdata('message', lang('g_form_success') );
            redirect(current_url());

            print_r($this->session);

            $this->load->view('pages/contactus', $data);
        }

        $this->load->view('templates/footer');
    }
    public function check_captcha()
    {
        $expiration = time()-7200; // Two hour limit
        $cap= strtolower($this->input->post('captcha'));
        if($this->session->userdata('word')== $cap
            AND $this->session->userdata('ip_address')== $this->input->ip_address()
            AND $this->session->userdata('captcha_time')> $expiration)
        {
            return true;
        }
        else{
            $this->form_validation->set_message('check_captcha', lang('captcha') );
            return false;
        }
    }
    
        
    

    /* ------  URL ENGLISH ------- */
    public function company() {
        $this->empresa();
    }
}

/* End of file home.php */
/* Location: ./application/controllers/company.php */