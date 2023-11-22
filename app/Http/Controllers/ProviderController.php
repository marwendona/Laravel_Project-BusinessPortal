<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Region;
use App\Models\User;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers=provider::all();//pour créer une liste déroulante categorie
        return view('provider.index',compact('providers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Activitys=Activity::all();//pour créer une liste déroulante categorie
        $Regions=Region::all();//pour créer une liste déroulante categorie

        //dd($categories[0]);
        return view('provider.create',compact('Activitys','Regions',));
   
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'nom' => 'required|unique:products|min:3|max:150',
        $request->validate([
            'nom_provider'=> 'required|min:3|max:50',
            'prenom_provider'=> 'required|min:3|max:50',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
            'phone_number' => 'required|numeric|min:10000000|max:99999999',
            'Region_id' => 'required|numeric',
            'Activity_id' => 'required|numeric',
            'User_id' => 'required|numeric',
            ]);

        $inputs=$request->all();
        //dd($inputs);

        
        //traitement de la photo du produit
        if($photo=$request->file('photo')){
            $newname=time().'.'.$photo->getClientOriginalExtension();
            $photo->move('images/',$newname);
            $inputs['photo']=$newname;
        }
        //dd($inputs);
        provider::create($inputs);
        return redirect()->route('Provider.index')
        ->with('success','Un fouenisseur est enregistré avec succes!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(int $user_id)
    {
        $Activitys=Activity::all();//pour créer une liste déroulante categorie
        $Regions=Region::all();//pour créer une liste déroulante categorie
        $provider = Provider::find($user_id);
        return view('Provider.edit',compact('provider','Activitys','Regions'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $provider_id)
    {
        //|image|mimes:jpeg,png,jpg,gif|max:2048
        $request->validate([
            'nom_provider'=> 'required|min:3|max:50',
            'prenom_provider'=> 'required|min:3|max:50',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'description' => 'required',
            'phone_number' => 'required|numeric|min:10000000|max:99999999',
            'Region_id' => 'required|numeric',
            'Activity_id' => 'required|numeric',
            ]);

        $inputs=$request->all();
        // //dd($inputs);

        
        //traitement de la photo du produit
        if($photo=$request->file('photo')){
            $newname=time().'.'.$photo->getClientOriginalExtension();
            $photo->move('images/',$newname);
            $inputs['photo']=$newname;
        }
        // //dd($inputs);
        Provider::find($provider_id)->update($inputs);
        //provider::create($inputs);
        return redirect()->route('Provider.index')
        ->with('success',  "Modifications enregistrées");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        //
    }
   











     /* $request->validate([
            'Activity_id' => 'required|numeric',
            'Region_id' => 'required|numeric'
            ]);
           
    public function affiche(Request $request)
    {
      
        
        $inputs=$request->all();
        //dd($inputs);
        //$providers=Provider::where('votes', '>', 100);
        $providers=Provider::all();
        return view('site.affiche',compact('providers'));

    }*/

    /*
    public function entrercompte(Request $request)
    {
      
        return view('entrercompte');

    }
    public function creationProvider10(Request $request)
    {
        $inputs=$request->all();
        //dd($inputs);
        
        $Regions=array( "_token" => $request->input('_token') , "nom_region"=>$request->input('Region'));
        $Activitys=array( "_token" => $request->input('_token') , "nom_activity"=>$request->input('Activity'));

        Region::create($Regions);
        Activity::create($Activitys);
        //dd( $Activitys);
        return view('provider.creat',compact('inputs'));
    }*/

                    /* //exemple bech nifhim
                        $inputs=$request->all();

                        dd($inputs);
                        //$Activitys=$request->input('Activity');  
                        $Regions=$request->input('Region');
                        //Region::create($Activitys);
                        //Activity::create($Regions);
                        dd( $Activitys);
                    */
}
