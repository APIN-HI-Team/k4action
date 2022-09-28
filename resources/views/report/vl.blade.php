<div class="tx_curr" v-if="selectedIndicator == 'tx_pvls'">

    <div class="line">
        <div class="col-xl-4">
            <div class="box green-back">
                <div class="kt-widget24">
                    <div class="kt-widget24__number big-card-number font-weight-bold kt-font-danger" id="tx_pvls_count_all">...</div>

                    <h5 class="kt-font-danger">Patients</h5>
                    <p class="kt-font-danger">Viral load test within last 12 months and virally suppressed</p>
                </div>
            </div>

        </div>
        <div class="col-xl-4">
            <div class="box female-back">
                <div class="kt-widget24">
                    <div class="kt-widget24__number big-card-number font-weight-bold kt-font-primary" id="tx_pvls_count_female">...</div>

                    <h5 class="kt-font-primary">Females</h5>
                    <p class="kt-font-primary">Viral load test within last 12 months and virally suppressed</p>
                </div>
            </div>

        </div>
        <div class="col-xl-4">
            <div class="box male-back">
                <div class="kt-widget24">
                    <div class="kt-widget24__number big-card-number font-weight-bold kt-font-success" id="tx_pvls_count_male">...</div>

                    <h5 class="kt-font-success">Males</h5>
                    <p class="kt-font-success">Viral load test within last 12 months and virally suppressed</p>
                </div>
            </div>

        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Monthly Trend - Viral Load Suppression (VLS) Rate

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('pvlsMonthChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('pvlsMonthChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('pvlsMonthChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="pvlsMonthChart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Distribution of Viral Load Suppression (VLS) Rates

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('pvlsDistributionMap')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('pvlsDistributionMap')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('pvlsDistributionMap')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div id="northImage" style="float: right; display: none;"><img alt="north arrow" src="/img/map/North Arrow.PNG" style="height:50px; width: 50px;" /></div>
                    <div class="chart" id="pvlsDistributionMap"></div>
                    <div id="scaleImage" style="float: left; display: none;"><img alt="scale" src="/img/map/Scale.PNG" /></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-content">
                    <div class="chart" id="distributionMapDetails"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Viral Load Suppression (VLS) Rates by Age and Sex

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('pvlsAgeSex')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('pvlsAgeSex')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('pvlsAgeSex')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="pvlsAgeSex"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Viral Load Suppression (VLS) Rates by State

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('pvlsStateChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('pvlsStateChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('pvlsStateChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="pvlsStateChart"></div>
                </div>
            </div>
        </div>
    </div>

</div>
