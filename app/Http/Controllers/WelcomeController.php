<?php

namespace App\Http\Controllers;

use App\Helpers\HomeHelpers;


class WelcomeController extends Controller
{
    public function __invoke()
    {


        $hero = HomeHelpers::getHero();


        return view(
            'welcome',
            compact(
                'hero',
            )
        );
    }
}
