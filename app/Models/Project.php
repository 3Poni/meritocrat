<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = false;

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['service_id'] ?? false) {
            $query->whereIn('service_id', explode(',', request('service_id')));
        }
    }

}
