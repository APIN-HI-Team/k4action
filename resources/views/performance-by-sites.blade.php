@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Treatment Performance Overview by Sites</h4>
                        <p class="text-muted font-14">
                            You can click each facility or search to view the performance.
                        </p>
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
