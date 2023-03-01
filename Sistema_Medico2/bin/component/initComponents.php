<?php 

	namespace component;

	class initComponents{

		public static function componentsHeader(){

			$componentsHeader = '

                    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">

                  <!-- Favicons -->
                  <link href="assets/img/favicon.png" rel="icon">
                  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
                  <!-- Google Fonts -->
                  <link href="https://fonts.gstatic.com" rel="preconnect">
                  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"rel="stylesheet">
                  <!-- Vendor CSS Files -->
                  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
                  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
                  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
                  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
                  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
                  <link href="assets/css/Datatables/datatables.min.css" rel="stylesheet">
                  
                  <!-- Template Main CSS File -->
                  <link href="assets/css/style2.css" rel="stylesheet">
                  <!-- Font Awesome -->
                  ';

			echo $componentsHeader;
		}

		public static function componentsJS(){

			$componentsJS = '

                 <!-- Template Main JS File -->
                  <script src="assets/js/jquery-3.6.3.min.js"></script>
                  <script src="assets/js/main.js"></script>

				 <!-- Vendor JS Files -->
                   <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
                   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                   <script src="assets/vendor/chart.js/chart.min.js"></script>
                   <script src="assets/vendor/echarts/echarts.min.js"></script>
                   <script src="assets/vendor/quill/quill.min.js"></script>
                   <script src="assets/vendor/tinymce/tinymce.min.js"></script>
                   <script src="assets/vendor/php-email-form/validate.js"></script>

                <!--DataTables-->
                <script src="assets/js/DataTables/datatables.min.js"></script>
                <script src="assets/js/DataTables/consultaTabla.js"></script>
                  
                    <!-- Sweet Alert-->
                    <script src="assets/js/alerta.js"></script>

                    <script src="assets/js/Select/select2.full.min.js"></script> 
                     
                    
    
			';

			echo $componentsJS;



		}
	}
	



 ?>