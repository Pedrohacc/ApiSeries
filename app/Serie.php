<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Serie extends Model{
    protected $table = "serie";
    public $timestamps= false;
    //permito quais dados vão ser passados.
    public $fillable = ['nome'];

}

class tecla extends Model{
    
}