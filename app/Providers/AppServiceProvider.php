<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use Exception;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		// Get API parameters from .env config file
		$baseUrl = env('API_BASE');
		$username = env('API_USERNAME');
		$password = env('API_PASSWORD');
		$params=[ 'username'=>$username,'password'=>$password];
 		if($baseUrl ==null || $username ==null || $password = null )
		{  abort(response()->json(['msg' => 'Unauthorized, API Parameters are missing..'], 401));}
		
		// call function getHeaders to make X-WSSE Auth
		$headers= $this->getHeaders($params);
		
		// Design Pattern Singleton : to use one instance of itself
        $this->app->singleton('GuzzleHttp\Client', function($api) use ($baseUrl,$headers) {
            return new Client([
                'base_uri' => $baseUrl,
                'headers' => $headers,
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
	
	
private function getHeaders($params)
{
    
 // $Date = new \DateTime();
  //  $date = $Date->format('Y-m-d\TH:i:s\Z');
	$username=$params['username'];
	$password=$params['password'];
  $date = gmdate('Y-m-d').'T'.gmdate('H:i:s').'Z';
	
$nonce="";$nonce64; $digest;$header;
$chars = "0123456789abcdef";
 for ($i = 0; $i < 32; $i++) { $nonce .= $chars[rand(0, 15)]; }
 	
$nonce64 = base64_encode($nonce) ;
$digest = base64_encode(sha1($nonce.$date.$password, true));
 	
   $XWSSE= 'UsernameToken Username="'.$username.'", PasswordDigest="'.$digest.'", Nonce="'.$nonce64.'", Created="'.$date.'"' ;
  
  $header =array('X-WSSE'=>$XWSSE,'Content-Type'=>'application/json')	;
 return $header  ;	
  
	 
	 
	 
	}
	
	
	
}
