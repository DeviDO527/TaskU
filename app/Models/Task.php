<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasUuids;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable =[
        'title',
        'description',
        'user_id',
        'cathegory_id',
        'due_date',
        'completed',
        'active',
        'created_at',
        'updated_at'
    ];

    protected function casts():array{
        return[
            'title' => 'string',
            'description' => 'string',
            'user_id' => 'string',
            'cathegory_id' => 'string',
            'due_date' => 'datetime',
            'completed' => 'boolean',
            'active' => 'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }
}
