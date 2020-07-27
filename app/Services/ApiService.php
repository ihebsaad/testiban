<?php
namespace App\Services;

use GuzzleHttp\Client;

class ApiService
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function all($url)
	{
		return $this->endpointRequest($url);
	}

	public function findById($url,$id)
	{
		return $this->endpointRequest($url.$id);
	}

	public function endpointRequest($url)
	{
		try {
			$response = $this->client->request('GET', $url);
		} catch (\Exception $e) {
            return $e->getMessage();
		}

		return $this->response_handler($response->getBody()->getContents());
	}

	public function response_handler($response)
	{
		if ($response) {
			return json_decode($response);
		}
		
		return [];
	}
	
	public function post_request($url,$data)
	{	
		 
$response = $this->client->request('POST', $url, ['form_params' => [$data],
	'http_errors' => false
	]);

		$result= array('code'=> $response->getStatusCode() ,'body'=>$response->getBody());	
 	// send result code & result body
		return $result	;
	 
		
	}
	
	
	
}