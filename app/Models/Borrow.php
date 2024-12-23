<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $guarded = []; // Không bảo vệ bất kỳ thuộc tính nào

    public function book() 
    { 
        return $this->belongsTo(Book::class); 
    } 
 
public function reader() 
    { 
        return $this->belongsTo(Reader::class); 
    } 
}
