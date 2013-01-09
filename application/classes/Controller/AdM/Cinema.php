<?php

class Controller_AdM_Cinema extends Controller_Admin {

        public $template = 'index';
        public function action_index() {
               
        $this->template->content ='adm_cinema/index';
        $this->template->actual_page ='administrate';
        }
}