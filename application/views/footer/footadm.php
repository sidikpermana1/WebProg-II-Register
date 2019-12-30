	<script>
		function confirmDialog() {
		 return confirm('Apakah anda yakin akan menghapus data siswa ini?')
		}

		function hanyaAngka(evt) {
			  var charCode = (evt.which) ? evt.which : event.keyCode
			   if (charCode > 31 && (charCode < 48 || charCode > 57))
	 
			    return false;
			  	return true;
		}
		
	    function runPopup(){
		    window.alert('data berhasil di simpan!');
	    }  
	</script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>