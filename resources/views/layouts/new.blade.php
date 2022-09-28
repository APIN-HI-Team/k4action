<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- third party css -->
    <link href="assets/css/vendor_plugin/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <link href=" https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" rel="stylesheet"
          type="text/css" />
    <link href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css" rel="stylesheet"
          type="text/css" />
    <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css" rel="stylesheet"
          type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css" />
    <!-- third party css end -->


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link href="https://ndr.phis3project.org.ng/lib/fontawesome/css/all.css" rel="stylesheet">

    <link href="https://ndr.phis3project.org.ng/lib/fontawesome/css/all.css" rel="stylesheet">

    <link href="{{ asset('flaticon/flaticon-bundle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('select2/css/select2.min.css')}}" />
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/ng/ng-all.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
<body>
@include('partials.nav')
<div class="container">
    <nav class="simple-breadcrumb">
        <h3>Program Monitoring (MER Indicators)</h3>
        <div class="d-flex bd-highlight">
            <div class="flex-grow-1 bd-highlight">
                <ol class="breadcrumb simple-breadcrumb-list mr-auto">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i class="flaticon2-shelter"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">NDR</a></li>
                    <li class="breadcrumb-item"><a href="#">Analytics</a></li>
                    <li class="breadcrumb-item active"><a href="#">Monitoring</a></li>
                </ol>
            </div>
        </div>
    </nav>
    <div class="wrapper" id="el">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-wrapper with-shadow">
                <h4 class="sidebar-header">Apply Filters below to load data</h4>

                <!--begin::Form-->
                <form class="" name="filterForm" id="filterForm" method="POST">
                    <div class="filter-form-body">
                        <div class="form-group">
                            <label for="selectIndicator"><i class="flaticon2-list-1"></i> Select MER Indicator</label>
                            <select class="form-control" id="selectIndicator" name="report_type">
                                <option value="">Choose ...</option>
                                <option value="tx_new">Treatment New</option>
                                <option value="tx_curr">Treatment Current</option>
                                <option value="vl">Treatment PVLS</option>
                            </select>
                        </div>

                        <div class="form-group" id="statesDiv">
                            <label><i class="flaticon2-map"></i> States</label>
                            <select class="form-control e2 select 2 kt-select2" id="selectStates" name="state" multiple="multiple" data-toggle="select2" data-placeholder="Choose...">
                                <option value="7">Benue</option>
                                <option value="13">Ekiti</option>
                                <option value="29">Ondo</option>
                                <option value="28">Ogun</option>
                                <option value="30">Osun</option>
                                <option value="31">Oyo</option>
                                <option value="32">Plateau</option>
                            </select>

                        </div>
                        <div class="form-group" id="lgaselectLGAsDiv">
                            <label><i class="flaticon2-map"></i> LGAs</label>
                            <select class="form-control e2 select2 kt-select2" id="selectLGAs" multiple="multiple" data-toggle="select2" data-placeholder="Choose..." name="lga">

                            </select>

                        </div>
                        <div class="form-group" id="selectFacilitiesDiv">
                            <label><i class="flaticon2-box"></i> Facilities</label>
                            <select class="e2 select2 form-control kt-select2" id="selectFacilities" multiple="multiple" data-toggle="select2" data-placeholder="Choose..." name="facility">

                            </select>

                        </div>

<!--                        <div class="form-group" id="fromPicker">
                            <label><i class="flaticon2-calendar-7"></i> From Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="" id="from" name="from" />
                                <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label><i class="flaticon2-calendar-7"></i> To Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="" id="to" name="to" />
                                <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="filter-form-footer">
                        <button type="reset" class="btn btn-primary" id="loadData">Load Data</button>
                        <button type="reset" class="btn btn-secondary" id="clearData">Clear</button>
                    </div>
                </form>
                <!--end::Form-->

            </div>
        </nav>

        <div id="content">
            <div class="centered-heading">
                <div class="row tile-row">
                    <div class="col mr-2">
                        <div class="widget">
                            <div class="widget-content with-shadow">
                                <div class="widget-icon">
                                    <i class="flaticon2-avatar purple"></i>
                                </div>
                                <div class="widget-block">
                                    <h4 class="widget-title purple">
                                        Patients
                                    </h4>
                                    <span class="widget-stat purple" id="ribbon-patients">
                                    ...
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mr-2">
                        <div class="widget">
                            <div class="widget-content with-shadow">
                                <div class="widget-icon">
                                    <i class="flaticon2-box orange"></i>
                                </div>
                                <h4 class="widget-title orange">
                                    Facilities
                                </h4>
                                <span class="widget-stat orange" id="ribbon-facilities">
                                ...
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col mr-2">
                        <div class="widget">
                            <div class="widget-content with-shadow">
                                <div class="widget-icon">
                                    <i class="flaticon2-map teal"></i>
                                </div>
                                <h4 class="widget-title teal">
                                    States
                                </h4>
                                <span class="widget-stat teal" id="ribbon-states">
                                ...
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col mr-2">
                        <div class="widget">
                            <div class="widget-content with-shadow">
                                <div class="widget-icon">
                                    <i class="flaticon2-group yellow"></i>
                                </div>
                                <h4 class="widget-title yellow">
                                    IP
                                </h4>
                                <span class="widget-stat yellow" id="ribbon-ips">
                                ...
                            </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hear -->
                @yield('content')

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ndr.phis3project.org.ng/lib/bootstrap/js/bootstrap.bundle.js"></script>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/ng/ng-all.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="{{asset('highchart2.0/modules/highcharts-utils.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@yield('footer_scripts')
</body>


</html>
