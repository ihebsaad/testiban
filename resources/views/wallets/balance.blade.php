@extends('layouts.fulllayout')
<style>
	.select2-selection {height:38px!important;padding-top:4px;}
</style>

@section('content')
<div class="container"  style="min-height:480px">
 	
	<h2>Wallet Balance By Date</h2><br>
	 <form    action="{{action('WalletsController@balance')}}" >
	<div class="row">

 <div class="form-group col-xs-12 col-md-4">
<label for="date">Select Wallet ID:</label>
    <select  id="wallet"  class="form-control" name="wallet"  required   >
		<option></option>
		<?php foreach($wallets as $w)
			{
				echo '<option  value="'.$w->id.'">ID : '.$w->id.' | Tag: '.$w->tag.'  </option>';
			}
		?>
	</select>
  </div>
		
  <div class="form-group col-xs-12 col-md-3">
<label for="date">Balance Date:</label>
    <input id="date"  autocomplete="off" placeholder="yyyy-mm-dd" class="form-control" name="date" required value="" format='yyyy-mm-dd' />
  </div>
	
 <div class="form-group col-xs-12 col-md-3">
   <label></label> 
	 <input  type="submit" class="form-control btn btn-success"  value="Find" style="margin-top:20px" />
  </div>
	 
</div>
	  </form>
<br>
	
	<?php if (isset($date)){ ?>
	<fieldset>
			  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="id">Wallet ID:</label>
                    <input id="id" type="text" class="form-control" name="id"  value="<?php  echo $wallet->id; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="currency">Balance Closing Date:</label>
                    <input id="currency" type="text" class="form-control" name="currency" value="<?php  echo $wallet->balance->closingDate; ?>"  />
                </div>	
			 </div>
  
			  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="bookingAmount">Booking Amount Value:</label>
                    <input id="bookingAmount" type="text" class="form-control" name="bookingAmount"  value="<?php  echo $wallet->balance->bookingAmount->value; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="bookingAmount_currency">Booking Amount Currency:</label>
                    <input id="bookingAmount_currency" type="text" class="form-control" name="bookingAmount_currency" value="<?php  echo  $wallet->balance->bookingAmount->currency ; ?>"  />
                </div>
	          </div>
		  
			  <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="valueAmount">Value Amount :</label>
                    <input id="valueAmount" type="text" class="form-control" name="valueAmount"  value="<?php  echo $wallet->balance->valueAmount->value; ?>"  />
                </div>
				<div class="form-group col-xs-12 col-md-6">
                    <label for="valueAmount_currency">Value Amount Currency:</label>
                    <input id="valueAmount_currency" type="text" class="form-control" name="valueAmount_currency" value="<?php  echo $wallet->balance->valueAmount->currency; ?>"  />
                </div>				  
              </div>
		
  
	</fieldset>
	
 <?php }?>

</div>
@endsection('content')

	
 @section('footer_scripts')

 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<!----- Datepicker  -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
<script>
$(function () {
	
	$('#wallet').select2();

     $('#date').datepicker({
 	 
            buttonImage: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAATCAYAAAB2pebxAAABGUlEQVQ4jc2UP06EQBjFfyCN3ZR2yxHwBGBCYUIhN1hqGrWj03KsiM3Y7p7AI8CeQI/ATbBgiE+gMlvsS8jM+97jy5s/mQCFszFQAQN1c2AJZzMgA3rqpgcYx5FQDAb4Ah6AFmdfNxp0QAp0OJvMUii2BDDUzS3w7s2KOcGd5+UsRDhbAo+AWfyU4GwnPAYG4XucTYOPt1PkG2SsYTbq2iT2X3ZFkVeeTChyA9wDN5uNi/x62TzaMD5t1DTdy7rsbPfnJNan0i24ejOcHUPOgLM0CSTuyY+pzAH2wFG46jugupw9mZczSORl/BZ4Fq56ArTzPYn5vUA6h/XNVX03DZe0J59Maxsk7iCeBPgWrroB4sA/LiX/R/8DOHhi5y8Apx4AAAAASUVORK5CYII=",

            firstDay: 1,
            dateFormat: "yy-mm-dd",
		    maxDate: '0'
                });
});

</script>
@endsection('footer_scripts')
