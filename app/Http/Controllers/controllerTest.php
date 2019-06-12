<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ControllerTest extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function Prueba($name)
    {
        return 'esto es una prueba de controlador '.$name;
    }
}