<?php

namespace App\Http\Controllers;

use App\Models\StudentContact;
use Illuminate\Http\Request;

use App\Rules\Recaptcha;

class StudentContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index($id = null)
    {
        // 1. Fetch all contacts for the left sidebar
        $studentContacts = \App\Models\StudentContact::latest()->get();

        // 2. ONLY find a contact if an ID is actually passed in the URL.
        // If you just go to /contacts, $id is null, so $selectedContact stays null.
        // This allows the "No Contact Selected" message to show on the right.
        $selectedContact = $id ? \App\Models\StudentContact::find($id) : null;

        return view('pages.contact.index', compact('studentContacts', 'selectedContact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.studentContacts.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company_name' => 'required|string|max:20',
            'g-recaptcha-response' => ['required', new Recaptcha()],
        ]);

        $studentContact = new StudentContact();
        $studentContact->name = $request->name;
        $studentContact->email = $request->email;
        $studentContact->company_name = $request->company_name;
        $studentContact->message = $request->message;
        $studentContact->status = 'pending';
        $studentContact->save();

        return redirect()->back()->with('success', 'Your Contact Request Sent To AL MAKTOUM TOURISM Management successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studentContact = studentContact::find($id);

        return view('pages.contact.edit', compact('studentContact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contact = \App\Models\StudentContact::findOrFail($id);

        // Update the status
        $contact->update([
            'status' => $request->status
        ]);

        // REDIRECT BACK TO THE SAME USER
        // By passing $id here, the URL will stay /contacts/5 and the user stays open
        return redirect()->route('studentContact.index', $id)
            ->with('success', 'Status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studentContact = studentContact::find($id);

        if ($studentContact) {
            $studentContact->delete();
        }

        return redirect()->route('studentContact.index')->with('student Admission Request Deleted SuccessFully');
    }
}
