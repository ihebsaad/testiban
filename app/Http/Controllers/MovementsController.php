<?php

namespace App\Http\Controllers;

use App\Movement;
use Illuminate\Http\Request;
use App\Services\ApiService ;

class MovementsController extends Controller
{
	
	
 protected $api_service;

    public function __construct(ApiService $api_service)
    {
    	$this->api_service = $api_service;
		// require auth to access
		$this->middleware('auth');

    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
 	$movements = $this->api_service->all('financialmovements/');
		if(isset($movements->financialMovements)){
	 $movements=$movements->financialMovements ;	
		 }   
	else{
	  return  back()->withErrors('Error occured !');
	}
	 return view('movements.index', ['movements'=>$movements]);
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$movement = $this->api_service->findById('financialmovements/-',$id);
 		
		if( isset($movement->financialMovement))
		{$movement = $movement->financialMovement;}
		else{
			// leave with error message
 		 return  back()->withErrors(' Financial Movement Not Found ! ');
		}
		return view('movements.show', ['movement'=>$movement]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function edit(Movement $movement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movement $movement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movement  $movement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movement $movement)
    {
        //
    }
}
