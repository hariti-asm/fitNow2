<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Progress extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'weight',
        'measurements',
        'performance',
        'status',
        'slug',
    ];
    protected $casts = [
        'performance' => 'json',
        'measurements'=>'json'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function user(){
        return $this->belongsTo((User::class));
    }
}