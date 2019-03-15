<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   protected $table="tags";
   protected $fillable=['name'];


public function articles(){
	//para el muchos a muchos poner el nombre de la tabla pivote y los id foraneos
return $this->belongsToMany('App\Articulo','articulo_tag','article_id','tags_id')->withTimestamps();

}

}
