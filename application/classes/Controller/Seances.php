<?php
    class Controller_Seances extends Controller_Template_Website 
    {
        public $template='index';        
        public $content ='seances/index';
        
        public function action_index()
        {
            
            $date = $this->request->query('date');
            if(!isset($date))
            {
                $date = date('Y-m-d');
            }            
            
            
            $movies = array();
            $seances = ORM::factory('seance')->where('date', '=', $date)->find_all();
            
            foreach($seances as $seance)
            {
                $movies[] = $seance->movie;
            }
//            $movies = ORM::factory('movie', 2);
//
//            $genres = $movies->genres->find_all();
//
//            foreach ($genres as $genre)
//            {
//                echo $genre->name;
//            }
            
            
            var_dump($movies[0]->title);
            $days = Helper_DayCalculator::CalculateDays();
            $this->template->actual_page = 'home';
            $this->template->days = $days;
            $this->template->selected = $date;
        }
    }
?>
