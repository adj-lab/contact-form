<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //index.blade.phpの呼び出し
    public function index() 
    {
        return view('index');
    }

    //送信ボタン押下後：confirm.blade.php呼び出し
    //public function confirm(Request $request)
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }
    //送信ボタン押下時：
    //public function store(Request $request)
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}