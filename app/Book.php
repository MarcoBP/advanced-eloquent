<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    // Relacion belogsTo
    
    public function category(){
    	return $this->belogsTo(Category::class);
    }
}
