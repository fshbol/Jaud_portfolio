<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
   public function index()
    {
    $contact = Contact::all();
    return view('pages.contact', compact('contact'));
    }
}
