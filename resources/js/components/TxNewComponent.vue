<template>
    <div class="tx_new full-width" v-if="selectedIndicator == 'tx_new'">
        <div class="line">
            <div class="col-xl-6">
                <div class="box white-background with-shadow extra-padding">
                    <div class="box-heading">
                        Patients Newly Enrolled on ART by Sex

                        <div class="box-heading-toolbar dropdown">
                            <a href="#" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                                Export
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" onclick="downloadCsv('sexChart')" class="dropdown-item">
                                    <i class="flaticon2-sheet"></i>
                                    <span>Download CSV</span>
                                </a>
                                <a href="#" onclick="downloadPng('sexChart')" class="dropdown-item">
                                    <i class="flaticon2-image-file"></i>
                                    <span>Download PNG</span>
                                </a>
                                <a href="#" onclick="downloadPdf('sexChart')" class="dropdown-item">
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
                        Patients Newly Enrolled on ART by Age Group

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
                        Patients Newly Enrolled on ART by Sex and Age Group

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
                        Distribution of Patients Newly Enrolled on ART by location in the last 12 Months

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
                        Patients Newly Enrolled on ART by location

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

        <div class="line">
            <div class="col-xl-12">
                <div class="box white-background with-shadow extra-padding">
                    <div class="box-heading">
                        ART Initiation trend over the last 12 Months

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

    </div>
</template>

<script>
export default {
    name: "TxNewComponent"
}
</script>

<style scoped>

</style>
