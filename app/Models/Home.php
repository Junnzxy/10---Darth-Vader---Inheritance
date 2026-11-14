<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homes';

    protected $fillable = [
        'section_code',
        'badge',
        'title',
        'description',
        'link_route',
        'link_text',
    ];
}
