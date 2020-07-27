<?php

namespace App\Http\Controllers;

use App\Wallet;
use Illuminate\Http\Request;
use App\Services\ApiService ;

//use Validator;

class WalletsController extends Controller
{
	
 protected $api_service;

    public function __construct(ApiService $api_service)
    {
    	$this->api_service = $api_service;
		 //require auth to access
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
	 $wallets = $this->api_service->all('wallets/');
	// $wallets = (array)json_encode($wallets);
	//$wallets=$wallets->wallets ;
	 if(isset($wallets->wallets)){
		 $wallets=$wallets->wallets ;
	 }   
	else{
	  return  back()->withErrors('Error occured !');
	}

 	 return view('wallets.index', ['wallets'=>$wallets  ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
	  return view('wallets.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
	 	// validation des champs	   
	  $request->validate([
    'currency' => 'required|min:2',
    'corresp_province' => 'max:2',
    'holderBank_province' => 'max:2',
    'holder_name' => 'required|min:2',
    'holder_province' => 'max:2',
    'holder_type' => 'required|max:10|min:9',
    'holder_country' => 'required|max:255|min:2',
		]);
		   
		
$correspaddress=	array	(
      "street"=> $request->get('corresp_street'),
      "postCode"=> $request->get('corresp_postCode'),
      "city"=> $request->get('corresp_city'),
      "province"=> $request->get('corresp_province'),
      "country"=> $request->get('corresp_country')
    );	
		
	$correspondentBank =array	(
    "bic"=> $request->get('corresp_bic'), 
    "name"=> $request->get('corresp_name'),
    "address"=> $correspaddress
);
	
		
	$holderbankaddress=	array	(
      "street"=>  $request->get('holderBank_street'),
      "postCode"=>  $request->get('holderBank_postCode'),
      "city"=>  $request->get('holderBank_city'),
      "province"=>  $request->get('holderBank_province'),
      "country"=> $request->get('holderBank_country') 
    );	
		
	$holderbank= array	(
    "bic"=>  $request->get('holderBank_bic') ,
    "clearingCodeType"=>$request->get('clearingCodeType'),
    "clearingCode"=> $request->get('clearingCode'),
    "name"=>  $request->get('holderBank_name'),
    "address"=> $holderbankaddress
);	
	
	$holderaddress = array(
      "street"=> $request->get('holder_street') ,
      "postCode"=> $request->get('holder_postCode') ,
      "city"=> $request->get('holder_city') ,
      "province"=> $request->get('holder_province') ,
      "country"=> $request->get('holder_country')  
   );	
		
		
	$holder= array (	 
    "name"=> $request->get('holder_name') ,
    "type"=>$request->get('holder_type') ,
    "address"=> $holderaddress
 );
		
		
 $wallet=array (
  "id"=> $request->get('id'),
  "currency"=>$request->get('currency'),
  "tag"=> $request->get('tag'),
  "status"=> $request->get('status'),
  "accountNumber"=> $request->get('accountNumber'),
  "correspondentBank"=> $correspondentBank ,
  "holderBank" => $holderbank,
  "holder"=> $holder
);
 	$result=	$this->api_service->post_request('wallets/',$wallet);
  
	if( intval($result['code']) >=200 && intval($result['code']) < 400)	
	{ 
		return  back()->with('success', 'Wallet Submitted ! Response code : '.$result['code'] );

	}else{
	  return  back()->withErrors(' Wallet submission failed ! Error Code : '.$result['code'].' - Message : '.$result['body']);
	}


}
	
    /**
     * Display the specified resource.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$wallet = $this->api_service->findById('wallets/-',$id);
 		  if( isset($wallet->wallet))
		{$wallet = $wallet->wallet;}
		else{
			// leave with error message
 		 return  back()->withErrors(' Wallet Not Found ! ');
		}
		return view('wallets.show', ['wallet'=>$wallet]);

    }

	
	   public function showBalance( )
    {
		 $wallets = $this->api_service->all('wallets/');
 	  if(isset($wallets->wallets)){$wallets=$wallets->wallets ;}   

	 return view('wallets.balance', ['wallets'=>$wallets ]);

	}
	
	   public function balance(Request $request)
    {
		$walletid = $request->get('wallet');	   
		$date = $request->get('date');
		   
 	// validation des champs	   
	  $request->validate([
    'wallet' => 'required',
    'date' => 'required|max:10|min:10',
		]);
		   
	 
		$wallet=null;   
		if (isset ($walletid) && isset($date) ){	   
    	$wallet = $this->api_service->endpointRequest('wallets/-'.$walletid.'/balance/'.$date);
        // check is the result is valid
		  if( isset($wallet->wallet))
		{$wallet = $wallet->wallet;}
		else{
			// leave with error message
 		 return  back()->withErrors(' Balance Not Found ! ');
		}
			 
		}
		 $wallets = $this->api_service->all('wallets/');
 		if(isset($wallets->wallets)){$wallets=$wallets->wallets ;}   
		   
		return view('wallets.balance', ['wallet'=>$wallet,'wallets'=>$wallets,'date'=>$date]);

    }
	
	

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
}
