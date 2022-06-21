<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //


    public function  listimport()
    {
        // $shows = ContactGroup::get();
        return view('Admin.Contacts.ImportContacts.list');
    }
}
