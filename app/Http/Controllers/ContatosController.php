<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Barryvdh\DomPDF\Facade\Pdf;

class ContatosController extends Controller
{
    // View Index
    public function index(){

        $search = request('search');

        if($search) {

            $contacts = Contact::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $contacts = Contact::all();
        }

        $contacts = Contact::all();

        return view('home', ['contacts' => $contacts]);
    }

    //View Create
    public function create(){

        return view('create');
    }

    //Store
    public function store(Request $request){
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->city = $request->city;
        $contact->uf = $request->uf;

        $contact->save();

        return redirect('/');
    }

    //Edit
    public function edit($id){

        $contact = Contact::findOrFail($id);

        return view('edit', ['contact' => $contact]);
    }

    // Update
    public function update(Request $request) {

        $data = $request->all();

        Contact::findOrFail($request->id)->update($data);

        return redirect('/')->with('message', 'Contato editado com sucesso!');

    }

    // Destroy
    public function destroy($id) {

        Contact::findOrFail($id)->delete();

        return redirect('/')->with('message', 'Contato excluído com sucesso!');

    }

    public function search(Request $request){
        $contacts = Contact::where('name', 'LIKE', "%{$request->search}%")
                            ->orwhere('phone', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('home', compact('contacts'));
    }

    public function downloadPDF(){

        $contacts = Contact::all();

        
        $pdf = Pdf::loadview('pdf.agenda', compact('contacts'));

        return $pdf->download('agenda.pdf');
    }

}
