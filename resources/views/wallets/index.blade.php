@extends('layouts.fulllayout')
  
 <style>.searchfield{width:100px;}
		 #mytable{width:100%!important;margin-top:10px !important;}
 </style> 
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
   
@section('content')


<div class="container">
	<?php  //  echo json_encode ($wallets);   ?>
	<div class="row" style="margin-bottom:50px"><H2> List of wallets </H2><div   style="position:absolute;right:250px "><a   href="{{action('WalletsController@showBalance'  )}}"  class="btn btn-md btn-success"  role="button" data-toggle="tooltip" data-tooltip="tooltip" data-placement="bottom" data-original-title="find a wallet by date" >
                            <span class="fa  fa-search" ></span> find a wallet balance
                        </a> </div>
		<div   style="position:absolute;right:50px "><a   href="{{action('WalletsController@create'  )}}"  class="btn btn-md btn-success"  role="button" data-toggle="tooltip" data-tooltip="tooltip" data-placement="bottom" data-original-title="Submit a new wallet" >
                            <span class="fa  fa-plus" ></span> submit a new wallet
                        </a> </div>
		
	</div>
    <table id="mytable" class="table table-striped"  style="width:100%;border:1px solid #ebedef;border-right:1px solid #ebedef">
            <thead>
            <tr id="headtable">
                <th style="width:10%">ID</th>
                <th style="width:12%">Tag</th>
                <th style="width:5%">Currency</th>
                <th style="width:17%">Booking Amount</th>				
                <th style="width:15%">Amount Value</th>
                <th style="width:22%">Last Financial Movement</th>
                 <th class="no-sort" style="width:8%">Actions</th>
              </tr>
         
            </thead>
            <tbody>
            <?php  
	 	  foreach($wallets as $wallet){ ?>
		     <tr>
                <td style="width:5%" ><a  title="View Wallet"   href="{{action('WalletsController@show', $wallet->id )}}" >{{$wallet->id}}</a></td>
                <td style="width:10%">{{$wallet->tag}}</td>
                <td style="width:5%">{{$wallet->currency}}</td>
                <td style="width:17%">{{$wallet->bookingAmount->value}} {{$wallet->bookingAmount->currency}}</td>
                <td style="width:15%">{{$wallet->valueAmount->value}} {{$wallet->valueAmount->currency}}</td>
                <td style="width:22%">{{$wallet->dateLastFinancialMovement}} </td>
					<td  style="width:8%"   >
                      <a  style="color:white" href="{{action('WalletsController@show', $wallet->id )}}"  class="btn btn-md btn-info"  role="button" data-toggle="tooltip" data-tooltip="tooltip" data-placement="bottom" data-original-title="Show wallet" >
                            <span class="far fa-eye" ></span> Show
                        </a>
                     </td>
 
                </tr>
                  
		<?php  }    ?> 
		</tbody>
        </table>
	
</div>	
  


 @endsection('content')
 

 @section('footer_scripts')

<!-- Datatables -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
 
	 
 <script type="text/javascript">
    $(document).ready(function() {
 
 
            var table = $('#mytable').DataTable({
                orderCellsTop: true,
              //  dom : '<"top"flp<"clear">>rt<"bottom"ip<"clear">>',
                responsive:true,
				 aaSorting : [],               
              
                "columnDefs": [ {
                    "targets": 'no-sort',
                    "orderable": false,
                } ]
               

            });
 });
	 
</script>
 @endsection('footer_scripts')


