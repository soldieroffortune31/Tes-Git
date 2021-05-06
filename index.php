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
	<table id="myTable">
		<tr class="header">
			<th width="10%">No.</th>
			<th width="50%">Nama</th>
			<th width="40%">Alamat</th>
		</tr>
			<tr>
				<td>1</td>
				<td>Aliefsufi Uzan Kafil Ardi</td>
				<td>Rondokuning</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Cito</td>
				<td>Sukomulyo</td>
			</tr>
	</table>

	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
//   $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#myTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });
}
</script>

</body>
</html>