@extends('layouts.app')

@section('content')
    <div class="wrapper container" id="app">
        <nav id="sidebar">
            <div class="sidebar-wrapper with-shadow">
                <h4 class="sidebar-header">Apply Filters below to load data</h4>
                <!--begin::Form-->
                <form class="" name="filterForm" id="filterForm">
                    <div class="filter-form-body">
                        <div class="form-group">
                            <label for="selectIndicator"><i class="flaticon2-list-1"></i> Select MER Indicator</label>
                            <select class="form-control" id="selectIndicator" name="indicator" v-model="selectedIndicator">
                                <option disabled value=""></option>
                                <option value="tx_new">Treatment New</option>
                                <option value="tx_curr">Treatment Current</option>
                                <option value="tx_pvls">Treatment PVLS</option>
                                <option value="hts_tst">HTS_TST (Inc. HTS_TST_POS)</option>

                            </select>
                        </div>


                        <div class="form-group" id="ipsDiv">
                            <label><i class="flaticon2-group"></i> Implementing Partners</label>
                            <select class="form-control kt-select2" id="selectIPs" name="ips" multiple="multiple" >
                                <option value="APIN" selected>APIN</option>
                            </select>

                        </div>
                        <div class="form-group" id="statesDiv">
                            <label><i class="flaticon2-map"></i> States</label>
                            <select class="form-control kt-select2" id="selectStates" name="stateCodes" multiple="multiple">
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
                            <select class="form-control kt-select2" id="selectLGAs" name="lgaCodes" multiple="multiple">

                                <option value="272">Gwer East</option>
                                <option value="564">Ogbadibo</option>
                                <option value="129">Buruku</option>
                            </select>

                        </div>
                        <div class="form-group" id="selectFacilitiesDiv">
                            <label><i class="flaticon2-box"></i> Facilities</label>
                            <select class="form-control kt-select2" id="selectFacilities" name="facilities" multiple="multiple">
                                <option value="OPnJnEYeq1I">Aliade General Hospital</option>
                                <option value="ooVgKxaybti">St. Gregory Health Center</option>
                                <option value="DU7QFC4eurr">pl Mikang</option>
                            </select>

                        </div>

                        <div class="form-group" id="fromPicker" v-show="new Array('tx_curr', 'tx_pvls').indexOf(selectedIndicator) == -1">
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

                        <div class="form-group" v-show="new Array('tx_curr', 'tx_pvls').indexOf(selectedIndicator) == -1">
                            <label><i class="flaticon2-calendar-7"></i> To Date</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" readonly value="" id="to" name="to" />
                                <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-calendar"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-form-footer">
                        <button type="reset" class="btn btn-primary" id="loadData">Load Data</button>
                        <button type="reset" class="btn btn-secondary" id="clearData">Clear</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </nav>
        <!-- Sidebar -->
       <example-component></example-component>
        <tx-component></tx-component>

    </div>
@endsection
@section('footer_scripts')
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
                <script src="{{asset('select2/js/select2.min.js')}}"></script>
                <script src="https://ndr.phis3project.org.ng/lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
                <script src="https://ndr.phis3project.org.ng/lib/dummy-data/data.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
                <script src="https://ndr.phis3project.org.ng/js/monitoring_filter.js" type="text/javascript"></script>
                <script src="https://ndr.phis3project.org.ng/js/monitoring_surge_script.js"></script>
@endsection
