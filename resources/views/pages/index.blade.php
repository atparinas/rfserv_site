
@extends('layouts.pages')


@section('content')

    
    <div class="jumbotron index-header" >
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header">
                <img id="logo" src="{{asset('/img/logo.png')}}"> RFSERV
                </h2>
                <h3> Qualty, Reliablity, and Integrity</h3>
            </div>
        </div>
      </div>
    </div>


    <!-- Page Content -->
 

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i> Installation, Commissioning, Testing and Network Integrations</h4>
                        </div>
                        <div class="panel-body">
                            <p>We ensure your system is safely and successfully deployed, with minimal disruption to your service, increasing productivity and guaranteeing network performance.</p>
                            <a href="/services" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-gift"></i> Installation and Commissioning of DC Power Systems (-48VDC Systems) </h4>
                        </div>
                        <div class="panel-body">
                            <p>Our highly trained team of experts ensure that our power systems installation and commissioning projects meet the very highest of professional standards.</p>
                            <a href="/services" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i>Preventative and Corrective Maintenance</h4>
                        </div>
                        <div class="panel-body">
                            <p>RFSERV offers a world class telecom maintenance service incorporating on site field services 24/7or 8×5, routine preventative maintenance and ad-hoc call out maintenance.</p>
                            <a href="/services" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project Section -->
        <div class="row">
        <div class="">
            <h3>Recent Projects</h3>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('/img/slides/slide1a.jpg')}}" alt="...">
                        <a href=""><div class="carousel-caption">
                            <h4>Telstra Macro sites and L700 upgrades</h4>
                            RFSERV recently perform L700 upgrade for Telstra.
                        </div></a>
                    </div>

                    <div class="item">
                        <img src="{{ asset('/img/slides/slide2.jpg')}}"" alt="...">
                        <a href=""><div class="carousel-caption">
                        <h4>EJV sites and Project Spyder with VHA.</h4>
                        
                        </div></a>
                    </div>

                     <div class="item">
                        <img src="{{ asset('/img/slides/slide3.jpg')}}" alt="...">
                        <a href=""><div class="carousel-caption">
                        <h4>Audio Visual Install</h4>
                        
                        </div></a>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
        {{-- end row carousel --}}
  		<hr>

        <!-- Call to Action Section -->
   {{--      <div class="well col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-9">
                    <p>If you like to know more about our services. Please don't hesistate reach us.</p>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-lg btn-default btn-block" href="/contact">Contact us now</a>
                </div>
            </div>
        </div> --}}

        <hr>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>


@stop