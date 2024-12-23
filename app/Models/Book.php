<?php

namespace App\Models;

use Illuminate\Cache\HasCacheLock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    //
    protected $guarded = []; // Không bảo vệ bất kỳ thuộc tính nào
    public function borrows() 
    {    
        return $this->hasMany(Borrow::class); 
        
    } 
}
