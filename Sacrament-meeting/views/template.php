

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sacrament Meeting Planner</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">
  <!-- CSS -->
  <link href='css/select2.min.css' rel='stylesheet' type='text/css'>

  <!-- My CSS file -->
  <link href="css/style.css" rel="stylesheet">

  

</head>

<body id="page-top">

  <?php

    include $content;

  ?>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p class="text-muted small mb-0">Copyright &copy; 2020 Sacrament Meeting Planner</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap-datepicker.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- SweetAlert 2 -->
  <script src="vendor/sweetalert2/sweetalert2.all.js"></script>
   <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

  <!-- My own scripts -->
  <script src="js/script.js"></script>


  <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>  
  <script src='js/select2.min.js' type='text/javascript'></script>

  <script type="text/javascript">           
           
            var fechaHoy = new Date();
            $(document).ready(function(){
                var date_input=$('input[id="date"]');
                var options={
                    format: 'yyyy/mm/dd',
                    language: "en",
                    numberOfMonths: 2,
                    todayHighlight: true,
                    autoclose: true,
                    minDate: 0
                };
                date_input.datepicker(options);
              });
           $('#dateIniPick').datetimepicker({
                format: 'YYYY/MM/DD',
                ignoreReadonly: true,
                allowInputToggle: true
            });

  </script>
  <script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
    });
  </script>
  <script>
  $(document).ready(function(){
    $("#openingHymn").select2();
    });
  $(document).ready(function(){
    $("#sacramentHymn").select2();
    });
  $(document).ready(function(){
    $("#closingHymn").select2();
    });
  </script>

</body>

</html>