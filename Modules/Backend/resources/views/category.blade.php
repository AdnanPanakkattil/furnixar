@extends('backend::layouts.backendlayouts')
@section('title', 'Dashboard')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('page-css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('page-css/patient.css') }}">
    @endpush

    <div class="col-md-12" style="zoom: 80% !important">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <h6 class="card-title mb-0"> Category daily overview </h6>
                <small class="text-muted"> today </small>
            </div>
            <div class="card-body d-flex align-items-end pb-0">
                <div class="w-100">
                    <div class="row gy-3">

                        <div class="row">

                            <!-- Total Category -->
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-info  me-4 p-2">
                                        <i class="ti ti-calendar-time ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0" id="today_category">0</h5>
                                        <h6> today </h6>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Pending -->
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-primary me-4 p-2">
                                        <i class="ti ti-clock-hour-4 ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0" id="pending">0</h5>
                                        <h6> Active </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-primary me-4 p-2">
                                        <i class="ti ti-clock-hour-4 ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0" id="pending">0</h5>
                                        <h6> Total category</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="badge rounded bg-label-primary me-4 p-2">
                                        <i class="ti ti-clock-hour-4 ti-lg"></i>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="mb-0" id="pending">0</h5>
                                        <h6> In Active </h6>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div id="subscriberGained"></div>
        </div>
    </div>

    <div class="mt-5">
        <div class="col-12 divhead">
            <div>
                <h4> Catogerys </h4>

            </div>
            <!-- <div id="add_new_service_div" >
                                        <button type="button" class="btn btn-primary" id="addNewCommonBtn"> Add New Service <i class="ti ti-plus ti-xs me-sm-2 me-0"></i></button>
                                      </div> -->

        </div>
        <div class="card" style="zoom: 80%;">
            <h5 class="card-header"></h5>
            <div class="card-body">

                <div class="mb-2">

                    <div class="card-header d-flex justify-content-between align-items-center">

                        <div>
                            <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample">
                                Filter <i class="ti ti-filter ms-1"></i>
                            </button>
                        </div>

                        <div>
                            <a href="" class="btn btn-primary">
                                + Add Category
                            </a>
                        </div>

                    </div>
                    <div>
                        <form class="dt_adv_search" method="GET">
                            <div class="row">
                                <div class="col-12">
                                    <div class="collapse" id="collapseExample">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="dt_adv_search" method="GET">
                                                    <div class="row">
                                                        <div class="col">

                                                            <div class="row g-3 mt-4">
                                                                <div class="col">
                                                                    <label for="clientId" class="form-label labez">
                                                                        patient </label>
                                                                    <select id="clientId" name="clientId"
                                                                        class="select2 form-select form-select-lg clientId"
                                                                        data-allow-clear="true">
                                                                        <option value="All">
                                                                            all
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="serviceId" class="form-label labez">
                                                                        service </label>
                                                                    <select id="serviceId"
                                                                        class="select2 form-select form-select-lg serviceId"
                                                                        data-allow-clear="true">
                                                                        <option value="All">
                                                                            all
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                                <div class="col">
                                                                    <label class="form-label labez"> tb_date </label>
                                                                    <div class="mb-0">
                                                                        <input type="text"
                                                                            class="form-control dt-date flatpickr-range dt-input"
                                                                            data-column="5" placeholder=" tb_date "
                                                                            data-column-index="4" name="dt_date" />
                                                                        <input type="hidden"
                                                                            class="form-control dt-date start_date dt-input"
                                                                            data-column="5" data-column-index="4"
                                                                            name="value_from_start_date" />
                                                                        <input type="hidden"
                                                                            class="form-control dt-date end_date dt-input"
                                                                            name="value_from_end_date" data-column="5"
                                                                            data-column-index="4" />
                                                                    </div>
                                                                </div>
                                                                <div class="col">

                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-advanced-search table service-common-table" id="appointment_report_table">
                    <thead>
                        <tr>

                            <th> Sol No </th>
                            <th> Category Name </th>
                            <th> Category Image </th>
                            <th> Status </th>
                            <th> Created At </th>
                            <th> Action </th>


                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th> Sol No </th>
                            <th> Category Name </th>
                            <th> Category Image </th>
                            <th> Status </th>
                            <th> Created At </th>
                            <th> Action </th>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </div>

    <div class="modal" id="statusModal">
        <div class="modal-dialog">
            <div class="col-12 mb-6 mb-xl-0">
                <div class="card">
                    <h5 class="card-header">Reservation Tracking</h5>
                    <div class="card-body">
                        <ul class="timeline mb-0">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-light footz" id="bulk_select" style="display: none;">
        <div
            class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-4">
            <div class="allitemz">
                <div class="itemz">
                    <h4 class="m-0" id="selected_count">10</h4>
                </div>
                <h5 class="coustom-fontz">Items selected</h5>
            </div>

            <div class="d-flex flex-column flex-sm-row">
                <a href="" class="footer-link me-6 footzicon"><i class="fa-solid fa-copy menu-icon"></i>Duplicate</a>

                <a href="" class="footer-link me-6 footzicon"><i class="fa-solid fa-file-export menu-icon"></i>Export</a>
                <a href="" class="footer-link me-6 footzicon"><i class="fa-solid fa-box-archive menu-icon"></i>Archive</a>
                <a href="#" class="footer-link me-6 footzicon" id="delete_selected"><i
                        class="fa-solid fa-trash-can menu-icon"></i>Delete</a>
                <a href="" class="footer-link me-6 footzicon"><i
                        class="fa-solid fa-arrow-turn-down menu-icon"></i>Convert</a>
                <a href="" class="footer-link me-6 footzicon"><i
                        class="fa-solid fa-arrow-right-from-bracket menu-icon"></i>Move to</a>

            </div>
        </div>
    </footer>
    <!-- </div> -->

    <div class="modal fade" id="bill-view-modal" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileViewModalLabel">View File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="operative-report-file-view-modal-content">
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/cards-statistics.js"></script>
@endpush