<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\StoreContactFormData;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("front_end.home");
    }
    public function service()
    {
        return view("front_end.service");
    }
    public function about()
    {
        return view("front_end.about");
    }
    public function contact()
    {
        return view("front_end.contact");
    }
    public function contactAction(StoreContactFormData $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with("success", "Thanks for contacting us!!");
    }
}
