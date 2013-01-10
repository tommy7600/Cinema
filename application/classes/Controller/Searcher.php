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
            $this->set_movies_table($movies);
        }
        elseif ($genre AND !$title)
        {
            $movies = $this->get_serched_movies_by_genres($genre);
            $this->set_movies_table($movies);
        }
        
        $this->template->actual_page = 'search';
        $this->set_searching_fields();
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
    
    private function set_movies_table(array $movies)
    {
        $movies_table = array();
        foreach($movies as $movie)
        {
            $genres = $this->get_movie_genres($movie);
            $movies_table[$movie->title] = array('genres' => implode(', ', $genres), 'seances' => 'PN 20:30');
        }
        $this->template->movies = $movies_table;
    }
    
    private function get_serched_movies_by_title($title)
    {
        $movies = ORM::factory('movie')
                ->where('title', 'LIKE', '%'.$title.'%')
                ->find_all();
        
        $movie_list = array();
        foreach ($movies as $movie)
        {
            $movie_list[] = $movie;
        }
        
        return $movie_list;
    }
    
    private function get_serched_movies_by_genres($genre)
    {
        $genres = ORM::factory('genre')
                ->where('id','in',$genre)
                ->find_all();
        
        $movie_list = array();
        foreach ($genres as $value)
        {
            $movies = $value->movies->find_all();
            foreach ($movies as $movie)
            {
                $movie_list[] = $movie;
            }
        }
        
        return $movie_list;
    }
    
    private function get_movie_genres($movie)
    {
        $genres = $movie->genres->find_all();
        $genre_list = array();
        foreach($genres as $genre)
        {
            $genre_list[] = $genre->name;
        }
        
        return $genre_list;
    }
}
