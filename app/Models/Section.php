<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];
    protected $table = 'sections';

    // public function users()
    // {
    //     return $this->hasMany(User::class, 'section_id', 'id');
    // }
    

}
