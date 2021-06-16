<?php

namespace App\Http\Controllers;
use App\Models\Ac;
use Illuminate\Http\Request;

class AcController extends Controller
{
    public function index() 
    {
        return view ('index', [ //le decimos al controlador que retorne la vista index pasandole la variable posts
            'acs' => Ac::latest()->paginate()//Aqui le dices que  posts son los datos de la tabla (por eso usas POST)
        ]);
    } //
}
