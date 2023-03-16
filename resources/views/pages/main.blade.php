<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard</title>
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/dasbo.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/h4.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/index.css">
</head>
<body>

  <div class="container-fluid">
    <div class="row flex-nowrap">

      <!-- Sidebar -->

      @include('pages.sidebar')
      
      <!-- End Sidebar -->

      <!-- Main Content -->
      <div class="col py-3">
        <div class="container">
          
            @yield('content')

        </div>
      </div>
      <!-- End Main Content -->
    </div>
  </div>

  <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>