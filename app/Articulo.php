<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table="articulos";
protected $fillable=['tittle','content','category_id','user_id'];

public function category()
{
return $this->belongsTo('App\Category','category_id');

}

public function users(){

	return $this->belongsTo('App\User','user_id');
}

public function imagenes(){

return $this->hasMany('App\Imagen');

}

public function tags(){
//para el muchos a muchos poner el nombre de la tabla pivote y los id foraneos
	return $this->belongsToMany('App\Tag','articulo_tag','tags_id','article_id');
}
}
