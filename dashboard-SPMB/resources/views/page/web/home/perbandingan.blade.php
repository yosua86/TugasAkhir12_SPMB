
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Page Layout-->
            <div class="d-flex flex-row">
                <!--begin::Layout-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    {{-- <a href="javascript:void(0);" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder dropdown-toggle" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                        <!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        Filter
                    </a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="false">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <form id="content_filter">
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <select class="form-control" name="st" onchange="load_list(1);" id="st">
                                        <option value="Wait for confirmation">Wait for confirmation</option>
                                        <option value="Order on process">Order on process</option>
                                        <option value="On the way">On the way</option>
                                        <option value="Received">Received</option>
                                    </select>
                                </div>
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Start:</label>
                                    <!--end::Label-->
                                    <input type="text" id="start" name="start" class="form-control form-control-solid" value="{{date('Y-m-01')}}">
                                </div>
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">End:</label>
                                    <!--end::Label-->
                                    <input type="text" id="end" name="end" class="form-control form-control-solid" value="{{date('Y-m-d')}}">
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-white btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="button" onclick="load_list(1);" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                        </form>
                        <!--end::Form-->
                    </div> --}}
                    <div class="card card-bordered">
                        <div class="card-body">
                            <button class="btn btn-info" onclick="load_list(1);">Kembali</button>
                            <div style="float: right;">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tahun
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <form id="content_filter">
                                            <select class="form-control" name="tahun">
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                            </select>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <h3>
                                Persentasi Laki-laki dan Perempuan
                            </h3>
                            <div id="kt_amcharts_3" style="height: 500px;"></div>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Page Layout-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<script>
    am4core.ready(function () {

// Themes begin
am4core.useTheme(am4themes_dataviz);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart
chart = am4core.create('kt_amcharts_3', am4charts.PieChart);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.data = [
    {
        gender: 'Perempuan',
        value: {{$laki}}
    },
    {
        gender: 'Laki-Laki',
        value: {{$perempuan}}
    }
];  

    var series = chart.series.push(new am4charts.PieSeries());
    series.dataFields.value = 'value';
    series.dataFields.radiusValue = 'value';
    series.dataFields.category = 'gender';
    series.slices.template.cornerRadius = 6;
    series.colors.step = 3;

    series.hiddenState.properties.endAngle = -90;

    chart.legend = new am4charts.Legend();

    });
</script>