<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActicleController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    /*public function about()
    {
        $name = 'CNU:OK';
        $tag = '<span style="color: red;">Tag</span>';
        // return view('about/about')->with('name', $name);
        return view('about.about')->with([
            'name' => $name,
            'tag' => $tag
        ]);
    }*/

    public function about()
    {
        $name = 'CNU:OK888';
        $tag = '<span style="color: red;">Tag888</span>';
        // $data = [];
        $data = [
            'key'=> '前端开发',
            'user-name'=>'CNU0608',
            'description'=>'hello, laravel_5. happay!'
        ];
        return view('about.about',compact('name', 'tag', 'data'));
    }

    /*public function about()
    {
        $data = [];
        $data['name'] = 'CNU:OK666';
        $data['tag'] = '<span style="color: red;">Tag666</span>';
        return view('about.about', $data);
    }*/

}