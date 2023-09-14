<?php

public class serie
{
	// PRIVATE ------------------------
	private $serieId;


	// PUBLIC -------------------------
	public $serieName;
	public $serieLenght;
	public $serieCast[];
	public $serieNumberEpisode;
	public $serieNumberSaison;
	public $serieProductor;
	public $serieDirector;
	public $serieLangage[];


	public function displaySerieName()
	{
		echo $this->serieName;
	}

	public function displaySerieLenght()
	{
		echo $this->serieLenght;
	}

	public function displaySerieCast()
	{
		print_r($this->serieCast);
	}

	public function displaySerieNumberSaison()
	{
		echo $this->serieNumberSaison;
	}
		
	public function displaySerieNumberEpisode()
	{
		echo $this->serieNumberEpisode;
	}

	public function displaySerieProductor()
	{
		echo $this->serieProductor;
	}

	public function displaySerieDirector()
	{
		echo $this->serieDirector;
	}

	public function displaySerieLangage()
	{
		print_r($this->serieLangage);
	}





}


?>