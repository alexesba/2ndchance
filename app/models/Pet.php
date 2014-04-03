<?php
class Pet extends \Eloquent {
  protected $fillable = [];

  public function gallery()
  {
    return $this->hasOne('Gallery');
  }

}
