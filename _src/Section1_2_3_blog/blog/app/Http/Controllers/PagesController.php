<?php

namespace App\Http\Controllers;
//to handle requests
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //return 'index';
        $title = "Welcome to Laravel Demossss";
        //return view('welcome',compact('title'));
        return view('welcome')->with('title',$title);
    }
    public function about()
    {
        //return 'index';
        return view('about');
    }
    public function services()
    {
        //return 'index';
        $data=array(
            'title'=>'Services we offer : ',
            'services'=>['Web','Programming','SEO']
        );
        return view('services')->with($data);
    }
}
