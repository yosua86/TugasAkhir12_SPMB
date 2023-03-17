<x-user-layout>
    <div id="content_list">
        <!--begin::Content-->
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
                            <div class="card card-custom card-stretch gutter-b">
                                <div class="card-body">
                                    <!--begin::Engage Widget 15-->
                                    <div>
                                        <!--begin::Products-->
                                        <div class="content flex-row-fluid" id="kt_content" style="margin-top:10%;">
                                            <!--begin::Stats-->
                                            <div class="row g-6 g-xl-12">
                                                <div class="col-lg-6 col-xxl-6">
                                                    <!--begin::Clients-->
                                                    <div class="card h-100">
                                                        <div class="card-body p-9">
                                                            <!--begin::Heading-->
                                                            <div class="fs-2hx fw-bolder">
                                                                <h3>Pendaftar</h3>
                                                            </div>
                                                            <!--end::Heading-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex" style="margin-top:25%; float:right;">
                                                                <a href="javascript:;" onclick="load_input('{{route('pendaftar')}}');" class="btn btn-primary btn-md me-3">Lihat Selengkapnya ></a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                    </div>
                                                    <!--end::Clients-->
                                                </div>
                                                <div class="col-lg-6 col-xxl-6">
                                                    <!--begin::Clients-->
                                                    <div class="card h-100">
                                                        <div class="card-body p-9">
                                                            <!--begin::Heading-->
                                                            <div class="fs-2hx fw-bolder">
                                                                   <h3>Lulus</h3>
                                                            </div>
                                                            <!--end::Heading-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex" style="margin-top:25%; float:right;">
                                                               <a href="javascript:;" onclick="load_input('{{route('lulus')}}');" class="btn btn-primary btn-md me-3">Lihat Selengkapnya ></a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                    </div>
                                                    <!--end::Clients-->
                                                </div>
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <div class="content flex-row-fluid" id="kt_content">
                                            <!--begin::Stats-->
                                            <div class="row g-6 g-xl-12">
                                                <div class="col-lg-6 col-xxl-6">
                                                    <!--begin::Clients-->
                                                    <div class="card h-100">
                                                        <div class="card-body p-9">
                                                            <!--begin::Heading-->
                                                            <div class="fs-2hx fw-bolder">
                                                                   <h3>Perbandingan</h3>
                                                            </div>
                                                            <!--end::Heading-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex" style="margin-top:25%; float:right;">
                                                               <a href="javascript:;" onclick="load_input('{{route('perbandingan')}}');" class="btn btn-primary btn-md me-3">Lihat Selengkapnya ></a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                    </div>
                                                    <!--end::Clients-->
                                                </div>
                                                {{-- <div class="col-lg-6 col-xxl-6">
                                                    <!--begin::Clients-->
                                                    <div class="card h-100">
                                                        <div class="card-body p-9">
                                                            <!--begin::Heading-->
                                                            <div class="fs-2hx fw-bolder">
                                                                   <h3>Daftar Ulang</h3>
                                                            </div>
                                                            <!--end::Heading-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex" style="margin-top:25%; float:right;">
                                                               <a href="javascript:;" onclick="load_input('{{route('ulang')}}');" class="btn btn-primary btn-md me-3">Lihat Selengkapnya ></a>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                    </div>
                                                    <!--end::Clients-->
                                                </div> --}}
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Products-->
                                    </div>
                                    <!--end::Section-->
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
        <!--end::Content-->
    </div>
    <div id="content_input"></div>
    @section('custom_js')
    <script>

    </script>
    @endsection
</x-user-layout>