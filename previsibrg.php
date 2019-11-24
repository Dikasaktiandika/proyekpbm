<script>
  var readURL= function(event) {
    var input = event.target;

    var reader = new FileReader();
    reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('output');
      output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
  };
</script>
<h2>.:: ISI BARANG ::.</h2>
<form action = "barang_simpan.php" method="post" enctype = "multipart/form-data">
	<table border = "1">
		<tr>
			<td>Nama Barang</td>
			<td><input type = "text" name = "nama"></td>
			<td rowspan="5" align="center"><img id='output' width="100"></td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td><input type = "text" name = "harga"></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type = "text" name = "stok"></td>
		</tr>
		<tr>
			<td> Gambar [Max = 1.5MB] </td>
			<td><input type='file' accept='image/*' onchange='readURL(event)'></td>
			

		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type = "submit" value = "Simpan" name ="proses"/>
			<input type = "reset" value = "Reset" name ="reset"/>
		    </td>
		</tr>
	</table>
</form>