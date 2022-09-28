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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Treatment Performance Overview by Sites</h4>
                        <p class="text-muted font-14">
                            You can click each facility or search to view the performance.
                        </p>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="buttons-table-preview">
                                <table class="myTables table table-xl table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>State</th>
                                        <th>LGA</th>
                                        <th>Facility Name</th>
                                        <th>Datim code</th>
                                        <th>Total Patients</th>
                                        <th>TX CURR</th>
                                        <th>IIT</th>
                                        <th>Transferred Out</th>
                                        <th>Dead</th>
                                        <th>Stopped</th>
                                        <th>PBS</th>
                                        <th>TX NEW</th>
                                        <th>EMR Last Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($performance as $list)
                                        <tr>
                                            <td>{{$list->state}}</td>
                                            <td>{{$list->lga}}</td>
                                            <td>{{$list->facility_name}}</td>
                                            <td>{{$list->datim_code}}</td>
                                            <td>{{$list->total_patients}}</td>
                                            <td>{{$list->active}}</td>
                                            <td>{{$list->ltfu}}</td>
                                            <td>{{$list->transferred_out}}</td>
                                            <td>{{$list->dead}}</td>
                                            <td>{{$list->stopped}}</td>
                                            <td>{{$list->pbs}}</td>
                                            <td>{{$list->tx_new}}</td>
                                            <td>{{$list->emr_date}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end preview-->

                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div><!-- end row-->
    </div>



    <div class="loading hide">
        <img src="/img/loader.gif" alt="" />
        Fetching Data ...
    </div>
@endsection

@section('footer_scripts')
    <script src="http://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
    <script src="http://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="http://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="http:///cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>

    <script>
        var table = $('.myTables').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]

        });

        new $.fn.dataTable.FixedHeader(table);
    </script>
    @include('dashboardscripts.scripts')
@endsection
