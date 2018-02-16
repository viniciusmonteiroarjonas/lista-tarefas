<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model{

  protected $table = 'tarefas';
  public $timestamps = true;

  protected $fillable = ['texto','autor','status'];

}
