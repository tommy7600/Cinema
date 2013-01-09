<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AdM_Auth extends Controller_Admin {
    public $template = 'adm_auth/index';
    
    public function action_index()
    {

        $post = $this->request->post();
        if (isset($post['username'], $post['password']))
        {
            $logged_in =Auth::instance()->login($post['username'], $post['password']);
            
            if ($logged_in&&Auth::instance()->logged_in('admin'))
            {
                    HTTP::redirect('/');
            }
         else{
                    $this->template->error = 'Błędne dane.';
            }
        }
     }
     
     public function action_logout()
     {
         Auth::instance()->logout();
         HTTP::redirect('/');
     }

}          
