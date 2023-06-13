<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowOrder extends Model
{
    use HasFactory;

    public function members() {
        return $this->belongsTo(Member::class); 
    }

    public function books() {
        return $this->hasOne(Book::class);
    }

    public $timestamps = false;
}
