<?php

class Controller_Searcher extends Controller_Template_Website {
    public $template='index';
    
    public function action_index()
    {
        $this->template->content ='searcher/index';
    }
}

?>
