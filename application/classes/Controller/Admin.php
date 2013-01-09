<?php

class Controller_Admin extends Controller_Template {
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
        
        $this->content = strtolower($this->request->controller().DIRECTORY_SEPARATOR.$this->request->action());
        if ( Kohana::find_file('views',$this->content) )
        {
            $this->template->content =  View::factory($this->content);
        }
    }
    }
    
    public function after() {
                  
        parent::after();
    }
    
    public function action_index()
    {
        
    }
}
