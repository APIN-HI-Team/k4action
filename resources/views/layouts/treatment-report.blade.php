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

        <div class="wrapper" id="el">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-wrapper with-shadow">
                    <h4 class="sidebar-header">Apply Filters below to load data</h4>

                    <!--begin::Form-->
                    <form class="" name="filterForm" id="filterForm">
                        <div class="filter-form-body">
                            <div class="form-group">
                                <label for="selectIndicator"><i class="flaticon2-list-1"></i> Select MER Indicator</label>
                                <select class="form-control" id="selectIndicator" name="indicator">
                                    <option disabled value=""></option>
                                    <option value="tx_new">Treatment New</option>
                                    <option value="tx_curr">Treatment Current</option>
                                    <option value="tx_pvls">Treatment PVLS</option>
                                    <option value="hts_tst">HTS_TST (Inc. HTS_TST_POS)</option>

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
                                    <option value="547">Obi</option>
                                    <option value="579">Ohimini</option>
                                    <option value="470">Logo</option>
                                    <option value="245">Gboko</option>
                                    <option value="56">Apa</option>
                                    <option value="58">Ado</option>
                                    <option value="583">Oju</option>
                                    <option value="421">Katsina-Ala</option>
                                    <option value="491">Makurdi</option>
                                    <option value="273">Gwer West</option>
                                    <option value="606">Okpokwu</option>
                                    <option value="736">Ushongo</option>
                                    <option value="627">Otukpo</option>
                                    <option value="440">Konshisha</option>
                                    <option value="725">Ukum</option>
                                    <option value="741">Vandeikya</option>
                                    <option value="455">Kwande</option>
                                    <option value="705">Tarka</option>
                                    <option value="259">Guma</option>
                                    <option value="13">Ado-Ekiti</option>
                                    <option value="191">Ekiti West</option>
                                    <option value="246">Gbonyin</option>
                                    <option value="300">Ido-Osi</option>
                                    <option value="178">Efon</option>
                                    <option value="195">Emure</option>
                                    <option value="357">Irepodun-Ifelodun</option>
                                    <option value="320">Ijero</option>
                                    <option value="329">Ikere</option>
                                    <option value="330">Ikole</option>
                                    <option value="190">Ekiti South-West</option>
                                    <option value="189">Ekiti East</option>
                                    <option value="360">Ise/Orun</option>
                                    <option value="636">Oye</option>
                                    <option value="341">Ilejemeje</option>
                                    <option value="40">Akure South</option>
                                    <option value="34">Akoko North West</option>
                                    <option value="600">Ondo East</option>
                                    <option value="621">Ose</option>
                                    <option value="303">Ifedore</option>
                                    <option value="315">Ilaje</option>
                                    <option value="39">Akure North</option>
                                    <option value="36">Akoko South East</option>
                                    <option value="33">Akoko North East</option>
                                    <option value="588">Okitipupa</option>
                                    <option value="342">Ile Oluji Okeigbo</option>
                                    <option value="601">Ondo West</option>
                                    <option value="557">Odigbo</option>
                                    <option value="353">Irele</option>
                                    <option value="35">Akoko South West</option>
                                    <option value="294">Idanre</option>
                                    <option value="635">Owo</option>
                                    <option value="8">Abeokuta South</option>
                                    <option value="7">Abeokuta North</option>
                                    <option value="179">Yelwa North</option>
                                    <option value="306">Ifo</option>
                                    <option value="316">Ijebu East</option>
                                    <option value="319">Ijebu ode</option>
                                    <option value="317">Ijebu North</option>
                                    <option value="180">Yewa South</option>
                                    <option value="349">Imeko-Afon</option>
                                    <option value="352">Ipokia</option>
                                    <option value="672">Sagamu</option>
                                    <option value="14">Ado-Odo Ota</option>
                                    <option value="652">Remo North</option>
                                    <option value="545">Obafemi Owode</option>
                                    <option value="368">Isokan</option>
                                    <option value="172">Ede South</option>
                                    <option value="185">Ejigbo</option>
                                    <option value="175">Ife East</option>
                                    <option value="174">Ife Central</option>
                                    <option value="610">Oriade</option>
                                    <option value="358">Irewole</option>
                                    <option value="344">Ilesa West</option>
                                    <option value="340">Ila</option>
                                    <option value="176">Ife North</option>
                                    <option value="626">Osogbo</option>
                                    <option value="378">Iwo</option>
                                    <option value="280">Ibadan North-East</option>
                                    <option value="568">Ogbomosho South</option>
                                    <option value="279">Ibadan North</option>
                                    <option value="299">Ido</option>
                                    <option value="181">Egbeda</option>
                                    <option value="609">Orelope</option>
                                    <option value="285">Ibarapa Central</option>
                                    <option value="595">Olorunsogo</option>
                                    <option value="15">Afijio</option>
                                    <option value="404">Kajola</option>
                                    <option value="611">Ori Ire</option>
                                    <option value="567">Ogbomosho North</option>
                                    <option value="354">Irepo</option>
                                    <option value="283">Ibadan South-West</option>
                                    <option value="282">ibadan south-east</option>
                                    <option value="30">Akinyele</option>
                                    <option value="286">Ibarapa East</option>
                                    <option value="361">Iseyin</option>
                                    <option value="667">Saki West</option>
                                    <option value="596">Oluyole</option>
                                    <option value="640">Oyo East</option>
                                    <option value="390">Jos East</option>
                                    <option value="84">Bokkos</option>
                                    <option value="91">Barkin Ladi</option>
                                    <option value="94">Bassa</option>
                                    <option value="392">Jos South</option>
                                    <option value="409">Kanam</option>
                                    <option value="391">Jos North</option>
                                    <option value="411">Kanke</option>
                                    <option value="464">Langtang North</option>
                                    <option value="487">Mangu</option>
                                    <option value="643">Pankshin</option>
                                    <option value="648">Qua&#x27;an Pan</option>
                                    <option value="678">Shendam</option>
                                    <option value="502">Mikang</option>
                                </select>

                            </div>
                            <div class="form-group" id="selectFacilitiesDiv">
                                <label><i class="flaticon2-box"></i> Facilities</label>
                                <select class="form-control kt-select2" id="selectFacilities" name="facilities" multiple="multiple">
                                    <option value="OPnJnEYeq1I">Aliade General Hospital</option>
                                    <option value="ooVgKxaybti">St. Gregory Health Center</option>
                                    <option value="IZyzmuDFVIJ">St. Vincents Hospital</option>
                                    <option value="GG2GB39VPU2">Gwer East KP One Stop Shop</option>
                                    <option value="PJJsxvEhEW5">be Gwer East</option>
                                    <option value="K4GfrZhCYcR">Aliade Comprehensive Health Centre </option>
                                    <option value="lkYAC6w1YrT">Ikpayongo Primary Health Center</option>
                                    <option value="qcPZlA9yzPu">Ijadoga Otukpa General Hospital</option>
                                    <option value="YqtrJF9sW3U">Sahara Clinic</option>
                                    <option value="bkw7eER1sQg">Uga Primary Health Center</option>
                                    <option value="FUKJdEDgVT8">Township Clinic</option>
                                    <option value="nMO8qFMjftW">Anvambe Primary Health Center</option>
                                    <option value="x0lTOYyB0Xq">Anzembe Clinic</option>
                                    <option value="hWsBYXZwHiP">General Hospital Buruku</option>
                                    <option value="GVwSWUCUWPn">Anonghul Primary Health Center</option>
                                    <option value="R76nShpbpxl">Jingir Primary Health Center</option>
                                    <option value="nnocuY5Y1ve">Agwabi Primary Health Center</option>
                                    <option value="bIMhLHumVOb">Kur Primary Health Center</option>
                                    <option value="JVUE6hcwdYf">Mbagen Community Hospital - Abwa</option>
                                    <option value="Rf1yYN2IDWc">Nongu u Kristu ke Sudan hen Tiv (NKST) Comprehensive Health Center - Garagbohol</option>
                                    <option value="dOnbIETcQXX">Nongu u Kristu ke Sudan hen Tiv (NKST) Primary Health Center - Biliji</option>
                                    <option value="kPGQXJlsGON">Tyowanye Primary Health Center</option>
                                    <option value="QBFbFh5zJWX">be Buruku</option>
                                    <option value="DbxytJIMUtE">Adi Comprehensive Health Centre</option>
                                    <option value="ylQ6RLXvHHJ">St. Martha&#x27;s Clinic and Maternity - Ugbema</option>
                                    <option value="Z4g8qfFBRMq">Obarike-Ito General Hospital</option>
                                    <option value="rjusKH8sGh2">Idekpa General Hospital</option>
                                    <option value="Awp6evwdKBu">Abeda Primary Health Center</option>
                                    <option value="p744o3LL0jI">Ikyo Primary Health Center</option>
                                    <option value="pwlvjbtM5oM">Anyiin Primary Health Center</option>
                                    <option value="QQLKjN6lqf7">Ugba Comprehensive Health Center</option>
                                    <option value="MYMZKfW4a4F">Wende Primary Health Center</option>
                                    <option value="emodKJruXyL">Gboragayo Primary Health Centre</option>
                                    <option value="bsw3naXOOX1">Igboughol Local Government Health Clinic</option>
                                    <option value="TOL2FI5yOWq">Mchia Local Government Health Center</option>
                                    <option value="VqKuYd50P6Z">Nongu u Kristu ke Sudan hen Tiv (NKST) Hospital - Anyiin</option>
                                    <option value="Sg1lTBErQMf">Dooshima Primary Health Centre</option>
                                    <option value="zBwxOyfTqwm">Iorza Primary Health Center</option>
                                    <option value="bTwuESPkfSO">Ugba General Hospital</option>
                                    <option value="ejgzakpM81n">Uzer Local Government Health Center</option>
                                    <option value="H9hiuwR1BNn">Abeda Shittille Primary Health Center</option>
                                    <option value="SLUh7AIPl3P">Central Hospital Anyiin</option>
                                    <option value="RCVEsesYe2Z">Live Clinic</option>
                                    <option value="mmlEZKqZ9Ag">Maranatha Clinic Ugba</option>
                                    <option value="wPBzr3bpuFY">Tordoo Clinic</option>
                                    <option value="IxCvwERm4RC">Zamzam Primary Health Center</option>
                                    <option value="cePHHjZCGUB">Akumator Health Centre</option>
                                    <option value="zBp4fj9LC7v">Ayilamo Primary Health Center</option>
                                    <option value="CbpO0v7XB53">Doodoo Clinic</option>
                                    <option value="r2lBjhZUg8j">Farmter Clinic Abeda</option>
                                    <option value="LAyyrDvKqGe">Gonduzua Primary Health Center</option>
                                    <option value="ZewNOZ5xMp9">be Logo</option>
                                    <option value="ucKq1EdGOxF">Mba Agbanaya Primary Health Center</option>
                                    <option value="XBI5zRTPIDJ">NKST Ikpa Primary Health Center</option>
                                    <option value="pyxmAN33vlC">NKST Kuhe Primary Health Center</option>
                                    <option value="mM8cuGsrg9b">be Gboko General Hospital</option>
                                    <option value="BIf4NpUc9tv">Akaa Primary Health Center</option>
                                    <option value="I2YSBeACOiz">Baki Clinic</option>
                                    <option value="i0MUgv6vIAM">be Gboko</option>
                                    <option value="NKBX6MV18q7">Gboko East Comprehensive Health Center</option>
                                    <option value="LQY80730nX8">Nongu u Kristu ke Sudan hen Tiv (NKST) Hospital - Mkar</option>
                                    <option value="ucA8oXS8NE4">Sev-Av Foundation - Gboko</option>
                                    <option value="isxf76zcl0z">St. Luke&#x27;s Hospital</option>
                                    <option value="iMjkGLzXZVu">Lord Is Saviour Clinic and Maternity</option>
                                    <option value="KCeTZcNxHny">Myom Hospital - Gboko</option>
                                    <option value="tYcGecpDRkl">Kator Clinic</option>
                                    <option value="hd4uvUNJmVb">Akpagher Primary Health Center</option>
                                    <option value="WMifDMychYH">Atuna Clinic and Maternity</option>
                                    <option value="oY149KIEnUH">Gboko KP One Stop Shop</option>
                                    <option value="W4Td0Rr6gkF">Helen Clinic and Maternity</option>
                                    <option value="UKpHt1NMIzG">Mercy Hospital</option>
                                    <option value="wmDk1IHm8kU">St. Veronica Health Center</option>
                                    <option value="EyvD2SO18Ls">Three Brothers Transport  Hospital - Gboko</option>
                                    <option value="zR7wi1nIM3l">Victory Hospital - Gboko</option>
                                    <option value="yMpFDy64jKb">Royal Hospital</option>
                                    <option value="fhd28Wdp5gV">Ugbokpo General Hospital</option>
                                    <option value="RWy8gQx6BBr">Igumale General Hospital</option>
                                    <option value="rEQ6l5PTFp8">Bethesda Hospital - Ikachi</option>
                                    <option value="emFu7t4hkIR">Oju General Hospital</option>
                                    <option value="DluyXbyv63Q">be Katsina-Ala</option>
                                    <option value="iltm59K9ug3">Gbise Primary Health Centre</option>
                                    <option value="m71YCQ1vobL">Mbaton Primary Health Center</option>
                                    <option value="qoDgsyKHeoI">be Katsina-Ala General Hospital</option>
                                    <option value="f9pNjCTIkeV">Mba Agberabu Primary Health Centre</option>
                                    <option value="SBpTQMTj2D6">Ndele Primary Health Center</option>
                                    <option value="fqQMHzXeExZ">Nongu u Kristu ke Sudan hen Tiv (NKST) Primary Health Center - Anber</option>
                                    <option value="ph0DmxOzLrH">St. Mary&#x27;s Primary Health Center - Tor Donga</option>
                                    <option value="ZbriPIRKgkW">Jou Mbatyough Primary Health Center</option>
                                    <option value="X6NyY4AiCxp">Township Comprehensive Health Center</option>
                                    <option value="KLtclHppMIU">Une Local Government Health Centre</option>
                                    <option value="ZBXG7XEJ03X">Abakor Primary Health Care</option>
                                    <option value="VJPhKVM98uw">Adikpo Katsina-Ala Primary Health Centre</option>
                                    <option value="Jpn6N6zqMLg">Igbabaka Primary Health Centre</option>
                                    <option value="dXAyAAaM53N">Mbasar Primary Health Centre</option>
                                    <option value="Bx2hbPaU0O1">Nagu Primary Health Centre</option>
                                    <option value="yRpzCa8G6SZ">Nahuta Hospital</option>
                                    <option value="voNNZ57SXoP">Nguher Clinic</option>
                                    <option value="x9AGFcyHbas">Nongu u Kristu ke Sudan hen Tiv (NKST) Hospital - Sai</option>
                                    <option value="bD3Z7sBYAkk">Nongu u Kristu ke Sudan hen Tiv (NKST) Primary Health Center - Kasar</option>
                                    <option value="jGti2H2XezH">Tarvachan Comprehensive Health Center</option>
                                    <option value="W5NNtTAwz9t">Tordonga Primary Health Center</option>
                                    <option value="GCOrXvJq3Aq">World Health System Sai</option>
                                    <option value="SAvDO8AVdFH">Dooter Clinic</option>
                                    <option value="fj8v2Srxtyx">Convenant Clinic</option>
                                    <option value="UWfo9Vcmg6t">Gbor Comprehensive Health Center</option>
                                    <option value="ShOkkjO7q4d">Amafor Primary Health Center</option>
                                    <option value="iBE2tO1KDku">Numbeve Primary Health Centre</option>
                                    <option value="U929QXtAK0i">Nyitar Local Government Health Center</option>
                                    <option value="Xoj1RSPZgNb">Seafa Clinic and Maternity</option>
                                    <option value="W0z2Y4xAH3N">Salem Clinic - Gbor</option>
                                    <option value="rQOXT4Cy2Pj">Ikpaukur Local Government Health Center</option>
                                    <option value="j1d80tpRRRb">Mbatyula Local Goverment Health Centre</option>
                                    <option value="Km93XCNZYCr">Rahama Clinic and Maternity</option>
                                    <option value="EA0gMmZjNn6">Federal Medical Center - Makurdi</option>
                                    <option value="EH08kwk1foy">Makurdi KP One Stop Shop</option>
                                    <option value="baLNc1OTsyV">Immaculate Hospital</option>
                                    <option value="dWMSkFIYteW">Makurdi Family Support Program Clinic</option>
                                    <option value="s9bl6apI0dc">Hemko Hospital</option>
                                    <option value="CIb6wzAz9SW">Sandra Hospital</option>
                                    <option value="FuHdYbMsHCb">Ushakaa Hospital</option>
                                    <option value="LKbSI2dBhSa">Yima Hospital</option>
                                    <option value="xbHk6A9M5Ah">Bishop Murray Medical Center</option>
                                    <option value="dYTwhf3cV9I">Queens Clinic</option>
                                    <option value="AgRjHcsC4wf">Benue State University Teaching Hospital</option>
                                    <option value="P82OYKREDEj">City Hospital</option>
                                    <option value="oDccjROEjrd">Ayaka Primary Health Center</option>
                                    <option value="LBAGrpkYXFZ">Grace Cottage Hospital</option>
                                    <option value="aITz5usak9o">Hope Hospital</option>
                                    <option value="OvrEXmiUvLy">Jolua Hospital</option>
                                    <option value="LU9X6cRfdAJ">King Cross Clinic and Maternity</option>
                                    <option value="yNRTTH6Bi6I">Multicare Hospital</option>
                                    <option value="XAGjhppjhh3">Northbank General Hospital</option>
                                    <option value="DMLv2nDXczA">Our Saviour Hospital</option>
                                    <option value="rLuGqHLz5O0">Asiasa Primary Health Center</option>
                                    <option value="wGplUjLqgbW">be Madonna Hospital</option>
                                    <option value="FJ3vUFiJ6hq">KPIF Makurdi OSS</option>
                                    <option value="Q2Gb99dokfK">be Makurdi</option>
                                    <option value="bU41bAD1r84">be Gwer West</option>
                                    <option value="Guf2jRM5SyK">Mbaakem Health Centre</option>
                                    <option value="eeMmUo80f1k">Tongov Primary Health Centre</option>
                                    <option value="Ct8Iraz4Wwz">Onmba Aondo Comprehensive Health Center</option>
                                    <option value="AXPIJPRXo5s">Aba Health Centre</option>
                                    <option value="ZRSpxqpZDVS">Abiam Family Support Program Clinic</option>
                                    <option value="A6vVFRBdTaM">General Hospital Naka</option>
                                    <option value="nn4VvQS8SqP">Jimba Primary Health Center</option>
                                    <option value="SSj1HfTYnTs">Jor Maternal and Child Health Clinic</option>
                                    <option value="CtqZO3PKNim">Mbalosu Primary Health Centre</option>
                                    <option value="LVwYC7JU75B">Mbashija Primary Health Centre</option>
                                    <option value="mfPtKtcH3hA">St. Francis Primary Health Center - Agagbe</option>
                                    <option value="KWB8RTTIeya">Fr. Mathias Clinic</option>
                                    <option value="YLapZuUgSyj">Aondana Health Clinic</option>
                                    <option value="ugwMUWu3le4">European Economic Community Health Clinic</option>
                                    <option value="EJQh7G0WPzD">Mbaier Health Centre</option>
                                    <option value="Nfc7dRyjli0">Nakar Gwer West Comprehensive Health Center</option>
                                    <option value="oN3LGtxIZlk">Kwashon Primary Health Centre</option>
                                    <option value="WqanRoYZhre">Okopga General Hospital</option>
                                    <option value="BX3EuUL4p5y">St. Mary&#x27;s Hospital - Okpoga</option>
                                    <option value="jkTZCfjUJSI">Holy Name Clinic - Ugbokolo</option>
                                    <option value="Ce4ACYPH1gr">Lessel General Hospital</option>
                                    <option value="apUWJiF9sQ2">be Ushongo</option>
                                    <option value="qHFn6eKPzZR">Atekombo Comprehensive Health Center</option>
                                    <option value="CZugrC0pZ3a">Hegha Comprehensive Health Center</option>
                                    <option value="oOwDebIrySs">Kartyo Comprehensive Health Center</option>
                                    <option value="UdO3AJxt6D7">Mayange Primary Health Care</option>
                                    <option value="yk6RVaDElKT">Nongu u Kristu ke Sudan hen Tiv (NKST) Clinic -Aku</option>
                                    <option value="KNwYLS8wBMQ">Nongu u Kristu ke Sudan hen Tiv (NKST) Health Center - Gbe</option>
                                    <option value="oVvqxfB2P4W">Oostra-Gum Clinic and Maternity</option>
                                    <option value="AC09BTkiT9k">Ushongo Comprehensive Health Center</option>
                                    <option value="Bt9AmJKxN28">Waapera Comprehensive Health Center</option>
                                    <option value="cIKRpGcM5yd">Yaakar Comprehensive Health Center</option>
                                    <option value="pVuatRaVnJu">Nongu u Kristu ke Sudan hen Tiv (NKST) Health Center - Lessel</option>
                                    <option value="XS7oHkodgdY">Akerior Comprehensive Health Center</option>
                                    <option value="cOc62Ku53kR">Tseghem Comprehensive Health Center</option>
                                    <option value="mHQFWXYfC6i">Phesset Clinic</option>
                                    <option value="hs46vwSoags">St. Daniel Hospital</option>
                                    <option value="UPUz4QHOmfd">Otia Hospital - Otukpo</option>
                                    <option value="G1I22uSE1YC">Ihotu Clinic And Maternity</option>
                                    <option value="U69eo6GL6P1">Sev-Av Foundation - Otukpo</option>
                                    <option value="ElnOS6Ya1ox">May Memorial Hospital</option>
                                    <option value="qNdmOBdGQhk">Otukpo KP One Stop Shop</option>
                                    <option value="WCzlcV9pGtM">Salem Hospital</option>
                                    <option value="xDrZUl3o7DR">Otukpo Comprehensive Health Center</option>
                                    <option value="sjKFIaqLXzI">Oturkpo General Hospital</option>
                                    <option value="jwRjWD3wLjp">St. Charles&#x27; Hospital</option>
                                    <option value="sIqd320H5pa">St. Joseph&#x27;s Hospital-Ogobia</option>
                                    <option value="ugvUhWcPhsa">Ikumbur Memorial clinic</option>
                                    <option value="Vwphz4aVBkw">Agidi Primary Health Centre</option>
                                    <option value="xf0d6Ievr0Y">Akputu  Primary Health Center</option>
                                    <option value="A0oG89zfO3P">Bonta Family Support Program Clinic</option>
                                    <option value="RaK8oHAcaJx">Dio Primary Health Center</option>
                                    <option value="Kx8nR3Z0zoJ">Hope Hospital - Gungul</option>
                                    <option value="oR3iWfmLDLd">Igbughul Primary Health Center</option>
                                    <option value="ADRcchaSF89">Jirgba Primary Health Center</option>
                                    <option value="t8yzGeF3QOZ">Mimi Clinic and Maternity</option>
                                    <option value="tmdPeVe2bj9">Nongu u Kristu ke Sudan hen Tiv (NKST) Clinic - Ishua</option>
                                    <option value="lT0dFPuROo5">Royal Clinic and Maternity Wuese</option>
                                    <option value="ES15z3zgFpM">Tyoate Comprehensive Health Center</option>
                                    <option value="jUhaJSvsg2f">Uboagere Comprehensive Health Center</option>
                                    <option value="OK3KBevBxuF">Agbeede Primary Health Center</option>
                                    <option value="uE7DozqVDx3">Mimidoo Clinic and Maternity - Gungul</option>
                                    <option value="YMwV767vaxO">Leke Clinic and Maternity</option>
                                    <option value="fZtEYsSUToC">Luter Health Clinic</option>
                                    <option value="lS9OJNmawzr">Usaka Health Clinic Tsuwe</option>
                                    <option value="DbQwJh2aSqj">Nyam Ugbeh Clinic</option>
                                    <option value="VBS2KAxTWl8">Tse-Agbaragba Primary Health Center</option>
                                    <option value="zOFJx0iZI6j">Korinya Primary Health Center</option>
                                    <option value="KLG4R1DqCDW">St. Joseph Maternity Clinic - Korinya</option>
                                    <option value="Hb4aAEXMUMh">Mhen Health Clinic Jov-Mbavaa</option>
                                    <option value="lme06fE8INv">Tse Agberagba General Hospital</option>
                                    <option value="gpgLJrma8Tm">be Konshisha</option>
                                    <option value="rkmUcjVWIEG">El Shaddai Clinic - Achocho</option>
                                    <option value="LcmatEKK2mm">Awajir Primary Health Center</option>
                                    <option value="AptnTvyenuo">Asambe Primary Health Center</option>
                                    <option value="yoiyriXtW1G">Aterayange Comprehensive Health Center</option>
                                    <option value="Oexe9zs1Ehb">Ayati Primary Health Center</option>
                                    <option value="xHCRTxh1UoC">Chito Local Government Health Center</option>
                                    <option value="JKhF15NVQ8N">Hwembe Comprehensive Health Center</option>
                                    <option value="vdABjhoRp53">Iorna Clinic</option>
                                    <option value="Ikw1ubU63ji">Kafa Clinic</option>
                                    <option value="XP2njsDoK3u">Melabu Comprehensive Health Center</option>
                                    <option value="AUxnTCxG8Hn">Nongu u Kristu ke Sudan hen Tiv (NKST) Primary Health Center - Pervkyaa</option>
                                    <option value="kOmUbf3xx0o">Salvation Hospital</option>
                                    <option value="EGG0mUGRKdC">Sankera Family Support Program Clinic</option>
                                    <option value="ROzMKxCUG62">St. Mary Primary Health Center - Chito</option>
                                    <option value="PYkGrLe6kRy">Vaase Local Government Health Center</option>
                                    <option value="cvkiCumu2an">be Ukum</option>
                                    <option value="r0E0bUsIjrC">King of Kings Clinic and Maternity</option>
                                    <option value="Ki7oL3P60Gk">Jordan Clinic and Maternity</option>
                                    <option value="rU0owasuzGp">Afia Comprehensive Health Center</option>
                                    <option value="ZHUzBV58GYR">Kyado Primary Health Center</option>
                                    <option value="RL4SNIxhQBi">Zaki-Biam City Clinic and Maternity</option>
                                    <option value="j2rgCN38K5P">Woma Clinic and Maternity</option>
                                    <option value="vDwjnLtvE9E">Nongu u Kristu ke Sudan hen Tiv (NKST) Hospital- Zaki Biam</option>
                                    <option value="qk2SW3ifeyo">Sankera General Hospital</option>
                                    <option value="UwPzLQbX6z0">St. Anthony&#x27;s Hospital - Zaki Biam</option>
                                    <option value="fNNUQiVT6x3">Nongu u Kristu ke Sudan hen Tiv (NKST) Hospital - Mbaakon</option>
                                    <option value="iU5WiOjaPBb">Sev-Av Foundation - Vandeikya</option>
                                    <option value="r6flrs4ehWz">St. Thomas Hospital - Ihugh</option>
                                    <option value="fCwe9dV4kjP">Vandeikya General Hospital</option>
                                    <option value="uYCM5I1Rh34">Vandeikya KP One Stop Shop -Virtual</option>
                                    <option value="FJ28GRyMVq9">be Vandeikya</option>
                                    <option value="rl5sKUJnKn3">St. Paul&#x27;s Clinic - Ikyaator</option>
                                    <option value="Q47OYvdxPhQ">St. Paul&quot;s Clinic - Sambe</option>
                                    <option value="DPFnexGxRAT">St. Elizabeth Hospital</option>
                                    <option value="v7xGqiid6Pg">be Kwande</option>
                                    <option value="ecDDJ8UV2tN">Holy Child Clinic and Maternity</option>
                                    <option value="vhponVEgOwi">Nongu u Kristu ke Sudan hen Tiv (NKST) Primary Health Center - Ahobee</option>
                                    <option value="T8MofW5CkkU">36 Matyrs Clinic- Mbape</option>
                                    <option value="lgXwl4gfzgN">Manyam Primary Health Center</option>
                                    <option value="G9RIOzlKB5n">Gabriel Suswam Cottage Hospital - Tse Ugbena</option>
                                    <option value="kDvVOaWbp0s">Avaa Gbande Memorial Clinic and Maternity</option>
                                    <option value="Ma9SyRevcp3">Icheen Clinic and Maternity</option>
                                    <option value="NrQyKoUUTjl">Nongu u Kristu ke Sudan hen Tiv (NKST) Hospital - Jato Aka</option>
                                    <option value="mvMjGraGxvu">Adikpo General Hospital</option>
                                    <option value="ZOw5RCxEDrh">St. Monica&#x27;s Hospital - Adikpo</option>
                                    <option value="kexwjLUlsZy">Aso Comprehensive Health Center</option>
                                    <option value="InmLlQBslD6">Asukunya Primary Health Center</option>
                                    <option value="aUsI0GxqwfK">Nongu u Kristu ke Sudan hen Tiv (NKST) Clinic - Wannune</option>
                                    <option value="UbFbAGiSBNv">Nongu u Kristu ke Sudan hen Tiv (NKST) Health Center - Uchi</option>
                                    <option value="PyyoRwjaZ6Z">Aboho Primary Health Centre</option>
                                    <option value="uPRX8ftEmL5">Gwarche Primary Health Centre</option>
                                    <option value="G5eD8nBMRPO">Kpe-Ambila Primary Health Centre</option>
                                    <option value="jUXd98nF6tO">Tse-Akiishi Primary Health Center</option>
                                    <option value="nV2DKeGv8AQ">Tiortyu Local Government Health Center</option>
                                    <option value="UPvsRuG3lnz">Atighir Local Government Health Center</option>
                                    <option value="ZTPVFq6u1nN">Tse-Tiah Primary Health Centre</option>
                                    <option value="tCLZNcfcMy3">Wannune General Hospital</option>
                                    <option value="zJseTdMM6Ph">St. Christopher Health Clinic - Wannune</option>
                                    <option value="SNb8IS5SukA">St. Michaels Clinic</option>
                                    <option value="RlGe0zMvrra">Township Clinic - Wannune</option>
                                    <option value="eFnaQTWW1DC">be Tarka</option>
                                    <option value="YbtVeNOCICl">be Guma</option>
                                    <option value="aDbNi9qbrTa">Abinisi Primary Health Center</option>
                                    <option value="t5kQRj3Oqrp">Nongu u Kristu ke Sudan hen Tiv (NKST) Comprehensive Health Center - Isherev</option>
                                    <option value="UD9kpV91uHO">St. Michael&#x27;s Clinic - Agasha</option>
                                    <option value="YlxyMD0zmCn">Tugudu Primary Health Center</option>
                                    <option value="NG8ugV9Xv57">Ekiti State University Teaching Hospital Ado-Ekiti</option>
                                    <option value="itv14Kob5b5">Okesa Ekiti Comprehensive Health Center</option>
                                    <option value="w537PeRTb2k">ek Ado-Ekiti</option>
                                    <option value="ftEV1iyWtuH">St. Gregory Hospital Ado-Ekiti</option>
                                    <option value="iYLBTAWo29b">Aramoko Ekiti General Hospital</option>
                                    <option value="WFsEvMCIS56">ek Ekiti West</option>
                                    <option value="MtwzdW6p7T4">ek Gbonyin</option>
                                    <option value="FjUk8l3lLuT">Ifaki Ekiti General Hospital</option>
                                    <option value="tvMCpBfPpNr">Federal Medical Center -Ido-Ekiti</option>
                                    <option value="v6VKDsRhry2">ek Efon</option>
                                    <option value="LoolSVHi1Jq">ek Emure</option>
                                    <option value="oEgdXZ6hqwZ">Emure Ekiti General Hospital</option>
                                    <option value="bxXIciySrPz">Iyin Ekiti General Hospital</option>
                                    <option value="iwKXh9EaNPG">Ijero Ekiti State Specialist Hospital</option>
                                    <option value="H9w6ZU7BCh5">Ikere Ekiti State Specialist Hospital</option>
                                    <option value="FLIkT6NShZE">ek Ikere</option>
                                    <option value="n3F9ZEqPUtq">ek Ikole</option>
                                    <option value="ClLtOoKCTAz">Ikole-Ekiti State Hospital</option>
                                    <option value="gaRACh9QB6a">ek Ekiti South-West</option>
                                    <option value="iSMGSwSkbiY">Ilawe Ekiti Comprehensive Health Center</option>
                                    <option value="IaAbEGvnhF7">Omuo Ekiti General Hospital</option>
                                    <option value="Z8NBMmojNEN">ek Ekiti East</option>
                                    <option value="jeHlpPF831R">ek Ise-Orun</option>
                                    <option value="IjAiByZWjsw">Oye Ekiti General Hospital</option>
                                    <option value="m0MGjVaytWB">Iye Ekiti General Hospital</option>
                                    <option value="BobjH7xBdDI">Arakale Comprehensive Health Center</option>
                                    <option value="GizRQMmx10i">Mother And Child Hospital - Akure</option>
                                    <option value="yfLNltOE3ES">State Specialist Hospital - Akure</option>
                                    <option value="FpADQG6JcC5">on Akure South</option>
                                    <option value="pjkbKPartQG">First Mercy Specialist Hospital</option>
                                    <option value="kUHqhJqoDQA">Irun Akoko General Hospital</option>
                                    <option value="eFlBpM60SRs">Bolorunduro General Hospital</option>
                                    <option value="R9sKiGC2aQS">Ido-Ani General Hospital</option>
                                    <option value="aRt2sinKKTL">Ifon Basic Health Center</option>
                                    <option value="WLQLVZAd77i">on Ose</option>
                                    <option value="T0DcrdHMRp9">Igbara Oke General Hospital</option>
                                    <option value="nxPuG6XnkxA">on Ilaje</option>
                                    <option value="rEOLbuPeN6z">Igbokoda General Hospital</option>
                                    <option value="wuh106bjAdL">Oba-Ile Comprehensive Health Center</option>
                                    <option value="A57n2GGTg85">Iju Itaogbolu General Hospital</option>
                                    <option value="DmNUbQb4PRU">Ipe Akoko General Hospital</option>
                                    <option value="SiZyocWf5kz">on Akoko South East</option>
                                    <option value="PJ710HPntzX">on Akoko North East</option>
                                    <option value="PVJ1iBCOkrp">State Specialist Hospital - Ikare</option>
                                    <option value="H33MvD7JqC0">Igbotako General Hospital</option>
                                    <option value="ZfHqkRkgtyn">Okitipupa State Specialist Hospital</option>
                                    <option value="cealFXAKL2I">on Okitipupa</option>
                                    <option value="pHbdtisHupE">Ile-Oluji General Hospital</option>
                                    <option value="JKUabrYA2oL">State Specialist Hospital - Ondo</option>
                                    <option value="Xubfc1xadN5">Moferere-Oja Comprehensive Health Center</option>
                                    <option value="l0oK5kCcifq">Mother and Child Hospital - Ondo</option>
                                    <option value="GAGxDMx8uvm">on Ondo West</option>
                                    <option value="dZRlykTqZhw">on Odigbo</option>
                                    <option value="SGlwI0BB3NM">Ore General Hospital</option>
                                    <option value="Z9lldlqwYSa">Ode-Irele Comprehensive Health Center</option>
                                    <option value="yoKGtFTi1Ge">Ode Irele General Hospital</option>
                                    <option value="Ct9GX0tFs5R">Supare Model Primary Health Centre</option>
                                    <option value="zhu21WthI6C">Iwaro-Oka General Hospital - Akoko</option>
                                    <option value="GsMlnR6XQ5k">St. Catherine&#x27;s Hospital - Iwaro-Oka</option>
                                    <option value="AZUh5K9JF57">Idanre General Hospital</option>
                                    <option value="InBkYWArQFT">on Idanre</option>
                                    <option value="yQa2xS9x96u">on Owo</option>
                                    <option value="Lf5dipBTT0Z">Federal Medical Center - Owo</option>
                                    <option value="uqUGRphflWb">Owo General Hospital</option>
                                    <option value="jnZPTIbnS5X">Isaipen Basic Health Center</option>
                                    <option value="DvOjpCpBtJj">Sacred Heart Catholic Hospital-Abeokuta</option>
                                    <option value="cIelM4DwtGv">Federal Medical Center - Abeokuta</option>
                                    <option value="DGsvApy6NF9">og Abeokuta South</option>
                                    <option value="HYWDkjDbtyu">og State Hospital- Abeokuta</option>
                                    <option value="zDMCQqdfBSs">Sabo Primary Health Care Center</option>
                                    <option value="muPgi07IQTK">Ayetoro General Hospital</option>
                                    <option value="KK0KH975RZH">Agbado Primary Health Care Center</option>
                                    <option value="rQsDr0APXzb">Jesus is Love and Power Catholic Hospital - Ifo</option>
                                    <option value="CO28PVyyzuQ">Ifo General Hospital</option>
                                    <option value="Ln5bTDtGDif">og Ifo</option>
                                    <option value="ZZJZfQ4WolH">Ijebu Ife General Hospital</option>
                                    <option value="pYomDDNQ6hO">og Ijebu Ode</option>
                                    <option value="eg6CMvHMI9h">State Hospital - Ijebu Ode</option>
                                    <option value="iIXPQlWb4Rg">og St Joseph Catholic Hospital -  Ijebu Igbo</option>
                                    <option value="ewh51nY512W">og Yewa South</option>
                                    <option value="XY5wcfahN5W">og Yewa North</option>
                                    <option value="WnA94tQ9PZu">Specialist Hospital - Ilaro</option>
                                    <option value="VGPZqV1kLlD">Isaga Owode Health Center</option>
                                    <option value="yEldGzZy7kS">St. Mary&#x27;s Clinic - Ajilete</option>
                                    <option value="gGsinQ88Sq5">Imeko Primary Health Center</option>
                                    <option value="mvsGm4vAS0k">og Imeko-Afon</option>
                                    <option value="D6rivmJFt33">og Ipokia</option>
                                    <option value="Ded9l89WnBh">Idi Iroko General Hospital</option>
                                    <option value="d0enmAlNy7c">Makun Primary Health Care</option>
                                    <option value="K0W6Eo9ypUn">Ogijo Primary Health Care</option>
                                    <option value="KTVjcTH4JeG">Olabisi Onabanjo University Teaching Hospital</option>
                                    <option value="cx0xFi6L7Fp">og Sagamu</option>
                                    <option value="O7WdfvvhhmG">og State Hospital- Ota</option>
                                    <option value="ogBio975rv6">Atan Model Primary Health Center</option>
                                    <option value="ZF2mGWrqp1t">og Ado-Odo Ota</option>
                                    <option value="RuXsXz3hhGC">Ijoko Primary Health Center</option>
                                    <option value="fCB9EIDg0lM">Ota Primary Health Center</option>
                                    <option value="jrlSMIy4Udi">Sango Ota Primary Health Center</option>
                                    <option value="GOVRwTHYMeH">Isara State Hospital</option>
                                    <option value="hE6LoL36XgW">Ofada Health Clinic</option>
                                    <option value="y9wt3U3r2hZ">The Redeemer&#x2019;s Health Center</option>
                                    <option value="GjC1yqDHyxC">Obafemi Owode General Hospital</option>
                                    <option value="rhg7o351Ogx">os Isokan</option>
                                    <option value="NrAixqBOeRR">Catholic Hospital and Maternity - Okeola</option>
                                    <option value="qoiO0tapOKa">Ede Specialist Hospital</option>
                                    <option value="PWfDHBvn1hw">os Ede South</option>
                                    <option value="wVmQt7UrWYq">Ede South KP OSS</option>
                                    <option value="dzhjTRHGqu0">os Ejigbo</option>
                                    <option value="LH8aXd0aKgT">Ejigbo Baptist Hospital</option>
                                    <option value="nE05pmOYy9Z">Oke-Ogbo General Hospital -  Ile Ife</option>
                                    <option value="Wf7A67DZQDR">os Ife East</option>
                                    <option value="tr5rm0vaxGG">os Ife Central</option>
                                    <option value="u4jq9CmP9dk">Obafemi Awolowo University Teaching Hospital Complex</option>
                                    <option value="xGKk2hlvtUz">Seventh Day Adventist Hospital - Ile-Ife</option>
                                    <option value="u3qzTFubA8g">Ijebu-Ijesha General Hospital</option>
                                    <option value="AIWlVFpaxFZ">os Irewole</option>
                                    <option value="gqn7FlDPWzJ">Ikire Specialist Hospital</option>
                                    <option value="JE2mJgfuG8h">Ilesa General Hospital</option>
                                    <option value="k9ilIScUQLb">os Ila</option>
                                    <option value="hln2LIDV1Xl">Ila Orangun State Hospital</option>
                                    <option value="ikrzY7sZjRk">Our Lady of Lourdes Hospital - Ipetumodun</option>
                                    <option value="OqZ11xWhJlB">os Ife North</option>
                                    <option value="kzB32IGuzWj">os State Hospital- Asubiaro</option>
                                    <option value="wLldH8OpVNF">os Osogbo</option>
                                    <option value="mgEojaVd0QS">Ladoke Akintola Teaching Hospital - Oshogbo</option>
                                    <option value="tuPG3r8X0RC">Our Lady of Fatima Catholic Hospital - Jaleyemi</option>
                                    <option value="RjMnBpvNTLM">State Hospital - Iwo</option>
                                    <option value="VWzOuFbOVsE">os Iwo</option>
                                    <option value="d5p5Ehrl5IH">Victory Specialist Hospital -  Iwo</option>
                                    <option value="dFj2ILZVfUi">oy Ibadan North-East</option>
                                    <option value="L8ySVydOOzd">St. Peters General Hospital - Aremo</option>
                                    <option value="du2NydHQODD">Alafara Oje Primary Health Center</option>
                                    <option value="WSxGzRDVpuS">Iwo Road Primary Health Center</option>
                                    <option value="fjiKMWnNBwn">Ogbomosho State Hospital</option>
                                    <option value="p7y3haZd6OO">oy Ogbomosho South</option>
                                    <option value="v9Bfpm0vPBf">Oyo State One Stop Shop (OSS) -  Ibadan</option>
                                    <option value="bxpxkMEq3fq">Comfort Medical Centre -  Oyo</option>
                                    <option value="In3kBMCkxaK">oy OLA Catholic Hospital- Oluyoro- Ibadan</option>
                                    <option value="QdL8RSYxeLg">University College Hospital</option>
                                    <option value="MamvPxaqiTG">Adeoyo Maternity Hospital</option>
                                    <option value="lUK0PY9z0dH">Idi Ogungun Primary Health Center</option>
                                    <option value="uU3mfYyerBo">Apete Primary Health Center</option>
                                    <option value="JzYcMwOP9J6">St. Dominics Catholic Hospital - Ogungbade</option>
                                    <option value="oXanQ9NfzcJ">Igboho General Hospital</option>
                                    <option value="wYu6410ctAh">Olugbon Medical Centre -  Igboora</option>
                                    <option value="ty9jMW3us5b">Igbeti General Hospital</option>
                                    <option value="p3M4FdE8RkC">oy Olorunsogo</option>
                                    <option value="IlkoZAYAoQs">oy Afijio</option>
                                    <option value="Klu5oTZCxfx">Ilora General Hospital</option>
                                    <option value="L0SpXvHcxlr">Okeho General Hospital</option>
                                    <option value="XXgCDEMk4Ha">oy Kajola</option>
                                    <option value="jN3f776qJBx">Ikoyi-Ile Primary Health Center</option>
                                    <option value="POQZq9yYHfm">Abogunde Baaki Health Center</option>
                                    <option value="lfO3s7vhaJb">Bowen University Teaching Hospital (BUTH) -  Ogbomosho</option>
                                    <option value="ELWNSBUCfD3">oy Ogbomosho North</option>
                                    <option value="fV2Ogk0TO7p">oy Irepo</option>
                                    <option value="l7D0Lku4ECe">Kisi General Hospital</option>
                                    <option value="ZQYdcyj8Urc">St. Anne&#x27;s Anglican Hospital - Molete Ibadan</option>
                                    <option value="DpCYi3E6I4c">Jericho Specialist Hospital</option>
                                    <option value="oCR09FpTFh9">Ring Road State Hospital</option>
                                    <option value="BQvikCG40GE">Odinjo Primary Health Center</option>
                                    <option value="ljnFSN5dej3">Oranyan Primary Health Center</option>
                                    <option value="CtGoE7JQAiX">oy Ibadan South-East</option>
                                    <option value="jyHRtpRCr7M">St. Mary&quot;s Catholic Hospital - Eleta</option>
                                    <option value="o9UJUeIeW6P">Moniya Primary Health Center</option>
                                    <option value="fLGtJdQIfx4">Ojoo Primary Health Center</option>
                                    <option value="SK1svp0M4SP">Eruwa General Hospital</option>
                                    <option value="ZA3JkbqwvuA">oy Iseyin</option>
                                    <option value="o9zWHFjhquv">Iseyin General Hospital</option>
                                    <option value="Inr4R6Tk5fE">Our Lady&#x27;s Catholic Hospital - Iseyin</option>
                                    <option value="x6uBaUpHFXY">Baptist Medical Center - Saki</option>
                                    <option value="cNbVnYusOlF">oy State Hospital- Saki</option>
                                    <option value="iecxi9sRFhf">Lad Medical Centre -  Ibadan</option>
                                    <option value="gp5xo74SqKO">Adaramagbo Olomi Primary Health Center</option>
                                    <option value="sSruFErLzP3">Shekina Medical Centre -  Oyo</option>
                                    <option value="appJzgMDcmf">oy State Hospital- Oyo</option>
                                    <option value="Ci4IlJo0THV">Angware General Hospital</option>
                                    <option value="D1XE609n41l">pl Bokkos</option>
                                    <option value="Y67HDCTta2a">Bokkos Cottage Hospital</option>
                                    <option value="gevUQQwMYsl">pl Barkin Ladi</option>
                                    <option value="HbuBf1D4gmG">Barkin Ladi General Hospital</option>
                                    <option value="Le18r1aY7bi">Seventh Day Adventist (SDA) Hospital - Jengre</option>
                                    <option value="fRmH1IcpdA7">pl Bassa</option>
                                    <option value="X3znG2aFpsf">Bassa Cottage Hospital</option>
                                    <option value="KliDyHkXDRm">Dadin Kowa Comprehensive Health Center</option>
                                    <option value="n3n9tC9qDI4">Evangelical Church of West Africa (ECWA) Comprehensive Hospital - Bukuru</option>
                                    <option value="a0wh6o0Urau">Our Lady of Apostles Hospital &amp; Orphanage -  Zawan</option>
                                    <option value="zBpF1qbeHxk">pl Jos South</option>
                                    <option value="kXMpdZaDwxW">Church of Christ in Nigeria (COCIN) Clinic - Gyel-Bukuru</option>
                                    <option value="fEPSauwf6T7">Vom Christian Hospital</option>
                                    <option value="wyclwPixYHK">Bukuru Express Primary Health Center</option>
                                    <option value="wZ4FJfYUSXp">Dengi General Hospital</option>
                                    <option value="KW1MmI5AJ5C">pl Kanam</option>
                                    <option value="Kxb2aLH6aQE">pl Jos North</option>
                                    <option value="WnFVJtk3Ydm">Hwolshe Medical Center</option>
                                    <option value="VyC5Ah2sxMg">Bingham University Teaching Hospital</option>
                                    <option value="CvVzWAc0dLb">Faith Alive Foundation</option>
                                    <option value="dtgqizrS1Me">Jos University Teaching Hospital</option>
                                    <option value="gIwyL7hTdGY">Our Lady of Apostle (OLA) Hospital - Jos</option>
                                    <option value="ugfwVdwIuIj">Plateau State Specialist Hospital</option>
                                    <option value="OdFD1NyelFa">Solat Women Hospital</option>
                                    <option value="cdyDfwVgnJF">Tundun Wada Primary Health Center</option>
                                    <option value="XoodAFXuLoR">Amper Central Primary Health Care Center</option>
                                    <option value="h4GiCPKLpaj">pl Kanke</option>
                                    <option value="giwECr4xdr7">pl Langtang North</option>
                                    <option value="SwpC6SazKp4">pl Langtang General Hospital</option>
                                    <option value="c1sMFxI54cS">Zamko Comprehensive Health Center</option>
                                    <option value="n7H11XCfDQT">CCDP Hospital - Panyam</option>
                                    <option value="Ylm55YT8Uc6">Church of Christ in Nigeria (COCIN) Hospital and Rehabilitation Center</option>
                                    <option value="eAM9CE6xQD6">Mangu General Hospital</option>
                                    <option value="hAADI04UQVd">Konbum Primary Health Centre</option>
                                    <option value="vnYPxzWEwMO">pl Mangu</option>
                                    <option value="VsRXIP925Kr">pl Pankshin</option>
                                    <option value="a9QRiuuNaRv">Pankshin General Hospital</option>
                                    <option value="Axs1Yufa0Pp">Kwalla General Hospital</option>
                                    <option value="BQ6ZqTIJDra">St. Virgillus Catholic Rural Health Center</option>
                                    <option value="ryJ1gnzT3yb">Lardang Comprehensive Health Center</option>
                                    <option value="iWTaRRoO3JH">pl Quaan Pan</option>
                                    <option value="RqrbqtO8Pas">Shendam A Primary Health Center</option>
                                    <option value="xcD0RUmcq3U">pl Shendam</option>
                                    <option value="kvwUsWWt1z5">Shendam General Hospital</option>
                                    <option value="TGsy8pKsBgj">May Hospital - Shendam</option>
                                    <option value="LAzfkJ5YZG1">Tunkus General Hospital</option>
                                    <option value="DU7QFC4eurr">pl Mikang</option>
                                </select>

                            </div>

                            <div class="form-group" id="fromPicker">
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

                            <div class="form-group">
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

                    @yield('content')

                </div>

            </div>
        </div>
        @endsection


@section('footer_scripts')
            <script src="{{asset('select2/js/select2.min.js')}}"></script>
            <script src="https://ndr.phis3project.org.ng/lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
            <script src="https://ndr.phis3project.org.ng/lib/dummy-data/data.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
            <script src="https://ndr.phis3project.org.ng/js/monitoring_filter.js" type="text/javascript"></script>
            <script src="https://ndr.phis3project.org.ng/js/monitoring_surge_script.js"></script>
    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- Apex js -->
    <script src="assets/js/vendor_plugin/apexcharts.min.js"></script>

    <!-- Todo js -->
    <script src="assets/js/ui/component.todo.js"></script>

    <!-- demo app -->
    <script src="assets/js/pages/demo.dashboard-crm.js"></script>
    <!-- end demo js-->
    <link href="http://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="http://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="assets/js/filter.js" type="text/javascript"></script>

    <script src="assets/js/highcharts-utils.js" type="text/javascript"></script>
    <script type="text/javascript">
        var baseUrlApi = '<?php echo URL::to('/api').'/'; ?>';
        var baseUrlWiget = '<?php echo URL::to('/api').'/get-wiget/'; ?>';

        let uri = baseUrlWiget+'tx_curr';
        $('#report_containner').load(uri);

        $(".e2").select2({
            placeholder: "Select a State",
            allowClear: true
        });


        $(document).ready(function() {

            $("#filters").submit(function(event) {
                let selectReports = $('#report_type');

                var state = [];
                $('#state :selected').each(function() {
                    state.push($(this).val());
                });

                var lga = [];
                $('#lga :selected').each(function() {
                    lga.push($(this).val());
                });


                var facility = [];
                $('#facility :selected').each(function() {
                    facility.push($(this).val());
                });



                formData = $("#filters").serializeArray();
                formData.push({
                    name: 'states',
                    value: state
                }, {
                    name: 'lgas',
                    value: lga
                }, {
                    name: 'facilities',
                    value: facility
                });
                $(".tx_curr").html('...')
                $(".tx_facilites").html('...')
                $(".tx_states").html('...')
                $(".tx_lgas").html('...')

                console.log(formData);

                $.ajax({
                    type: "POST",
                    url: "{{route('treatment.filter')}}",
                    data: formData,
                    dataType: "json",
                    encode: true,
                }).done(function(data) {
                    var response = data.treatment_perfomance;

                    if (selectReports.val() == 'tx_curr') {
                        $(".tx_curr").html(response.active);
                        $(".tx_facilites").html(response.facilities)
                        $(".tx_states").html(response.states)
                        $(".tx_lgas").html(response.lga)

                        build_drilldown_bar_chart(
                            'drilldownBar',
                            'Patients Newly Enrolled on ART by Location',
                            'Number of Patients',
                            data.tx_new_state_data,
                            data.tx_new_lga_drill_data);

                    } else if (selectReports.val() == 'tx_new') {
                        $(".tx_new").html(response.tx_new);
                        $(".tx_facilites").html(response.facilities)
                        $(".tx_states").html(response.states)
                        $(".tx_lgas").html(response.lga)

                        build_drilldown_bar_chart(
                            'drilldownBar',
                            'Patients Newly Enrolled on ART by Location',
                            'Number of Patients',
                            data.tx_new_state_data,
                            data.tx_new_lga_drill_data);

                    } else if (selectReports.val() == 'vl') {

                        $(".tx_facilites").html(response.eligible)
                        $(".tx_states").html(response.supressedVl)
                        $(".tx_lgas").html(response.eligibleWithVl)
                        $(".tx_curr").html(response.active);

                        build_bar_chart_dual_axis(
                            "pvlsStateChart",
                            null,
                            'Number of Patients',
                            '% Suppression',
                            data.states,
                            data.eligibleWithVl,
                            'Viral Load Results',
                            data.viralLoadSuppressed,
                            'Suppression',
                            data.percentage_viral_load_suppressed,
                            '% Suppression',
                            false,
                            "State");
                    }





                    // console.log(data);
                });

                event.preventDefault();
            });
        });
    </script>


@endsection
