<?php

namespace App\Http\Controllers;


use App\Models\Detail;
use Illuminate\Http\Request;


class CuboidController extends Controller
{
    public function cuboidPage()
    {
        
        $values = Detail::first()->paginate(10);

       return view('cuboid-page',  ['values' => $values ]);
    
      
    }

    public function store(Request $request) {
       

        $this->validate($request, [
            'length' => 'required',
            'breadth' => 'required',
            'height' => 'required'
        ]);

        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));
    
        for ($i = 0; $i < 10; $i++) {
            $key .= $keys[array_rand($keys)];
        }
    
        // return $key;

        $name = $request->input('cuboid_name');
        $len = $request->input('length');
        $bre = $request->input('breadth');
        $hei = $request->input('height');

        $uname = $name ."_" . $key;
$vol = $len * $bre * $hei;
$surf = 2 * $len * $bre + 2 * $hei * $bre + 2 * $len * $hei; 



$values = new Detail();
$values->cuboid_name = $uname;
$values->length = $len;
$values->breadth = $bre;
$values->height = $hei;
$values->volume = $vol;
$values->surface_area = $surf;
$values->save();


       return redirect()->route('cuboid-page')->with('success', 'Successfully Info Stored');
    }
    
}