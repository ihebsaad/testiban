@extends('layouts.fulllayout')
  
 <style>.searchfield{width:100px;}
		 #mytable{width:100%!important;margin-top:10px !important;}
 </style> 
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
   
@section('content')


<div class="container">
 	<div class="row" style="margin-bottom:20px"><H2>List of financial movements </H2> 
	</div>
    <table id="mytable" class="table table-striped"  style="width:100%;border:1px solid #ebedef;border-right:1px solid #ebedef">
            <thead>
            <tr id="headtable">
                <th style="width:15%">ID</th>
                <th style="width:15%">Booking Date</th>
                <th style="width:15%">Wallet ID</th>
                <th style="width:15%">Value Date</th>				
                <th style="width:15%">Amount</th>
                  <th class="no-sort" style="width:10%">Actions</th>
              </tr>
         
            </thead>
            <tbody>
            <?php  
	 	  foreach($movements as $movement){ ?>
		     <tr>
                <td style="width:15%" ><a title="View Financial Movement Details"  href="{{action('MovementsController@show', $movement->id )}}" >{{$movement->id}}</a></td>
                <td style="width:15%">{{$movement->bookingDate}}</td>				 
                <td style="width:15%"><a title="View Wallet"  href="{{action('WalletsController@show', $movement->walletId )}}">{{$movement->walletId}}</a></td>
                <td style="width:15%">{{$movement->valueDate}}  </td>
                <td style="width:15%">{{$movement->amount->value}} {{$movement->amount->currency}}</td>
 					<td  style="width:10%"   >
                      <a  style="color:white" href="{{action('MovementsController@show', $movement->id )}}"  class="btn btn-md btn-info"  role="button" data-toggle="tooltip" data-tooltip="tooltip" data-placement="bottom" data-original-title="Show Financial Movement Details" >
                            <span class="far fa-eye" ></span> Show
                        </a>
                     </td>
 
                </tr>
                  
		<?php  }    ?> 
		</tbody>
        </table>
	
</div>	
  
<!-- Datatables -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
 
	  

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

