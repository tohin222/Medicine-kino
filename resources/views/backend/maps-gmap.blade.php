<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('backend.partials.css')

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body>
    <!-- Left Panel -->

    @include('backend.partials.aside')


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

        @include('backend.partials.navbar')
        <!-- Header-->

        @include('backend.partials.breadcrumbs')


        <div class="content">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Basic Map</h4>
                            </div>
                            <div class="gmap_unix card-body">
                                <div class="map" id="basic-map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Fusion Tables layers</h4>
                            </div>
                            <div class="card-body">
                                <div id="map-2" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Geometry overlays</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-3"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Elevation locations</h4>
                            </div>
                            <div class="card-body">
                                <div id="map-4" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Geolocation</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-5"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>KML layers</h4>
                            </div>
                            <div class="card-body">
                                <div id="map-6" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Layers</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-7"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Map events</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-8"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->




            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>

        @include('backend.partials.footer')



    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
  @include('backend.partials.js')
</body>
</html>
