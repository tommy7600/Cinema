<?php

class Controller_Searcher extends Controller_Template_Website {
    public $template='index';
    
    public function action_index()
    {        
        $this->template->actual_page = 'search';
        $this->template->content ='searcher/index';
    }
}

?>
