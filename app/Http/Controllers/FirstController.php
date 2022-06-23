<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    /*public function showString(): string
    {
        return 'Show String';
    }*/

    public function getIndex()
    {

        $data=[];
        $data['name'] = 'Sarah';
        $data['id']= 15;
        $data['address']='New Cairo';
        //////////////////////////////////////////////
        $obj = new \stdClass();
        $obj -> title = 'NOUR';
        $obj -> age = 55;
        return view('first', compact('obj'));
      //  return view('first', $data);
    }


}
