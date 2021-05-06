<html>
<head>
	<title>Belajar Git</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
	<table class="table table-bordered" id = "myTable">
		<thead class="table-dark">
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Aliefsufi Uzan Kafil Ardi</td>
				<td>Rondokuning</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Uzan</td>
				<td>Rondokuning</td>
			</tr>
		</tbody>
	</table>
	<button class="btn btn-primary">
		Click Here
	</button>
	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>