<?php

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
  protected $table = 'phone';

  protected $fillable = [
      'description',
      'code',
      'ddd',
      'prefix',
      'sufix'
  ];

  public function getNumberAttribute()
  {
    return "{$this->code} ({$this->ddd}) {$this->prefix}-{$this->sufix}";
  }
}