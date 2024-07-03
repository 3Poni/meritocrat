<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $guarded = false;

    public function partners()
    {
        return $this->belongsToMany(PartnersTags::class, 'partners_tags', 'tag_id', 'partner_id');
    }
}
