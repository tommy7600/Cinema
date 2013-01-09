<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template_Website {
        public $template = 'index'; 
        public $content = 'welcome/index';
	public function action_index()
	{	
           $this->template->actual_page = 'home';
           $days = Helper_DayCalculator::CalculateDays();
           $this->template->days = $days;
           $this->template->selected = date('Y-m-d');
            
	}

} 
