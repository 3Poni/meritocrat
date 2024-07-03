<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnersTags extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function partners()
    {
        return $this->hasMany(Partner::class, 'partners_tags', 'id', 'partner_id');
    }

    public function tags()
    {
        return $this->hasMany(Tag::class, 'partners_tags', 'id', 'tag_id');
    }
}
