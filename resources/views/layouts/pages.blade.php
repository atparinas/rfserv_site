<!DOCTYPE html>
<html>
<head>
	<title>RFServe</title>

 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>
<body>


    @include('layouts.nav')

    <div class="container">

        @yield('content')

        @include('layouts.footer')
    </div>
    

    


</body>
</html>