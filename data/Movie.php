<?php 

class Movie
{
    protected $title;
    protected $release_date;
    protected $director_name;
    protected $duration; 
     
    function __construct($title, $release_date, $director_name, $duration){
        $this->title = $title;
        $this->release_date = $release_date;
        $this->director_name = $director_name;
        $this->duration = $duration;
    }

    
    public function get_title(){
        return $this->title;
    }

    public function get_date(){
        return $this->release_date;
    }

    public function get_director(){
        return $this->director_name;
    }

    public function get_duration(){
        return $this->duration;
    }
};




?>