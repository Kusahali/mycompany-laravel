<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    use HasFactory;
    protected $table = 'link';
    public $timestamps = false;
    protected $fillable = [
        'link', 
        'email', 
        'hotline', 
        'banquyen', 
    ];
    public function posts(){
        return $this->belongsTo(link::class);
    }
}
