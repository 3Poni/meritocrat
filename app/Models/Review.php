<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    const TYPE_VIDEO = 0;
    const TYPE_PHOTO = 1;
    const TYPE_SCAN = 2;

    public static function getTypes()
    {
        return
            [
                self::TYPE_VIDEO => 'Видео',
                self::TYPE_PHOTO => 'Фото',
                self::TYPE_SCAN => 'Скан',
            ];
    }

    protected $fillable = [
        'fio',
        'position',
        'type',
        'url',
        'message',
        'img',
    ];
}
