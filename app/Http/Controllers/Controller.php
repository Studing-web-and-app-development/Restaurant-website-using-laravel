<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog');
    }
    public function single_blog()
    {
        return view('single-blog');
    }
}
