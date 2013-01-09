<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template_Website {
        public $template = 'index'; 
         
	public function action_index()
	{
            $days = Helper_DayCalculator::CalculateDays();
            
            $this->template->content ='welcome/index';
            $this->template->actual_page = 'home';
            $this->template->days = $days;
            $this->template->selected = date('Y-m-d');
            
	}

} // End Welcome
