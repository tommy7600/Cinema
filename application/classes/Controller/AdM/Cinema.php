<?php

class Controller_AdM_Cinema extends Controller_Admin {

    public $template = 'index';
    public $content = 'adm_cinema/index';

    public function action_index() {
        $this->template->actual_page = 'administrate';
        $seances = ORM::factory('seance')
                ->find_all();
        $this->template->seances = $seances;
    }

    public function action_add_show() {
        
        
        $this->_save(ORM::factory('seance'));
    }

    public function action_edit_show() {
        
        $this->_save(ORM::factory('seance'));
    }

    public function action_delete_show() {
        $shows = ORM::factory('seances', (int) $this->request->param('id', 0))
                ->delete();
        HTTP::redirect('adm');
    }

    private function _save($movies) {
        $post = $this->request->post();
        if (isset($post['username'])) {

            try {
                
            } catch (ORM_Validation_Exception $e) {
                $t = $e->errors('validation');;
                $this->template->errors = $t;
            }
        }
    }

}