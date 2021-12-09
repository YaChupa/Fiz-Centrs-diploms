<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function getCategory(){
        return Category::find($this->category_id);
        
    } 
    
    public function category(){
        return $this->belongsTo(Category::class);
        
    } 
    
}