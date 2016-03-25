<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Debugbar;

class CatController extends Controller {

    /**
    * Responds to requests to GET /cat/create
    */
    public function getCreate(Request $request) {
        $request->session()->forget('_old_input');
        return view('cat.create');
    }


    /**
    * Responds to requests to POST /cat/create
    */

    public function postCreate(Request $request) {
        $this->validate($request, [
            'width' => 'required|min:50|max:700|numeric',
            'height' => 'required|min:50|max:700|numeric',
        ]);

        $width = $request->input('width');
        $height = $request->input('height');

        $cat = 'http://placekitten.com/' . $width . '/' . $height;

        $request->flash();

        //return view('cat.create', ['cat' => $cat, 'input' => $request->all()]);
        return view('cat.create', ['cat' => $cat]);
    }

} #eoc









