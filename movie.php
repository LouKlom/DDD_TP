<?php

public class movie
{
	// ------------------------
	private $movieId;


	// -------------------------
	public $movieName;
	public $movieLenght;
	public $movieCast[];
	public $movieDirector;
	public $movieProductor;
	public $movieLangage[];
	public $movieSubtitles[];
	public $movieType[];

	


	public function displayMovieName()
	{
		echo $this->movieName;
	}

	public function displayMovieLenght()
	{
		echo $this->movieLenght;
	}

	public function displayMovieCast()
	{
		print_r($this->movieCast);
	}

	public function displayMovieDirector()
	{
		echo $this->movieDirector;
	}

	public function displayMovieProductor()
	{
		echo $this->movieProductor;
	}

	public function displayMovieLangage()
	{
		print_r($this->movieLangage);
	}

	public function displayMovieType()
	{
		print_r($this->movieType);
	}

}


?>