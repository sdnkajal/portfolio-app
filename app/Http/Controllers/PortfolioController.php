<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function about(): View
    {
        return view('about');
    }

    public function resume(): View
    {
        return view('resume');
    }

    public function portfolio(): View
    {
        return view('portfolio');
    }

    public function services(): View
    {
        return view('services');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|max:1600',
        ]);
        return [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ];
    }
}
