<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Categories;
use App\Models\User;

class ContactController extends Controller
{
    public function index()
  {
    $categories = Categories::all();
    return view('index', compact('categories'));
  }

  public function confirm(Request $request)
  {
    $contact = 
    $request->only(['first_name','last_name', 'gender','email', 'tel',
     'address','building','category_id','detail']);
    return view('confirm', compact('contact'));
  }

  public function store(Request $request)
  {
    $contact =$request->only(['first_name','last_name', 'gender','email', 'tel',
     'address','building','category_id','detail']);
    Contact::create($contact);
    return view('thanks');
  }

  public function register()
  {
    return view('register');
  }

   public function login()
  {
    return view('login');
  }

  public function admin()
  {
    $contact = Contact::all();
    return view('admin', compact('contact'));
  }

    public function registration(Request $request)
    {
        $contact =$request->only([
        'name',
        'email',
        'password'
    ]);

        User::create($contact);
        return view('login');

    }
    
}
