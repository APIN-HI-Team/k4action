@extends('layouts.new')

@section('content')

@endsection
@section('footer_scripts')
    <script src="{{asset('select2/js/select2.min.js')}}"></script>
    <script src="https://ndr.phis3project.org.ng/lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="https://ndr.phis3project.org.ng/lib/dummy-data/data.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
    <script src="https://ndr.phis3project.org.ng/js/monitoring_filter.js" type="text/javascript"></script>
    <script src="https://ndr.phis3project.org.ng/js/monitoring_surge_script.js"></script>
@endsection
