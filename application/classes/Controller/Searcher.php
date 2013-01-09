<?php

class Controller_Searcher extends Controller_Template_Website 
{
    public $template='index';
    
    public function action_index()
    {   
        if(isset($_POST['genre']) OR isset($_POST['title']))
        {
            $this->template->movies = array('movie1' => array('thriller', 'PN 20:30'), 'movie2' => array('horror', 'WT 20:30'));
        }
        
        $genres = ORM::factory('Genre')->find_all();
        $movies = ORM::factory('Movie')->find_all();
        
        foreach ($movies as $movie)
        {
            $titles[] = $movie->title;
        }
        
        $titles_typeahead = '["'.implode('","', $titles).'"]';

        $this->template->actual_page = 'search';
        $this->template->content ='searcher/index';
        $this->template->genres = $genres;
        $this->template->titles = $titles_typeahead;
    }
}

?>
