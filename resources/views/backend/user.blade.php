@extends('backend.layouts.backendlayouts')
@section('title', 'User')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('page-css/patient.css') }}">
    @endpush

    <div>

        <div class="mt-5">

            <div class="row" style="margin-left: 5px;">

                <div class="col-12 divhead">
                    <div>
                        <h5> users Table </h5>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="mb-2">
                            <div class="mb-2 d-flex justify-content-between align-items-center">

                                <!-- Left: Filter Button
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        filter<i class="menu-icon tf-icons ti ti-filter me-0 ms-2"></i>
                                    </button> -->

                                <!-- Right: Add Button -->
                                <a href="your-add-url" class="btn btn-success">
                                    <i class="ti ti-plus me-1"></i> Add Users
                                </a>

                            </div>
                            <div>
                                <form class="dt_adv_search" method="GET">
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <div class="collapse" id="collapseExample">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form class="dt_adv_search" method="GET">
                                                            <div class="row">
                                                                <div class="col-12">

                                                                    <div class="row g-3 align-items-end">

                                                                        <!-- financialCategory -->
                                                                        <div class="col-3">
                                                                            <label for="selectpickerLiveSearch"
                                                                                class="form-label labez"> financialCategory
                                                                            </label>
                                                                            <select id="financialCategory"
                                                                                class="selectpicker w-100"
                                                                                data-live-search="true"
                                                                                data-style="btn-default">
                                                                                <option value=""> all </option>
                                                                                <option value="cash">cash</option>
                                                                                <option value="insurance">Insurance</option>
                                                                                <option value="company">company</option>
                                                                            </select>
                                                                            <span
                                                                                class="text-danger error-text financialCategory_error"></span>
                                                                        </div>

                                                                        <!-- Branch -->


                                                                        <!-- Provider Select (Dynamic) -->
                                                                        <div class="col-3">
                                                                            <label class="form-label  labez"> provider
                                                                            </label>
                                                                            <div class="position-relative">
                                                                                <select id="provider"
                                                                                    class="selectpicker w-100"
                                                                                    data-live-search="true"
                                                                                    data-style="btn-default"
                                                                                    title=" selecta_atleast_one ">
                                                                                </select>
                                                                                <span id="clearProvider"
                                                                                    style="position:absolute; right:33px; top:50%; transform:translateY(-50%); cursor:pointer;">×</span>
                                                                            </div>
                                                                        </div>

                                                                        <!-- billtype -->
                                                                        <div class="col-3">
                                                                            <label class="form-label labez"> bill_type
                                                                            </label>
                                                                            <select id="billtype" class="selectpicker w-100"
                                                                                data-live-search="true"
                                                                                data-style="btn-default">
                                                                                <option value=""> all </option>
                                                                                <option value="out_patient">Out patient
                                                                                </option>
                                                                                <option value="in_patient">In patient
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                        <!-- From Date To End Date -->
                                                                        <div class="col-3">
                                                                            <label class="form-label labez">
                                                                                fromdatetoenddate </label>
                                                                            <input type="text"
                                                                                class="form-control dt-date flatpickr-range w-100"
                                                                                placeholder=" fromdatetoenddate " />
                                                                            <input id="startDate" type="hidden"
                                                                                name="startDate">
                                                                            <input id="endDate" type="hidden"
                                                                                name="endDate">
                                                                            <span
                                                                                class="text-danger error-text dateerror"></span>
                                                                        </div>

                                                                        <!-- Patient -->
                                                                        <div class="col-3">
                                                                            <label for="clientId" class="form-label labez">
                                                                                patient </label>
                                                                            <select id="clientId" name="clientId"
                                                                                class="select2 form-select form-select-lg clientId"
                                                                                data-allow-clear="true">
                                                                                <option value="All">All</option>
                                                                            </select>
                                                                            <span
                                                                                class="text-danger error-text clientIderror"></span>
                                                                        </div>


                                                                        <!-- Nationality -->
                                                                        <div class="col-3">
                                                                            <label class="form-label labez"> nationality
                                                                            </label>
                                                                            <select id="nationality" name="nationality"
                                                                                class="selectpicker w-100"
                                                                                data-live-search="true"
                                                                                data-style="btn-default">
                                                                                <option value=""> all </option>
                                                                                <option value="sn">Saudi National</option>
                                                                                <option value="nsn">None Saudi National
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <!-- </div> -->
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
                        <table class="dt-advanced-search table service-common-table" id="usertable">
                            <thead>
                                <tr>

                                    <th> slno </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Mobile </th>
                                    <th> Gender </th>
                                    <th> Active </th>
                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th> slno </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Mobile </th>
                                    <th> Gender </th>
                                    <th> Active </th>
                                    <th> Action </th>

                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer bg-light footz" id="bulkselect" style="display: none;">
            <div
                class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-4">
                <div class="allitemz">
                    <div class="itemz">
                        <h4 class="m-0" id="selectedcount">10</h4>
                    </div>
                    <h5 class="coustom-fontz">Items selected</h5>
                </div>

                <div class="d-flex flex-column flex-sm-row">
                    <a href="" class="footer-link me-6 footzicon"><i class="fa-solid fa-copy menu-icon"></i>Duplicate</a>

                    <a href="" class="footer-link me-6 footzicon"><i
                            class="fa-solid fa-file-export menu-icon"></i>Export</a>
                    <a href="" class="footer-link me-6 footzicon"><i
                            class="fa-solid fa-box-archive menu-icon"></i>Archive</a>
                    <a href="#" class="footer-link me-6 footzicon" id="deleteselected"><i
                            class="fa-solid fa-trash-can menu-icon"></i>Delete</a>
                    <a href="" class="footer-link me-6 footzicon"><i
                            class="fa-solid fa-arrow-turn-down menu-icon"></i>Convert</a>
                    <a href="" class="footer-link me-6 footzicon"><i
                            class="fa-solid fa-arrow-right-from-bracket menu-icon"></i>Move to</a>


                </div>
            </div>
        </footer>
    </div>



@endsection
