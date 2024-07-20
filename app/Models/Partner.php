<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'partners';
    protected $guarded = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'partners_tags', 'partner_id', 'tag_id');
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['tag_id'] ?? false) {
            $query->whereHas('tags', function($q) {
                $q->whereIn('tags.id',explode(',', request('tag_id')));
            })->get();
        }
    }
}
