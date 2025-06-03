<?php

namespace App\Helpers;

class HomeHelpers
{

    public static function getHero()
    {
        return convertArrToObj([
            'image' => landinghelper('sec8img5mb.webp'),
            'imageFallback' => landinghelper('sec8img5mb.png'),
            'video' => landinghelper('lofi.mp4')
        ]);
    }
}
