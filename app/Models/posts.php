<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = [
        'Menu', 'Danhmucbaiviet', 'Baiviet','Logodoitac'
    ];
    public function link(){
        return $this->belongsTo(posts::class);
    }
}
