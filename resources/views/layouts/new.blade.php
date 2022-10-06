


<div class="tx_curr full-width" v-if="selectedIndicator == 'tx_curr'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Patients Currently Receiving ART by Sex

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('sexChart');" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('sexChart');" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('sexChart');" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="sexChart"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Patients Currently Receiving ART by Age Group

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('ageChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('ageChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('ageChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="ageChart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Patients Currently Receiving ART by Sex and Age Group

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('ageSexChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('ageSexChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('ageSexChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="ageSexChart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    12 Month Trend for Patients Current on Treatment

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('initiationTrend')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('initiationTrend')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('initiationTrend')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="initiationTrend"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Distribution of Patients Currently receiving ART

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('distributionMap')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('distributionMap')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('distributionMap')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div id="northImage" style="float: right; display: none;"><img alt="north arrow" src="/img/map/North Arrow.PNG" style="height:50px; width: 50px;" /></div>
                    <div class="chart" id="distributionMap"></div>
                    <div id="scaleImage" style="float: left; display: none;"><img alt="scale" src="/img/map/Scale.PNG" /></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Patients Currently Receiving ART by location

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('drilldownBar')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('drilldownBar')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('drilldownBar')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="drilldownBar"></div>
                </div>
            </div>
        </div>
    </div>

</div>


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

<div class="hts full-width" v-if="selectedIndicator == 'hts_tst'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Case Finding by Sex

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsIndexTestingPosBySex')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsIndexTestingPosBySex')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsIndexTestingPosBySex')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsIndexTestingPosBySex"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Case Finding by Age Band

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsIndexTestingPosByAge')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsIndexTestingPosByAge')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsIndexTestingPosByAge')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsIndexTestingPosByAge"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Case Finding by Location

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsTestingAndPositiveByLocation')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsTestingAndPositiveByLocation')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsTestingAndPositiveByLocation')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsTestingAndPositiveByLocation"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Testing by Modality

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsTestingByModality')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsTestingByModality')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsTestingByModality')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsTestingByModality"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    12 Months Trend of HIV Case Finding

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsTestingAndPositive')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsTestingAndPositive')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsTestingAndPositive')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsTestingAndPositive"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="hts full-width" v-if="selectedIndicator == 'hts_tst_agg'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Case Finding by Sex

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsIndexTestingPosBySex')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsIndexTestingPosBySex')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsIndexTestingPosBySex')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsIndexTestingPosBySex"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Case Finding by Age Band

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsIndexTestingPosByAge')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsIndexTestingPosByAge')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsIndexTestingPosByAge')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsIndexTestingPosByAge"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Case Finding by Location

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsTestingAndPositiveByLocation')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsTestingAndPositiveByLocation')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsTestingAndPositiveByLocation')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsTestingAndPositiveByLocation"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Testing by Modality

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsTestingByModality')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsTestingByModality')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsTestingByModality')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsTestingByModality"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    12 Months Trend of HIV Case Finding

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsTestingAndPositive')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsTestingAndPositive')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsTestingAndPositive')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsTestingAndPositive"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="hts-index full-width" v-if="selectedIndicator == 'hts_index'">

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Index HIV Case Finding

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsByIndexModality')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsByIndexModality')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsByIndexModality')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsByIndexModality"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Index HIV Case Finding by Sex

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsIndexBySex')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsIndexBySex')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsIndexBySex')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsIndexBySex"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Index HIV Case Finding by Age Band

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsIndexByAge')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsIndexByAge')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsIndexByAge')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsIndexByAge"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Index HIV Case Finding by Location

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsIndexByLocation')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsIndexByLocation')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsIndexByLocation')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsIndexByLocation"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="hts-recent full-width" v-if="selectedIndicator == 'hts_recent'">

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Recent HIV Case Finding Cascade

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsRecentCascade')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsRecentCascade')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsRecentCascade')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsRecentCascade"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Recent HIV Case Finding by Sex

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsRecentBySex')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsRecentBySex')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsRecentBySex')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsRecentBySex"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Recent HIV Case Finding by Age Band

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsRecentByAge')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsRecentByAge')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsRecentByAge')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsRecentByAge"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Recent HIV Case Finding by Location

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('htsRecentMap')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('htsRecentMap')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('htsRecentMap')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="htsRecentMap"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="tx_new full-width" v-show="selectedIndicator == 'case_finding'">

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Testing Total-Positives (#)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CaseHivTestingTotalPositives')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CaseHivTestingTotalPositives')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CaseHivTestingTotalPositives')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CaseHivTestingTotalPositives"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Index Testing-Positives (#)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CaseIndexTestingPositives')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CaseIndexTestingPositives')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CaseIndexTestingPositives')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CaseIndexTestingPositives"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    PITC Testing-Positives (#)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CasePITCPositives')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CasePITCPositives')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CasePITCPositives')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CasePITCPositives"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Testing Total-Yield (%)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CaseHIVTestingTotal')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CaseHIVTestingTotal')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CaseHIVTestingTotal')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CaseHIVTestingTotal"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Index Testing-Yield (%)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CaseIndexTestingYield')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CaseIndexTestingYield')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CaseIndexTestingYield')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CaseIndexTestingYield"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    PITC Testing-Yield (%)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CasePITCTestingYield')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CasePITCTestingYield')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CasePITCTestingYield')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CasePITCTestingYield"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="tx_new full-width" v-show="selectedIndicator == 'linkage_retention'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Tx_New, Tx_Net_New, Retention Proxy (%)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('LinkageRetentionProxy')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('LinkageRetentionProxy')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('LinkageRetentionProxy')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="LinkageRetentionProxy"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Tx_Net_New

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('LinTx_Net_New')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('LinTx_Net_New')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('LinTx_Net_New')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="LinTx_Net_New"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Tx_New

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('LinTx_New')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('LinTx_New')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('LinTx_New')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="LinTx_New"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HTS-Test Pos, Tx_New, Linkage Proxy (%)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('HTS_Test_Pos')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('HTS_Test_Pos')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('HTS_Test_Pos')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="HTS_Test_Pos"></div>
                    <div>
                        <table class="table table-bordered" id="tx_new_pos_chart_table">
                            <thead>
                            <tr></tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Linkage (%)

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('LinLinkage')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('LinLinkage')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('LinLinkage')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="LinLinkage"></div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="tx_new full-width" v-show="selectedIndicator == 'cummulative_summary'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Testing - Total

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CumHIVTestingTotal')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CumHIVTestingTotal')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CumHIVTestingTotal')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CumHIVTestingTotal"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Testing - Index

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CumHIVTestingIndex')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CumHIVTestingIndex')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CumHIVTestingIndex')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CumHIVTestingIndex"></div>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="tx_new full-width" v-show="selectedIndicator == 'cummulative_summary'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HIV Testing - PITC

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CumHIVTestingPITC')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CumHIVTestingPITC')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CumHIVTestingPITC')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CumHIVTestingPITC"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Linkage Proxy

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CumLinkageProxy')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CumLinkageProxy')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CumLinkageProxy')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CumLinkageProxy"></div>
                </div>
            </div>
        </div>

    </div>

</div>





<div class="tx_new full-width" v-show="selectedIndicator == 'cdc_fact_sheet'">

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Net New Count Down  <small>(Net New Needed to reach ART Surge Targets by end FY2020)</small>
                </div>

                <div class="box-content">
                    <div class="chart">
                        <div class="chart">
                            <div class="row">
                                <div class="col">
                                    <div class="widget">
                                        <div class="widget-content with-shadow">
                                            <div class="widget-icon">
                                                <i class="flaticon2-avatar purple"></i>
                                            </div>
                                            <div class="widget-block">
                                                <h4 class="widget-title purple">
                                                    Patients
                                                </h4>
                                                <span class="widget-stat purple" id="countDown">
                                                    ...
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="widget">
                                        <div class="widget-content with-shadow">
                                            <div class="widget-icon">
                                                <i class="flaticon2-box orange"></i>
                                            </div>
                                            <h4 class="widget-title orange">
                                                Facilities
                                            </h4>
                                            <span class="widget-stat orange" id="completeness">
                                                ...
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="tx_new full-width" v-show="selectedIndicator == 'cdc_fact_sheet'">

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Progress Towards FY20 Treatment Goal Priority

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CDCgoalPriorityChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CDCgoalPriorityChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CDCgoalPriorityChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CDCgoalPriorityChart"></div>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="tx_new full-width" v-show="selectedIndicator == 'cdc_fact_sheet'">

    <div class="line">
        <div class="col-xl-12">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Cumulative

                </div>
                <div class="box-content">
                    <div class="chart">
                        <div class="row">
                            <div id="CDChts_tst_pos_cum" class="col-xl-4"></div>
                            <div id="CDCcummulativeChartnew2" class="col-xl-4"></div>
                            <div id="CDC_Net_New_Cumulative" class="col-xl-4"></div>
                        </div>
                        <div class="row">
                            <div id="CDC_Testing_Yield_Cumulative" class="col-xl-4"></div>
                            <div id="CDC_Linkage_Proxy_Cumulative" class="col-xl-4"></div>
                            <div id="CDC_Retention_Proxy_Cumulative" class="col-xl-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<div class="tx_new full-width" v-show="selectedIndicator == 'cdc_fact_sheet'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Case Finding and Yield

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CDCcaseFindingChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CDCcaseFindingChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CDCcaseFindingChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CDCcaseFindingChart"></div>
                </div>
            </div>
        </div>


        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    HTS_TST_POS


                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CDCHTS_TST_POSChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CDCHTS_TST_POSChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CDCHTS_TST_POSChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CDCHTS_TST_POSChart"></div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="tx_new full-width" v-show="selectedIndicator == 'cdc_fact_sheet'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Initiation and Linkage

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CDClinkageChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CDClinkageChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CDClinkageChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CDClinkageChart"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Tx_New


                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CDCtreatmentNewChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CDCtreatmentNewChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CDCtreatmentNewChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CDCtreatmentNewChart"></div>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="tx_new full-width" v-show="selectedIndicator == 'cdc_fact_sheet'">

    <div class="line">
        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Retention Proxy


                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CDCretentionChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CDCretentionChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CDCretentionChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CDCretentionChart"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="box white-background with-shadow extra-padding">
                <div class="box-heading">
                    Tx_Net_New

                    <div class="box-heading-toolbar dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" onclick="downloadCsv('CDCnetNewChart')" class="dropdown-item">
                                <i class="flaticon2-sheet"></i>
                                <span>Download CSV</span>
                            </a>
                            <a href="#" onclick="downloadPng('CDCnetNewChart')" class="dropdown-item">
                                <i class="flaticon2-image-file"></i>
                                <span>Download PNG</span>
                            </a>
                            <a href="#" onclick="downloadPdf('CDCnetNewChart')" class="dropdown-item">
                                <i class="flaticon2-paper"></i>
                                <span>Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <div class="chart" id="CDCnetNewChart"></div>
                </div>
            </div>
        </div>

    </div>

</div>
