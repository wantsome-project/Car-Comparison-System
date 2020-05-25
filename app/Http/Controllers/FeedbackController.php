<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FeedbackController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create(Request $request, $productId)
    {
        dd('xxx');
    }

    public function store(Request $request, $productId)
    {

    }
}


