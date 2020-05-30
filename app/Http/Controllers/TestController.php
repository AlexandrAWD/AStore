<?php

namespace App\Http\Controllers;

use App\Library\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class TestController extends BaseController
{
    public function Index()
    {

        return Response::JsonSuccess('Ку ку');
    }

    public function All()
    {
        $user = DB::table('users')->where('name', 'Alexandr')->get();
        return $user;
    }
}
