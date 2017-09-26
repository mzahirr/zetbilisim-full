<?php namespace App\Http\Controllers\Site;

use App\Http\Requests\ContactFormRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function formPost(ContactFormRequest $request)
    {
        $content = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'subject' => $request->input('subject')
        ];

        Mail::to('m.zahirr@hotmail.com')->send(new Contact($content));
    }

    public function form()
    {

    }
}
