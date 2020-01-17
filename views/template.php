<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- JQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- Site Style -->
    <link rel="stylesheet" href="css/style.css">
  <title><?php echo $title; ?></title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Marvin Enamorado</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto pull-right">
          <li class="nav-item <?php echo $activeHome; ?>">
            <a class="nav-link" href="?action=home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php echo $activeAssig; ?>">
            <a class="nav-link" href="?action=assignments">Assignments</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <?php
    include $content;
  ?>

  <footer class="bg-dark mt-auto py-3">
    <div class="container">
      <span class="text-muted">2020 Marvin Enamorado</span>
    </div>
  </footer>
</body>
</html>