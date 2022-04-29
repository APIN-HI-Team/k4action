@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="simple-breadcrumb">
            <h3>Summary Report</h3>
            <div class="d-flex bd-highlight">
                <div class="flex-grow-1 bd-highlight">
                    <ol class="breadcrumb simple-breadcrumb-list mr-auto">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="flaticon2-shelter"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="#">Summary Report</a>
                        </li>
                    </ol>
                </div>
                <div class="bd-highlight">
                    <div class="dropdown simple-breadcrumb-quick-nav" title="Quick actions">
                        <a href="#" class="btn btn-primary small-button" data-toggle="dropdown">
                            Quick Reports
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="/analytics/monitoring">
                                Monitoring
                            </a>
                            <a class="dropdown-item" href="/analytics/quality-of-care">
                                Quality of Care
                            </a>
                            <a class="dropdown-item" href="/reporting/upload-tracker">
                                Upload Tracker
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-xl-2 pl-0">
                    <div class="box darkgreen-background with-shadow">
                        <div class="box-content">
                    <span class="large-text" id="n28">
                        ...
                    </span>
                            <span class="ml-0 mb-2 px-0">
                        Tx_CURR
                    </span>
                            <div>
                                365,756
                            </div>

                        </div>

                    </div>
                    <div class="box teal-background with-shadow">
                <span class="large-text" id="n90">
                    ...
                </span>
                        <span class="ml-0 mb-2 px-0">
                    PBS Coverage
                </span>
                        <div>
                            370,000
                        </div>

                    </div>
                </div>

                <div class="col-xl-2 pl-0">
                    <div class="box blue-background with-shadow">
                        <div class="box-content">
                    <span class="large-text" id="n28">
                        ...
                    </span>
                            <span class="ml-0 mb-2 px-0">
                        Tx_New
                    </span>
                            <div>
                                1000
                            </div>

                        </div>

                    </div>
                    <div class="box teal-background with-shadow">
                <span class="large-text" id="n90">
                    ...
                </span>
                        <span class="ml-0 mb-2 px-0">
                    HTS TST
                </span>
                        <div>
                            500,000
                        </div>

                    </div>
                </div>

                <div class="col-xl-8 pr-0 d-flex">
                    <div class=" box white-background with-shadow with-corner-image-1">
                        <div class="box-heading">Viral Load Cascade</div>
                        <div class="box-content">
                            <div id="pvlsStateChart" class="chart" data-highcharts-chart="16"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-6">
                <div class="box white-background with-shadow">
                    <div class="box-heading">
                        Number of Adults and Children currently receiving ART by Sex
                    </div>
                    <div class="box-content">
                        <div class="chart" id="pie_chart">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="box white-background with-shadow extra-padding">
                    <div class="box-heading">
                        Number of Adults and Children currently receiving ART by Age
                    </div>
                    <div class="box-content">
                        <div class="chart" id="ageChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <div class="box white-background with-shadow extra-padding">
                    <div class="box-heading">
                        Number of Adults and Children newly enrolled on ART by Sex
                    </div>
                    <div class="box-content">
                        <div class="chart" id="newSexChart"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="box white-background with-shadow extra-padding">
                    <div class="box-heading">
                        Number of Adults and Children newly enrolled on ART by Age
                    </div>
                    <div class="box-content">
                        <div class="chart" id="newAgeChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="loading hide">
        <img src="/img/loader.gif" alt="" />
        Fetching Data ...
    </div>
@endsection

@section('footer_scripts')
    @include('dashboardscripts.scripts')
@endsection
