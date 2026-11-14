<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'name',
        'birth_name',
        'title',
        'affiliation',
        'quote',
        'image',
        'homeworld',
        'weapon',
        'description',
        'powers',
        'timeline',
    ];

    /**
     * Otomatis cast kolom JSON ke tipe array PHP saat diakses
     */
    protected $casts = [
        'powers' => 'array',
        'timeline' => 'array',
    ];
}
