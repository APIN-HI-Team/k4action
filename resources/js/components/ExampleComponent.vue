<template>
    <div id="content">
        <div class="centered-heading" v-show="new Array('cummulative_summary','linkage_retention','cdc_fact_sheet').indexOf(selectedIndicator) == -1">
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
        </div>

        <div class="centered-heading" v-show="new Array('tx_new', 'hts_tst', 'hts_index', 'hts_recent','case_finding','cummulative_summary','linkage_retention','cdc_fact_sheet', '').indexOf(selectedIndicator) == -1">
            Charts shown here use numbers as of today
        </div>

        <div class="row">
            <tx-component></tx-component>
        </div>
    </div>

</template>

<script>

</script>
