<?php

class Controller_Template_Website extends Kohana_Controller_Template {
    
    public function before() {
        parent::before();
        if ( Kohana::find_file('views',$this->content) )
        {
            $this->template->content =  View::factory($this->content);
        }
    }
}
