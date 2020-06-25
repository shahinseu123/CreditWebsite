<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function __construct()
    {
        return $this->middleware("auth");
    }
    public function dashboard()
    {
        return view("back_end.dashboard");
    }

    public function customer_inquery()
    {
        $inquery = Contact::orderBy("id", "desc")->get();
        return view("back_end.customerInquery")->with("inquery", $inquery);
    }

    public function delete_inquery($id)
    {
        $inquery = Contact::findOrFail($id);
        $inquery->delete();
        return redirect()->back()->with("msg", "Data deleted successfully");
    }
    public function show_info($id)
    {
        $info = Contact::findOrFail($id);
        // return $info;
        return view("back_end.showInfo")->with("info", $info);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("home");
    }
}
