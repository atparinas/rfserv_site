<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function services()
    {
    	return view('pages.services');
    }

    public function getContact()
    {
    	return view('pages.contact');
    }

    public function postContact(Request $request)
    {

    }

    public function getProjects()
    {
        return view('pages.projects');
    }
}
