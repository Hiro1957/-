<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'img_path', ];



}