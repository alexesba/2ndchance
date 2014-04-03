<?php

class HomeController extends BaseController {

  public function __construct(Pet $pet)
  {
    $this->pet = $pet;
  }
	public function index()
	{
    $pets = $this->pet->paginate($this->per_page);
    $this->layout->content = View::make('home.index', compact('pets'));
	}

}
