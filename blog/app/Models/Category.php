<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    public function articleCount(){
        return $this->hasMany('App\Models\Article','category_id','id')->count();
                                                    // bağlanacağımız model // bağlanacağımız sütun // bağlanacak id
    }
}
