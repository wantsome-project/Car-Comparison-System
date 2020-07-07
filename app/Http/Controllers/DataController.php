<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use App\Mail\NewCar;
use App\Car;
class DataController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index()
    {
       $car = Car::all()->toArray();
       return view('data',compact('car'));
    }
    public function edit(Request $request, $id)
    {
        $car = Car::find($id);
        return view('edit',compact('car','id'));

    }
    public function update(Request $request,$id)
    {   $user = User::All("email");
         Mail::to($user)->send(new NewCar());
        $this->validate($request,[
            'Brand'  =>  'required',
            'Model'  =>  'required',
            'Motorizare'  =>  'required',
            'Locuri'  =>  'required',
            'Consum'  =>  'required',
            'Transmisie'  =>  'required',
            'Putere'  =>  'required',
            'An_aparitie'  =>  'required',
            'Pret_de_baza'  =>  'required',
            'Combustibil'  =>  'required',
            'Caroserie'  =>  'required',
            'Grad_de_poluare'  =>  'required',
            'Tractiune'  =>  'required',
            'Dotari_standard'  =>  'required',
            'iMAGE'  =>  'required'
        ]);
        $car = Car::find($id);
        $car->Brand = $request->get('Brand');
        $car->Model = $request->get('Model');
        $car->Motorizare = $request->get('Motorizare');
        $car->Locuri = $request->get('Locuri');
        $car->Consum = $request->get('Consum');
        $car->Transmisie = $request->get('Transmisie');
        $car->Putere = $request->get('Putere');
        $car->An_aparitie = $request->get('An_aparitie');
        $car->Pret_de_baza = $request->get('Pret_de_baza');
        $car->Combustibil = $request->get('Combustibil');
        $car->Caroserie = $request->get('Caroserie');
        $car->Grad_de_poluare = $request->get('Grad_de_poluare');
        $car->Tractiune = $request->get('Tractiune');
        $car->Dotari_standard = $request->get('Dotari_standard');
        $car->iMAGE = $request->get('iMAGE');
        $car->save();
        return redirect()->intended('admin/data/')->with('success','Data updated');
    }

    public function show(Request $request, $id)
    {
        return view('car', ['car' => Car::findOrFail($id)]);
    }
    /*public function create()
    {
        return view('add',);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'Brand'  =>  'required',
            'Model'  =>  'required',
            'Motorizare'  =>  'required',
            'Locuri'  =>  'required',
            'Consum'  =>  'required',
            'Transmisie'  =>  'required',
            'Putere'  =>  'required',
            'An_aparitie'  =>  'required',
            'Pret_de_baza'  =>  'required',
            'Combustibil'  =>  'required',
            'Caroserie'  =>  'required',
            'Grad_de_poluare'  =>  'required',
            'Tractiune'  =>  'required',
            'Dotari_standard'  =>  'required',
            'iMAGE'  =>  'required'
        ]);
        $car = new Car([
            'Brand'  =>  $request->get('Brand'),
            'Model'  =>  $request->get('Model'),
            'Motorizare'  =>  $request->get('Motorizare'),
            'Locuri'  =>  $request->get('Locuri'),
            'Consum'  =>  $request->get('Consum'),
            'Transmisie'  =>  $request->get('Transmisie'),
            'Putere'  =>  $request->get('Putere'),
            'An_aparitie'  =>  $request->get('An_aparitie'),
            'Pret_de_baza'  =>  $request->get('Pret_de_baza'),
            'Combustibil'  =>  $request->get('Combustibil'),
            'Caroserie'  =>  $request->get('Caroserie'),
            'Grad_de_poluare'  =>  $request->get('Grad_de_poluare'),
            'Tractiune'  =>  $request->get('Tractiune'),
            'Dotari_standard'  =>  $request->get('Dotari_standard'),
            'iMAGE'  =>  $request->get('iMAGE')
        ]);
        $car->save();
        return redirect()->intended('/add')->with('success','Data added successfully');
    }*/

    public function destroy($id)
    {
            $car = Car::find($id);
            $car->delete();
            return redirect()->intended('admin/data')->with('success','Data deleted');
    }


}
