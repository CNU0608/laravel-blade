<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    public function bladeTest()
    {
        // $data = [];
        $data = [
            'key'=> '前端开发',
            'user-name'=>'CNU0608',
            'description'=>'hello, laravel_5. happay!'
        ];
        return view('blade.son',['data'=>$data]);
    }
}
