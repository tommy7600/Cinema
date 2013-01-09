<?php

class Controller_Searcher extends Controller_Template_Website {
    public $template='index';    
    public $content ='searcher/index';
    
    public function action_index()
    {        
        $genres = ORM::factory('Genre')->find_all();
        $movies = ORM::factory('Movie')->find_all();
        
        foreach ($movies as $movie)
        {
            $titles[] = $movie->title;
        }
        
        $titles_typeahead = '["'.implode('","', $titles).'"]';

        $this->template->actual_page = 'search';
        $this->template->genres = $genres;
        $this->template->titles = $titles_typeahead;
    }
}

?>
