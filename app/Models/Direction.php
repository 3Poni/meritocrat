<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direction extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = false;

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    protected function result(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => unserialize($value),
        );
    }
    protected function result2(): Attribute
    {
        return Attribute::make(
            get: fn (string|null $value) =>  unserialize($value),

        );
    }
    protected function stages(): Attribute
    {
        return Attribute::make(
            get: fn (string|null $value) => unserialize($value),

        );
    }
}
