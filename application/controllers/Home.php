<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
         public function __construct() {
        parent::__construct();
    }
    
    
    
    
    
	public function index()
	{
        
        
        
        
		$this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('home/home');
        $this->load->view('layout/footer');
        
	}
    
    public function web_design()
	{
        
        
		$this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('services/web_design');
        $this->load->view('layout/footer');
        
	}
    
    public function branding()
    {
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('services/branding');
        $this->load->view('layout/footer');
    }
    
    public function digital_marketing()
    {
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('services/digital_marketing');
        $this->load->view('layout/footer');
    }

    
     public function video_production()
    {
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('services/video_production');
        $this->load->view('layout/footer');
    }
    
    public function about()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('about/team');
        $this->load->view('layout/footer');
    }
    
    public function contact()
    {
      
        if($this->input->post('send'))
        {
            $receiver = "raphealolams@yahoo.com";
            
            
            $email = $this->input->post('email');
            $sender = $email.$this->input->post('name');
            $subject = $this->input->post('subject');
            $body = $this->input->post('message');
            
            
            $this->_SendMail($sender, $receiver, $subject, $body);
        }
        
        
        $this->load->view('layout/header');
        $this->load->view('layout/nav');
        $this->load->view('about/contact' , ['message' => $this->session->flashdata('mssg')]);
        $this->load->view('layout/footer');
        
    }
    
    protected function _SendMail($sender, $receiver, $subject, $body)
    {
       $ci = & get_instance();
       $ci->load->library('email');



      $ci->email->from($sender);
      $ci->email->to($receiver);
      $ci->email->subject($subject);

      $ci->email->message($body );

      if($ci->email->send())
      {
            $this->session->set_flashdata('mssg', "Email successfully");
      }
      else
      {
           $this->session->set_flashdata('mssg', "Error in sending Email.");
      }
    }

}
