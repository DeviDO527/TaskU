<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $incrementing = false;
    protected $KeyTipe = 'string';
    protected $fillable =[
        'name',
        'description',
        'created_at',
        'updated_at'
    ];

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'description' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }   

}
