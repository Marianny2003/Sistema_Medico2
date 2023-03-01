<?php
if(isset($_SESSION['nombreUser'])){
	session_destroy();
	 die("<script>window.location='?url=login'</script>");
	 }
?>