<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $car = Car::find($id);
        $car->Brand = $request->get('Brand');
        $car->Model = $request->get('Model');
        $car->save();
        return redirect()->intended('/edit')->with('success','Data updated');
    }
/*
    public function show(Request $request, $id)
    {

    }
    public function create()
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

    public function destroy(  $id)
    {//$id->delete();
            $car = Car::find($id);
            $car->delete();
            return redirect()->intended('admin/data')->with('success','Data deleted');
    }


}
