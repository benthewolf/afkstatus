<?php

namespace App\Http\Controllers;

use App\Helpers\HomeHelpers;


class V2Controller extends Controller
{
    public function __invoke()
    {


        $hero = HomeHelpers::getHero2();


        return view(
            'v2',
            compact(
                'hero',
            )
        );
    }
}
