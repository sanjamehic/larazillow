<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RealtorListingController extends Controller
{
    public function index()
    {
        return Inertia(
            'Realtor/Index', ['listings' => Auth::user()->listings]
        );
    }
}
