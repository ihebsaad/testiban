@extends('layouts.fulllayout')

@section('content')
<div class="container">
	<h2>Show Financial Movement</h2><br>
	
	<legend>Financial Movement Details</legend>
	<fieldset>
			  <div class="row">
                <div class="form-group col-xs-12 col-md-4">
                    <label for="id">ID:</label>
                    <input id="id" type="text" class="form-control" name="id"  value="<?php  echo $movement->id; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-4">
                    <label for="bookingDate">booking Date:</label>
                    <input id="bookingDate" type="text" class="form-control" name="bookingDate" value="<?php  echo $movement->bookingDate; ?>"  />
                </div>	  
				<div class="form-group col-xs-12 col-md-4">
                    <label for="valueDate">value Date:</label>
                    <input id="valueDate" type="text" class="form-control" name="valueDate" value="<?php  echo $movement->valueDate; ?>"  />
                </div>				  
              </div>
		
			  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="orderingAccountNumber">Ordering Account Number:</label>
                    <input id="orderingAccountNumber" type="text" class="form-control" name="orderingAccountNumber" value="<?php  echo $movement->orderingAccountNumber; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="orderingCustomer">Ordering Customer:</label>
                    <input id="orderingCustomer" type="text" class="form-control" name="orderingCustomer" value="<?php  echo $movement->orderingCustomer; ?>" />
                </div>	  
              </div>
 			  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="orderingInstitution">Ordering Institution:</label>
                    <input id="orderingInstitution" type="text" class="form-control" name="orderingInstitution" value="<?php  echo $movement->orderingInstitution; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-3">
                    <label for="orderingAmount">Ordering Amount value:</label>
                    <input id="orderingAmount" type="text" class="form-control" name="orderingAmount" value="<?php  echo $movement->orderingAmount->value; ?>" />
                 </div>	  
				<div class="form-group col-xs-12 col-md-3">
                    <label for="orderingAmount_currency">Ordering Amount Currency:</label>
                    <input id="orderingAmount_currency" type="text" class="form-control" name="orderingAmount_currency" value="<?php  echo $movement->orderingAmount->currency; ?>" />
                 </div>					  
              </div>
		 		
	</fieldset>
	<legend>Beneficiary Details</legend>
	
	<fieldset>
   
  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="beneficiaryAccountNumber">Beneficiary Account Number:</label>
                    <input id="beneficiaryAccountNumber" type="text" class="form-control" name="beneficiaryAccountNumber" value="<?php  echo $movement->beneficiaryAccountNumber; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="beneficiaryCustomer">Beneficiary Customer:</label>
                    <input id="beneficiaryCustomer" type="text" class="form-control" name="beneficiaryCustomer" value="<?php  echo $movement->beneficiaryCustomer; ?>" />
                </div>	  
              </div>
 			  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="beneficiaryInstitution">Beneficiary Institution:</label>
                    <input id="beneficiaryInstitution" type="text" class="form-control" name="beneficiaryInstitution" value="<?php  echo $movement->beneficiaryInstitution; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-3">
                    <label for="beneficiaryAmount">Beneficiary Amount value:</label>
                    <input id="beneficiaryAmount" type="text" class="form-control" name="beneficiaryAmount" value="<?php  echo $movement->beneficiaryAmount->value; ?>" />
                 </div>	  
				<div class="form-group col-xs-12 col-md-3">
                    <label for="beneficiaryAmount_currency">Beneficiary Amount Currency:</label>
                    <input id="beneficiaryAmount_currency" type="text" class="form-control" name="beneficiaryAmount_currency" value="<?php  echo $movement->beneficiaryAmount->currency; ?>" />
                 </div>					  
              </div>		
	</fieldset>

	<legend>Other Details</legend>
	
	<fieldset>
		  <div class="row">
                <div class="form-group col-xs-12 col-md-4">
                    <label for="remittanceInformation">Remittance Information:</label>
                    <input id="remittanceInformation" type="text" class="form-control" name="remittanceInformation" value="<?php  echo $movement->remittanceInformation; ?>"   />
                </div>
				<div class="form-group col-xs-12 col-md-4">
                    <label for="chargesDetails"> Charges Details :</label>
                    <input id="chargesDetails" type="text" class="form-control" name="chargesDetails" value="<?php  echo $movement->chargesDetails; ?>"   />
                </div>	
			  				<div class="form-group col-xs-12 col-md-4">
                    <label for="exchangeRate"> Exchange Rate :</label>
                    <input id="exchangeRate" type="text" class="form-control" name="exchangeRate" value="<?php  echo $movement->exchangeRate; ?>"   />
                </div>
         </div>	
			  <div class="row">	
				<div class="form-group col-xs-12 col-md-4">
                    <label for="typeLabel">Type Label  :</label>
                    <input id="typeLabel" type="text" class="form-control" name="typeLabel" value="<?php  echo $movement->typeLabel;  ?>"  />
                </div>	 
				<div class="form-group col-xs-12 col-md-4">
                    <label for="internalReference">Internal Reference:</label>
                    <input id="internalReference" type="text" class="form-control" name="internalReference" value="<?php  echo $movement->internalReference;  ?>"  />
                </div>
				  
			 <div class="form-group col-xs-12 col-md-4">
                    <label for="description">Description:</label>
                    <input id="description" type="text" class="form-control" name="description" value="<?php  echo $movement->description;  ?>"  />
                </div>
              </div>
 
		
	</fieldset>	
<br>	
</div>
@endsection('content')