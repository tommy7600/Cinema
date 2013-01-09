<?php
    class Controller_Seances extends Controller_Template_Website 
    {
        public $template='index';        
        public $content ='welcome/index';
        public function action_get_seances()
        {
            
            $date = $this->request->query('date');
            if(!isset($date))
            {
                $date = date('Y-m-d');
            }            
            $days = Helper_DayCalculator::CalculateDays();
            $this->template->actual_page = 'home';
            $this->template->days = $days;
            $this->template->selected = $date;
        }
    }
?>
