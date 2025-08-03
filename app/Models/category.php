<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class category extends Model
{
    use HasUuids;
    public $incrementing = false;
    protected $KeyType = 'string';
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

    public function tasks()
    {
        return $this->hasMany(Task::class, 'category_id', 'id');
    }

}
