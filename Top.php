<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    public function selectALL(){
        $query = \DB::table('product')->select('id','name','price','stock')->get();
        return $query;
    }
}