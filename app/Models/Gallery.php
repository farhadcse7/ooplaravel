<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public static $galleries = [];

    public static function getGallery()
    {
        self::$galleries = [
            0 => [
                'id' => 1,
                'heading' => 'This is Gallery title one',
                'image' => 'img/Gallery/Gallery (1).jpg',
            ],
            1 => [
                'id' => 2,
                'heading' => 'This is Gallery title two',
                'image' => 'img/Gallery/Gallery (2).jpg',
            ]
        ];

        return self::$galleries;

    }

    public static function getSingleGalleryById($id)
    {
        foreach (self::getGallery() as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
    }
}
