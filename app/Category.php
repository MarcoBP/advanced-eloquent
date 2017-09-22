<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 	// Relacion hasMany
 	
 	public function books(){
 		return $this->hasMany(Book::class);
 	}   
}
