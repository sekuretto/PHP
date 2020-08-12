<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showinfo()
    {
        return view('contact');
    }

    public function returninfo()
    {
        return 'Olen ContactControllerin return-lause';
    }

    public function showperson()
    {
        $name = "<span style='background-color:#ffc;'>Raaka-Arska</span>";
        return view('person')->with('name', $name);
    }

    public function listpersons()
    {
        $persons = ['Guru Ken', 'Ainen Sani', 'Tana Ruu'];
        return view('persons')->with('persons', $persons);
    }

    public function test()
    {
        //$variable  = url('/customeres');
        //$variable  = url('https://student.labranet.jamk.fi/~ara/phpmatsku/02/nayta-http-data.php?nimi=Rantala & pojat');
        //$variable  = route('test');
        //return redirect('https://student.labranet.jamk.fi/~ara/phpmatsku/02/nayta-http-data.php?nimi=Rantala & pojat');
        return redirect('customers');
        dd($variable);
    }
    
    public function search() {
        request()->validate([
            'hakusanat' => ['required', 'regex:/^[a-zA-Z]{5,30}$/'],
            ],
            ['hakusanat.regex' => 'Laravel: Vain [a-zA-Z]{5,30} ok']
            );
        /*$search = request('haku');
        $engine = request('engine'); */
    }
}
