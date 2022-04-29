@extends('layouts.app')

@section('content')
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
</div>
<div class="wrapper" id="app">
    <example-component></example-component>
</div>
@endsection
@section('footer_scripts')
    <script src="{{asset('select2/js/select2.min.js')}}"></script>
    <script src="https://ndr.phis3project.org.ng/lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="https://ndr.phis3project.org.ng/lib/dummy-data/data.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
    <script src="https://ndr.phis3project.org.ng/js/monitoring_filter.js" type="text/javascript"></script>
    <script src="https://ndr.phis3project.org.ng/js/monitoring_surge_script.js"></script>

@endsection
