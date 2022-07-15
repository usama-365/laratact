<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::query()->orderBy('first_name')->orderBy('last_name')->paginate(10);
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function show($id)
    {
        $contact = Contact::all()->find($id);
        if ($contact) {
            $attributes = [
                "First Name" => $contact->first_name,
                "Last Name" => $contact->last_name,
                "Email" => $contact->email,
                "Phone" => $contact->phone,
                "Address" => $contact->address,
                "Company" => $contact->company->name
            ];
            return view('contacts.show', compact("attributes"));

        } else {
            return "Contact not found";
        }
    }
}