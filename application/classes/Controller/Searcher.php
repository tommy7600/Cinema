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
    
    public function action_ajax()
    {
        $movieID = $_POST['movieId'];
        $movies = ORM::factory('movie', (int)$movieID);
        $tablica = array();
        $tablica['title'] = $movies->title;
        $tablica['description'] = $movies->description;
 
        $this->template = View::factory('json');
        $this->template->data = $tablica;
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
            $seances = $this->get_movie_seances($movie);
            $movies_table[$movie->id] = array('title' => $movie->title, 'genres' => implode(', ', $genres), 'seances' => $seances);
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
    
    private function get_movie_seances($movie)
    {
        $seances = ORM::factory('seance')
                ->where('movie_id', '=', $movie->id)
                ->find_all();
        $seance_list = array();
        $prev_day = '';
        foreach ($seances as $seance)
        {
            if(Date('l', strtotime($seance->date)) != $prev_day)
            {
                $prev_day = Date('l', strtotime($seance->date));
                $seance_list[] = '<br>'.$prev_day.' ('.substr(Date('d/m/Y', strtotime($seance->date)), 0, -5).') '.substr(Date($seance->time), 0, -3);
            }
            else
            {
                $seance_list[] = ' '.substr(Date($seance->time), 0, -3);
            }
            
        }
        return substr(implode(', ', $seance_list), 4);
    }
}