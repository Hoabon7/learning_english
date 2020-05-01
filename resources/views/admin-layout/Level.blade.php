<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Learning_English</title>
	<script src="jquery-3.4.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>

	<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
	<style>
		.container{
			margin-top: 20px;
		}
		#btnadd{
			float: right;
		}

	</style>
</head>
<body>
	<div class="container">
		<button id="btnadd" class="btn btn-success btn-sm">ADD</button>
		<table id="table_level" class="table-bordered">
			<thead > 
				<tr class="row">
					<th class="col-xs-3">ID</th>
					<th class="col-xs-4">NAME</th>
					<th class="col-xs-5">ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($level as $value) {
				?>
				<tr class="row">
					<td class="col-xs-3"><?php echo $value->id ?></td>
					<td class="col-xs-4"> <?php echo $value->namelevel ?></td>
					<td class="col-xs-5">
						<a href="#" ><button class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-fire">Delete</i></button></a>
						<a href="#"><button class="btn btn-sm btn-success"><i class=" glyphicon glyphicon-edit">Edit</i></button></a>
						<a href="#"><button class="btn btn-sm btn-warning"><i class=" glyphicon glyphicon-file">Detail</i></button></a>

					</td>
				</tr>
				<?php
					}
				?>
				
			</tbody>
	    </table>
	</div>
	
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#table_level").DataTable({
			 "processing": true,
         
		 "dom": 'lBfrtip',
		 "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
		})
	});

</script>