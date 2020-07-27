@extends('layouts.fulllayout')

@section('content')
<div class="container">
 	<h2>Show Wallet</h2><br>
	<legend>Wallet Details</legend>
	<fieldset>
			  <div class="row">
                <div class="form-group col-xs-12 col-md-3">
                    <label for="id">ID:</label>
                    <input id="id" type="text" class="form-control" name="id"  value="<?php  echo $wallet->id; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-3">
                    <label for="currency">Currency:</label>
                    <input id="currency" type="text" class="form-control" name="currency" value="<?php  echo $wallet->currency; ?>"  />
                </div>
				  
				         <div class="form-group col-xs-12 col-md-6">
                    <label for="tag">TAG:</label>
                    <input id="tag" type="text" class="form-control" name="tag" value="<?php  echo $wallet->tag; ?>"  />
                </div>
              </div>
		
			  <div class="row">
         
				<div class="form-group col-xs-12 col-md-6">
                    <label for="status">Status:</label>
                    <input id="status" type="text" class="form-control" name="status" value="<?php  echo $wallet->status; ?>" />
                </div>	  
				  
				  <div class="form-group col-xs-12 col-md-6">
                    <label for="accountNumber">Account Number:</label>
                    <input id="accountNumber" type="text" class="form-control" name="accountNumber"  value="<?php  echo $wallet->accountNumber; ?>" />
                </div>
				  
              </div>
 
            
				 
 	</fieldset>
	<legend>Correspondent Bank Details</legend>
	
	<fieldset>
  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="correspondentBank_id">Bic:</label>
                    <input id="correspondentBank_id" type="text" class="form-control" name="correspondentBank_id" value="<?php  echo $wallet->correspondentBank->bic; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="correspondentBank_name">Name:</label>
                    <input id="correspondentBank_name" type="text" class="form-control" name="correspondentBank_name" value="<?php  echo $wallet->correspondentBank->name; ?>"  />
                </div>	  
              </div>
  <div class="row">
	<div class="form-group col-xs-12 col-md-8">
                    <label for="correspondentBank_street">Street:</label>
                    <input id="correspondentBank_street" type="text" class="form-control" name="correspondentBank_street" value="<?php  echo $wallet->correspondentBank->address->street; ?>"   />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="correspondentBank_postCode">Post Code:</label>
                    <input id="correspondentBank_postCode" type="text" class="form-control" name="correspondentBank_postCode" value="<?php  echo $wallet->correspondentBank->address->postCode; ?>"  />
     </div>	
	<div class="form-group col-xs-12 col-md-4">
                    <label for="correspondentBank_city">City:</label>
                    <input id="correspondentBank_city" type="text" class="form-control" name="correspondentBank_city" value="<?php  echo   $wallet->correspondentBank->address->city; ?>"  />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="correspondentBank_province">Province:</label>
                    <input id="correspondentBank_province" type="text" class="form-control" name="correspondentBank_province" value="<?php  echo    $wallet->correspondentBank->address->province;  ?>"   />
     </div>		  
	<div class="form-group col-xs-12 col-md-4">
                    <label for="correspondentBank_country">Country:</label>
                    <input id="correspondentBank_country" type="text" class="form-control" name="correspondentBank_country"  value="<?php  echo $wallet->status; ?>"  />
     </div>		  
  </div>
		
	</fieldset>

	<legend>Holder Bank Details</legend>
	
	<fieldset>
		  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="holderBank_bic">Bic:</label>
                    <input id="holderBank_bic" type="text" class="form-control" name="holderBank_bic" value="<?php  echo $wallet->holderBank->bic; ?>"   />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="holderBank_name">Name:</label>
                    <input id="holderBank_name" type="text" class="form-control" name="holderBank_name" value="<?php  echo $wallet->holderBank->name; ?>"   />
                </div>	
         </div>	
			  <div class="row">	
				<div class="form-group col-xs-12 col-md-6">
                    <label for="clearingCodeType">Clearing Code Type:</label>
                    <input id="clearingCodeType" type="text" class="form-control" name="clearingCodeType" value="<?php  echo $wallet->holderBank->clearingCodeType;  ?>"  />
                </div>	 
				<div class="form-group col-xs-12 col-md-6">
                    <label for="clearingCode">Clearing Code:</label>
                    <input id="clearingCode" type="text" class="form-control" name="holderBank_clearingCode" value="<?php  echo $wallet->holderBank->clearingCodeType;  ?>"  />
                </div>	  
              </div>
  <div class="row">
	<div class="form-group col-xs-12 col-md-8">
                    <label for="holderBank_street">Street:</label>
                    <input id="holderBank_street" type="text" class="form-control" name="holderBank_street"  value="<?php   echo $wallet->holderBank->address->street;  ?>"   />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holderBank_postCode">Post Code:</label>
                    <input id="holderBank_postCode" type="text" class="form-control" name="holderBank_postCode"  value="<?php echo $wallet->holderBank->address->postCode; ?>"   />
     </div>	
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holderBank_city">City:</label>
                    <input id="holderBank_city" type="text" class="form-control" name="holderBank_city"  value="<?php echo $wallet->holderBank->address->city; ?>"  />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holderBank_province">Province:</label>
                    <input id="holderBank_province" type="text" class="form-control" name="holderBank_province" value="<?php echo $wallet->holderBank->address->province; ?>"  />
     </div>		  
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holderBank_country">Country:</label>
                    <input id="holderBank_country" type="text" class="form-control" name="holderBank_country" value="<?php  echo $wallet->holderBank->address->country; ?>"  />
     </div>		  
  </div>
		
	</fieldset>	

	
	<legend>Holder Information</legend>
	
	<fieldset>
		  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="holder_name">Name:</label>
                    <input id="holder_name" type="text" class="form-control" name="holder_name" value="<?php  echo $wallet->holder->name; ?>"   />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="holder_type">Type:</label>
                    <input id="holder_type" type="text" class="form-control" name="holder_type" value="<?php  echo $wallet->holder->type; ?>"   />
                </div>	
         </div>	
		 
  <div class="row">
	<div class="form-group col-xs-12 col-md-8">
                    <label for="holder_street">Street:</label>
                    <input id="holder_street" type="text" class="form-control" name="holder_street"  value="<?php   echo $wallet->holder->address->street;  ?>"   />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holder_postCode">Post Code:</label>
                    <input id="holder_postCode" type="text" class="form-control" name="holder_postCode"  value="<?php echo $wallet->holder->address->postCode; ?>"   />
     </div>	
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holder_city">City:</label>
                    <input id="holder_city" type="text" class="form-control" name="holder_city"  value="<?php echo $wallet->holder->address->city; ?>"  />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holder_province">Province:</label>
                    <input id="holder_province" type="text" class="form-control" name="holder_province" value="<?php echo $wallet->holder->address->province; ?>"  />
     </div>		  
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holder_country">Country:</label>
                    <input id="holder_country" type="text" class="form-control" name="holder_country" value="<?php  echo $wallet->holder->address->country; ?>"  />
     </div>		  
  </div>
		
	</fieldset>	
	
</div>
@endsection('content')