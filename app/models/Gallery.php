<?php

class Gallery extends \Eloquent {
  protected $fillable = [];

  public function pictures()
  {
    return $this->hasMany('Picture');
  }
}
