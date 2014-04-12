<?php

class Picture extends \Eloquent {
  protected $fillable = [];
  use Codesleeve\Stapler\Stapler;

  public function __construct(array $attributes = array()) {
    $this->hasAttachedFile('file', [
      'styles' => [
        'medium' => '300x300',
        'thumb' => '100x100'
      ]
    ]);

    parent::__construct($attributes);
  }

  public function gallery()
  {
    return $this->belongsTo('Gallery');
  }
}
