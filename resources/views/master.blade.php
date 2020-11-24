<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>nguyen van hoa</title>
	<link rel="stylesheet" href="">
	<script src="jquery-3.4.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

</head>
<body>
	<h1>nguyen van hoa</h1>
    
    <h1>nguyen van hoa</h1>
    <h1>nguyen van hoa</h1>
    <h1>nguyen van hoa</h1>
	<button id="btn1">click</button>
	<table id="hoa1">
		
		<thead>
			<tr>
				<th>header1</th>
				<th>header1</th>
				<th>header1</th>
			</tr>
			
		</thead>
		<tbody>
			<tr>
				<td>data1</td>
				<td>data2</td>
				<td>data5</td>
			</tr>
			<tr>
				<td>data1</td>
				<td>data2</td>
				<td>data5</td>
			</tr>
			<tr>
				<td>data1</td>
				<td>data2</td>
				<td>data5</td>
			</tr>
			<tr>
				<td>data1</td>
				<td>data2</td>
				<td>data5</td>
			</tr>
		</tbody>
	</table>
</body>
</html>

<script type="text/javascript">
$( document ).ready(function() {
$('#hoa1').DataTable({
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
        });
});
</script>
