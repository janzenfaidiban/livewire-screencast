<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use LaravelArchivable\Archivable;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'content'];
}
