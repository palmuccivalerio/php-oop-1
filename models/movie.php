<?php



class Movie {

private string $avengers;
private string $lo_hobbit;


public function __construct(string $avengers, string $lo_hobbit ) {

    $this->avengers       = $avengers;
    $this->lo_hobbit     = $lo_hobbit;
  
}






public function fullMov() {

    return $this->avengers . ', ' . $this->lo_hobbit . ', ' ;
}
}

