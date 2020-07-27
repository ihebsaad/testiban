@extends('layouts.fulllayout')

@section('content')
<div class="container">
 <h2>Submit a new wallet</h2><br>
	
<form   action="{{action('WalletsController@store')}}"  >	
	<legend>Wallet Details</legend>
	<fieldset>
			  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="id">ID:</label>
                    <input id="id" type="text" class="form-control" name="id"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="currency">Currency:</label>
                    <input id="currency" type="text" class="form-control" name="currency"  required  />
                </div>	  
              </div>
		
			  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="tag">TAG:</label>
                    <input id="tag" type="text" class="form-control" name="tag"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="status">Status:</label>
                    <input id="status" type="text" class="form-control" name="status"  />
                </div>	  
              </div>
  
			 <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="accountNumber">Account Number:</label>
                    <input id="accountNumber" type="text" class="form-control" name="accountNumber"  />
                </div>
				 
              </div>		
	</fieldset>
	<legend>Correspondent Bank Details</legend>
	
	<fieldset>
  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="corresp_bic">Bic:</label>
                    <input id="corresp_bic" type="text" class="form-control" name="corresp_bic"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="corresp_name">Name:</label>
                    <input id="corresp_name" type="text" class="form-control" name="corresp_name"  />
                </div>	  
              </div>
  <div class="row">
	<div class="form-group col-xs-12 col-md-8">
                    <label for="corresp_street">Street:</label>
                    <input id="corresp_street" type="text" class="form-control" name="corresp_street"  />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="corresp_postCode">Post Code:</label>
                    <input id="corresp_postCode" type="text" class="form-control" name="corresp_postCode"  />
     </div>	
	<div class="form-group col-xs-12 col-md-4">
                    <label for="corresp_city">City:</label>
                    <input id="corresp_city" type="text" class="form-control" name="corresp_city"  />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="corresp_province">Province:</label>
                    <input id="corresp_province" type="text" class="form-control" name="corresp_province"  />
     </div>		  
	<div class="form-group col-xs-12 col-md-4">
                    <label for="corresp_country">Country:</label>
                    <input id="corresp_country" type="text" class="form-control" name="corresp_country"  />
     </div>		  
  </div>
		
	</fieldset>

		<legend>Holder Bank Details</legend>

	<fieldset>
		  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="holderBank_bic">Bic:</label>
                    <input id="holderBank_bic" type="text" class="form-control" name="holderBank_bic"   />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="holderBank_name">Name:</label>
                    <input id="holderBank_name" type="text" class="form-control" name="holderBank_name"   />
                </div>	
         </div>	
			  <div class="row">	
				<div class="form-group col-xs-12 col-md-6">
                    <label for="clearingCodeType">Clearing Code Type:</label>
                    <input id="clearingCodeType" type="text" class="form-control" name="clearingCodeType"  />
                </div>	 
				<div class="form-group col-xs-12 col-md-6">
                    <label for="clearingCode">Clearing Code:</label>
                    <input id="clearingCode" type="text" class="form-control" name="clearingCode"  />
                </div>	  
              </div>
  <div class="row">
	<div class="form-group col-xs-12 col-md-8">
                    <label for="holderBank_street">Street:</label>
                    <input id="holderBank_street" type="text" class="form-control" name="holderBank_street"    />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holderBank_postCode">Post Code:</label>
                    <input id="holderBank_postCode" type="text" class="form-control" name="holderBank_postCode"   />
     </div>	
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holderBank_city">City:</label>
                    <input id="holderBank_city" type="text" class="form-control" name="holderBank_city"    />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holderBank_province">Province:</label>
                    <input id="holderBank_province" type="text" class="form-control" name="holderBank_province"    />
     </div>		  
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holderBank_country">Country:</label>
                    <input id="holderBank_country" type="text" class="form-control" name="holderBank_country"   />
     </div>		  
  </div>
		
	</fieldset>	

	<legend>Holder Information</legend>
	
	<fieldset>
		  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="holder_name">Name:</label>
                    <input id="holder_name" type="text" class="form-control" name="holder_name"  required   />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="holder_type">Type:</label>
                    <select id="holder_type"   class="form-control" name="holder_type"  required  >
						<option></option>
						<option value="Individual">Individual </option>
						<option  value="Corporate">Corporate</option>
					</select>
                </div>	
         </div>	
		 
  <div class="row">
	<div class="form-group col-xs-12 col-md-8">
                    <label for="holder_street">Street:</label>
                    <input id="holder_street" type="text" class="form-control" name="holder_street"    />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holder_postCode">Post Code:</label>
                    <input id="holder_postCode" type="text" class="form-control" name="holder_postCode"    />
     </div>	
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holder_city">City:</label>
                    <input id="holder_city" type="text" class="form-control" name="holder_city"    />
     </div>	 
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holder_province">Province:</label>
                    <input id="holder_province" type="text" class="form-control" name="holder_province"    />
     </div>		  
	<div class="form-group col-xs-12 col-md-4">
                    <label for="holder_country">Country:</label>
                    <input id="holder_country" type="text" class="form-control" name="holder_country"  required  />
     </div>		  
  </div>
		
	</fieldset>	
	
 
	 <input   type="submit" class="form-control btn btn-success"  value="Submit" style="margin-top:20px;margin-top:30px;width:250px" />

</form>	
</div>
@endsection('content')