<?php


class Controller_Searcher extends Controller_Template_Website {
    public $template='index';    
    public $content ='searcher/index';
    public function action_index()
    {   
        $genre = $this->request->query('genre');
        $title = $this->request->query('title');
        
        if($title)
        {
            $movies = $this->get_serched_movies_by_title($title);
        }
        elseif ($genre AND !$title)
        {
            $movies = $this->get_serched_movies_by_genres($genre);
        }
        
        
        $this->template->actual_page = 'search';
        $this->set_searching_fields();
        $this->set_movies_table($movies);
    }
    
    private function set_searching_fields()
    {
        $genres = ORM::factory('Genre')->find_all();
        $movies = ORM::factory('Movie')->find_all();
        
        foreach ($movies as $movie)
        {
            $titles[] = $movie->title;
        }
        $titles_typeahead = '["'.implode('","', $titles).'"]';
        
        $this->template->genres = $genres;
        $this->template->titles = $titles_typeahead;
    }
    
    private function set_movies_table($movies)
    {
        $movies_table = array();
        foreach($movies as $movie)
        {
            $genres = $this->get_movie_genres($movie);
            $movies_table[$movie->title] = array(implode(', ', $genres), 'PN 20:30');
        }
        $this->template->movies = $movies_table;
    }
    
    private function get_serched_movies_by_title($title)
    {
        $movies = ORM::factory('movie')
                ->where('title', 'LIKE', '%'.$title.'%')
                ->find_all();
        
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
    
    private function get_movie_genres($movie)
    {
        $genres = $movie->genres->find_all();
        foreach($genres as $genre)
        {
            $genre_list[] = $genre->name;
        }
        
        return $genre_list;
    }
}
