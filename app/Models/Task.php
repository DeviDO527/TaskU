<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Task extends Model
{
    use HasUuids;
    public $incrementing = false;
    protected $keyType = 'string';
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    protected $fillable =[
        'title',
        'description',
        'user_id',
        'category_id',
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
            'category_id' => 'string',
            'due_date' => 'datetime',
            'completed' => 'boolean',
            'active' => 'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
