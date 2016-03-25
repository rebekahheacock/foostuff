<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StuffController extends Controller {

    /**
    * Responds to requests to GET /stuff
    */
    public function getIndex() {
        printf("Right now is %s", Carbon::now()->toDateTimeString());
        echo "<br>";
        printf("Right now in New York is %s", Carbon::now('America/New_York'));  //implicit __toString()
    }

    /**
    * Responds to requests to GET /stuff/create
    */
    public function getCreate() {
        return view('stuff.create');
    }


    /**
    * Responds to requests to POST /stuff/create
    */

    public function postCreate(Request $request) {

        // dd($request);

    	// return 'Process adding new stuff: '.$_POST['thing'];

    	//return 'Add the new thing: '.$request->input('thing');
    	
        $this->validate($request,[
            'thing' => 'required|min:3|alpha_num',
            'type' => 'required'
        ]);

        // validation 

        
        return 'Add the new thing: '.$request->input('thing');
        //return redirect('/stuff');
    }

} #eoc









