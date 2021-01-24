<!DOCTYPE html>
<html>
<head>
	<title>Excel PHP</title>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>
<body>
	<table id="table">
		<thead>
			<th>Serialno</th>
			<th>Billdate</th>
			<th>Billno</th>
			<th>Companyname</th>
			<th>Receivingdate</th>
			<th>Dateofcontract</th>
			<th>Upto</th>
			<th>Technicianname</th>
			<th>Customername</th>
			<th>Address</th>
			<th>Area</th>
			<th>Contactno</th>
			<th>Product</th>
			<th>Amount</th>
			<th>Paymentmode</th>
			<th>Reference</th>
			<th>Remark</th>
			<th>Technicianname</th>
			<th>1stservice</th>
			<th>Technicianname</th>
			<th>2ndservice</th>
		</thead>
		<tbody></tbody>
	</table>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
		    $('#table').DataTable({
		    	ajax :{
		    		url : 'data.php',
		    		dataSrc : ''
		    	},
		    	columns : [
		    		{data : 0},
		    		{data : 1},
		    		{data : 2},
		    		{data : 3},
		    		{data : 4},
		    		{data : 5},
		    		{data : 6},
		    		{data : 7},
		    		{data : 8},
		    		{data : 9},
		    		{data : 10},
		    		{data : 11},
		    		{data : 12},
		    		{data : 13},
		    		{data : 14},
		    		{data : 15},
		    		{data : 16},
		    		{data : 17},
		    		{data : 18},
		    		{data : 19},
		    		{data : 20}
		    	]
		    });
		})
	</script>
</body>
</html>

