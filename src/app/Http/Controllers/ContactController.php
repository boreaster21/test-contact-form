<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){return view('index');}


    public function confirm(ContactRequest $request){
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
        // return view('confirm', ['contact' => $contact]);
    }


    public function store(ContactRequest $request){
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}