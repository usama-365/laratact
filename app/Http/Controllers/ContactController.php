<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts_query = Contact::query()->orderBy('first_name')->orderBy('last_name');
        $company_id = request('company_id');
        if ($company_id)
            $contacts_query->where('company_id', 'like', $company_id);
        $contacts = $contacts_query->paginate(10);
        $companies = Company::query()->orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('contacts.index', array_merge(compact('contacts'), compact('companies')));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'company_id' => 'required|exists:companies,id'
        ]);
        Contact::query()->create($request->all());
        return redirect(route('contacts.index'))->with('message', 'Contact has been added successfully');
    }

    public function create()
    {
        $companies = Company::query()->orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('contacts.create', compact('companies'));
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
