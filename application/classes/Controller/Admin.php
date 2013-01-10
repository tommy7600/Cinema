<?php

class Controller_Admin extends Controller_Template_Website {
    public $template = 'index';
    protected $title = '';
    protected $content='';
    public function before()
    {
        
        if ( ! Auth::instance()->logged_in())
        {
            if (strtolower($this->request->controller()) != 'adm_auth')
            {
                HTTP::redirect('adm_auth');
            }
        }
        parent::before();
               
    }
    
    public function after() {
                  
        parent::after();
    }
    
    public function action_index()
    {
        
    }
}
