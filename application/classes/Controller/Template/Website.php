<?php

class Controller_Template_Website extends Kohana_Controller_Template {
    
    public function before() {
        parent::before();
        
        $path = Kohana::find_file('views',$this->content);        
        if ($path)
        {
            $this->template->content = $path;
        }
    }
}
