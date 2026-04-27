<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function about()
    {
        return view('company.about');
    }

    public function leadership()
    {
        return view('company.leadership');
    }

    public function partners()
    {
        return view('company.partners');
    }

    public function careers()
    {
        return view('company.careers');
    }

    public function contact()
    {
        return view('company.contact');
    }

    public function becomePartner()
    {
        return view('company.become-partner');
    }
}
