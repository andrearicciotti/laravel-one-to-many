<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['title', 'description', 'slug'];

    public function setTitleAttribute($_title) {
        $this->attributes['title'] = $_title;
        $this->attributes['slug'] = Str::slug($_title);
    }

    public function type() 
    {
        return $this->belongTo(Type::class);
    }
}
