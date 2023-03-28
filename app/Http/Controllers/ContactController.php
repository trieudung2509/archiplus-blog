<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact; 

class ContactController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $contact = Contact::first();
        if ($contact == null) {
            $contact = new Contact();
            $contact->title = null;
            $contact->description = null;
            $contact->save();
        } 

        return view('backend.contact.index',  compact('contact'));
    }

    public function update(Request $request)
    {

        $contact = Contact::first();
        $contact->title = $request->title;
        $contact->description = $request->short_description;
        $contact->save();
        flash(translate('Update has been updated successfully'))->success();
        return redirect()->back();
    }
}
