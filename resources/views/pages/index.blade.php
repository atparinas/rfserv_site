
@extends('layouts.pages')


@section('content')



    <!-- Page Content -->
 

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to RFServe
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Consulting</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Integration </h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Repair and Maintenance</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Best Work So Far</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/work/work-1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/work/work-2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/work/work-3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/work/work-4.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/work/work-5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="img/work/work-6.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

  		<hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Contact us now</a>
                </div>
            </div>
        </div>

        <hr>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>


@stop