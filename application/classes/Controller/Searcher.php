<?php


class Controller_Searcher extends Controller_Template_Website {
    public $template='index';    
    public $content ='searcher/index';
    public function action_index()
    {   
        $genre = $this->request->query('genre');
        $title = $this->request->query('title');
        //xdebug_var_dump($genre);
        if($title)
        {
            $this->template->movies = array('movie1' => array('thriller', 'PN 20:30'), 'movie2' => array('horror', 'WT 20:30'));
            $movies = $this->get_serched_movies_by_title($title);
            $genres = $this->get_serched_movies_by_genres($genre);
            foreach ($movies as $value)
            {
                $string1[] = $value->title;
            }
            foreach ($genres as $value)
            {
                $string2[] = $value->title;
            }
            xdebug_var_dump($string1);
            xdebug_var_dump($string2);
        }
        elseif ($genre) 
        {
            $genres = $this->get_serched_movies_by_genres($genre);
            foreach ($genres as $value)
            {
                $string2[] = $value->title;
            }
            xdebug_var_dump($string2);
        }
        
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
    
    private function get_serched_movies_by_title($title)
    {
        $movies = ORM::factory('movie')
                ->where('title', 'LIKE', '%'.$title.'%')
                ->find_all();
        
        foreach($movies as $value)
        {
            $genres = $value->genres->find_all();
        }
        
        
        return $movies;
    }
    
    private function get_serched_movies_by_genres($genre)
    {
        $genres = ORM::factory('genre')
                ->where('id','in',$genre)
                ->find_all();
        
        foreach ($genres as $value)
        {
            $movies = $value->movies->find_all();
        }
        
        foreach ($genres as $value)
            {
                $string2[] = $value->name;
            }
            xdebug_var_dump($string2);
            
        return $movies;
    }
}
