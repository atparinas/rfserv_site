@extends('layouts.pages')


@section('content')

<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Services
            <small>Our Expertise</small>
        </h1>
    </div>
</div>
<!-- /.row -->

{{-- <!-- Image Header -->
<div class="row">
    <div class="col-lg-12">
        <img class="img-responsive" src="img/services.jpg" alt="">
    </div>
</div>
<!-- /.row -->
 --}}
<!-- Service Panels -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body" name="install" >
                <h4>Installation, Commissioning, Testing and Network Integrations</h4>
                <ul>
                    <li>Base Transceiver Stations/NodeB for GSM (2G), UMTS/WCDMA (3G), and LTE (4G)</li>
                    <li>Microwave Transmission</li>
                    <li>Repeater and Signal Booster Equipment</li>
                    <li>Distributed Antenna Systems (DAS) and Point of Interconnection (POI)</li>
                    <li>Antenna Remote Electrical Tilt and TMA configuration</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Installation and Commissioning of DC Power Systems (-48VDC Systems)</h4>
                <ul>
                    <li>Professional installation and full test of the equipment on site</li>
                    <li>Ensure that our power systems installation and commissioning projects meet the very highest of professional standards</li>
                    <li>Installations will comply with the requirements as set by the customer as well as the standards and practices of the telco and the local codes where applicable</li>
                   
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Testing</h4>
                <ul>
                    <li>End-to-End link test (E1, Ethernet over SDH)</li>
                    <li>Antenna Passive inter-modulation (PIM), Return Loss, Cable Loss, VSWR and Distance to Fault testing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body">
                <h4>Preventative and Corrective Maintenance</h4>
                <ul>
                    <li>Equipment Software/Firmware upgrades and reconfiguration</li>
                    <li>Equipment fault-finding and restoration</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <div class="panel-body" id="equipment" >
                <h4>EQUIPMENT EXPERTISE</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <strong>Ericson</strong>
                        <ul>
                            <li>RBS200</li>
                            <li>RBS2016</li>
                            <li>RBS2202</li>
                            <li>RBS2206</li>
                            <li>RBS3206</li>
                            <li>RBS6202</li>
                            <li>RBS6601</li>
                            <li>WSC SIU</li>
                            <li>Minilink / HC / TN</li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <strong>Nokia</strong>
                        <ul>
                            <li>Intratalk / DE34</li>
                            <li>Ultrasite</li>
                            <li>Flexi BTS</li>
                            <li>Flexihopper</li>
                        </ul>
                        <br/>

                        <strong>Huawei</strong>
                        <ul>
                            <li> BTS 3800</li>
                            <li>BTS 3900</li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <strong>Eltek Power Supply</strong>
                        <ul>
                            <li>Flatpack1</li>
                            <li>Flatpack2</li>
                            <li>SP18</li>
                            <li>SP22-HC</li>
                        </ul>
                        <br/>

                        <strong>Power-One</strong>
                        <ul>
                            <li>PSSS6000</li>
                            <li>EmPower1100</li>
                            <li>EmPower1100-14</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <p><strong>Alcatel BTS (Evolium)</strong></p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        
                        <p><strong>Ceragon FibeAir 1500P</strong></p>
                        
                    </div>
                    <div class="col-md-4 col-sm-4">
                        
                        <p><strong>Harris Microstar / Stratex</strong></p>
                         
                        
                        
                    </div>
                    <div class="col-md-4 col-sm-4">
                        
                        <p><strong>NECPasolink</strong></p>
                        
                    </div>
                    <div class="col-md-4 col-sm-4">
                        
                        <p><strong>Siemens SRAL</strong></p>
                        
                    </div>
                    <div class="col-md-4 col-sm-4">
                        
                        <p><strong>SIAE microelettronica</strong></p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.row -->

<hr>

@stop