<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use App\Mail\NewCar;
use App\Car;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


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
        $user = User::All("email");
        Mail::to($user)->send(new NewCar());
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

    public function show( $id)
    {
        return view('car', ['car' => Car::findOrFail($id)]);
    }


    public function destroy($id)
    {
            $car = Car::find($id);
            $car->delete();
            return redirect()->intended('admin/data')->with('success','Data deleted');
    }
    public function addReview(Request $request){

        $user = Auth::user()->id;
        $user_name = Auth::user()->name;
        DB::table('reviews')->insert(
      ['user_id' => $user,
      'user_name' => $user_name,
        'product_id' => $request->product_id,
        'titlu' => $request->titlu ,
      'comment' => $request->comment,
    'created_at' => date("Y-m-d H:i:s"),'updated_at' =>date("Y-m-d H:i:s")]
        );
        return back();
      }


      public function compare(Request $request )
      {    $cara=$request->car ;
           $carb=$request->car1;
        $car['1']=Car::findOrFail($cara);
        $car['2']=Car::findOrFail($carb);
          return view('comparison',['car'=>$car]);
      }

}
