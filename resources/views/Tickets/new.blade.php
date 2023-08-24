<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Tickets | Service Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> --}}
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    @include('partials.style')
    <Style>
    input[switch]:checked+label:after {
        left: 70px;
        background-color: #f5f6f8;
    }
    </Style>
</head>


<body data-layout-mode="bordered" data-topbar="dark" data-sidebar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('partials.header')
        <!-- ========== Left Sidebar Start ========== -->
        @include('partials.navbar')
        <!-- Left Sidebar End -->
        @include('partials.horizontal_head')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="container-fluid">
                        <div class="col-md-2">

                            <h4 class="card-title mb-0 pt-3">Show Tickets</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="product-detail mt-3" dir="ltr">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button
                                                                class="btn btn-soft-primary waves-effect waves-light"
                                                                type="button" id="email" data-bs-toggle="modal"
                                                                data-bs-target="#myModal"></i>Email</button>
                                                        </div>

                                                    </div>
                                                    <img src="pattern-bg.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="mt-3 mt-xl-3 ps-xl-5">
                                                    <h4 class="font-size-20 mb-3"><a href="" class="text-dark">Ticket #
                                                            -00-2</a></h4>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mt-3">
                                                                    <h4 class="font-size-14">Specification</h4>
                                                                    <ul class="list-unstyled ps-0 mb-0 mt-3">

                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-2"></i>
                                                                                Task Assigned : Admin</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Problem : test</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Issue Type : samsung</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Issue Sub Type : Vendor Type 2</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-2"></i>
                                                                                Status : Closed</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-2"></i>
                                                                                BU/Store Name : </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Store Info :</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Issue Type samsung</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Marketing Manager :</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Vendor :</p>
                                                                        </li>
                                                                        <li>
                                                                           <i class="mdi mdi-circle-medium align-middle text-primary me-1"></i><a target="_blank"
                                                                                href="https://p2ptrack-dev.s3.amazonaws.com/20/64df4c6c88409_my_invoice.pdf">64df4c6c88409_my_invoice.pdf</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mt-3">
                                                                    <!-- <h5 class="font-size-14">Ticket #  000-0002</h5> -->
                                                                    <ul class="list-unstyled ps-0 mb-0 mt-3">
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-2"></i>
                                                                                Ticket Created By : Admin</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-2"></i>
                                                                                Ticket Reported By : Admin</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Mode of Complaint : High</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Ticket Resolved By </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Ticket Ressolved Date :</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-2"></i>
                                                                                Priority :</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-2"></i>
                                                                                Ticket Due Date : 2023-08-27</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Store Manager </p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-1 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Description :</p>
                                                                        </li>
                                                                        <li>
                                                                            <p class="text-muted mb-0 text-truncate"><i
                                                                                    class="mdi mdi-circle-medium align-middle text-primary me-1"></i>
                                                                                Impact :</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <br>
                                                    </div>
                                                </div>

                                                <!-- <ul class="nav nav-tabs nav-tabs-custom" role="">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#home1"
                                                            role="tab" aria-selected="true">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="fas fa-home"></i></span>
                                                            <span class="d-none d-sm-block">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#profile1"
                                                            role="tab" aria-selected="false">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="far fa-user"></i></span>
                                                            <span class="d-none d-sm-block">Vendor</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#messages1"
                                                            role="tab" aria-selected="false">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="far fa-envelope"></i></span>
                                                            <span class="d-none d-sm-block">Ticket
                                                                History</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#settings1"
                                                            role="tab" aria-selected="false">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="fas fa-cog"></i></span>
                                                            <span class="d-none d-sm-block">Quotation</span>
                                                        </a>
                                                    </li>
                                                </ul> -->
                                                <!-- <div class="tab-content p-3 text-muted">
                                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                                        <button class="btn btn-soft-primary waves-effect waves-light"
                                                            type="button" id="email" data-bs-toggle="modal"
                                                            data-bs-target="#myModals"></i>Activity</button>
                                                        <div>
                                                            No Activity Found
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                                        <div class="col-6">
                                                            <div class="mb-3 row">
                                                                <input class="form-control " type="text" name="ticket_n"
                                                                    id="ticket_no">
                                                            </div>
                                                            <button
                                                                class="btn btn-soft-primary waves-effect waves-light"
                                                                type="button" id="email">Update</button>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                                        <div class="gridjs-wrapper" style="height: auto;">
                                                            <table role="grid" class="gridjs-table"
                                                                style="height: auto;">
                                                                <thead class="gridjs-thead">
                                                                    <tr class="gridjs-tr">
                                                                        <th data-column-id="name"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 86px; width: 109px;">
                                                                            <div class="gridjs-th-content">Title
                                                                            </div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>
                                                                        <th data-column-id="email"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 185px; width: 234px;">
                                                                            <div class="gridjs-th-content">Issue
                                                                                Type
                                                                            </div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>
                                                                        <th data-column-id="position"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 242px; width: 306px;">
                                                                            <div class="gridjs-th-content">
                                                                                Reported On</div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>
                                                                        <th data-column-id="company"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 125px; width: 158px;">
                                                                            <div class="gridjs-th-content">
                                                                                Reported By</div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>
                                                                        <th data-column-id="country"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 118px; width: 149px;">
                                                                            <div class="gridjs-th-content">
                                                                                Assigned To</div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>
                                                                        <th data-column-id="email"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 185px; width: 234px;">
                                                                            <div class="gridjs-th-content">MoC
                                                                            </div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>
                                                                        <th data-column-id="email"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 185px; width: 234px;">
                                                                            <div class="gridjs-th-content">BU
                                                                            </div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>
                                                                        <th data-column-id="email"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 185px; width: 234px;">
                                                                            <div class="gridjs-th-content">Due
                                                                                Date
                                                                            </div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>
                                                                        <th data-column-id="email"
                                                                            class="gridjs-th gridjs-th-sort"
                                                                            tabindex="0"
                                                                            style="min-width: 185px; width: 234px;">
                                                                            <div class="gridjs-th-content">
                                                                                Activity By
                                                                            </div><button tabindex="-1"
                                                                                aria-label="Sort column ascending"
                                                                                title="Sort column ascending"
                                                                                class="gridjs-sort gridjs-sort-neutral"></button>
                                                                        </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody class="gridjs-tbody">
                                                                    <tr class="gridjs-tr">
                                                                        <td data-column-id="name" class="gridjs-td">
                                                                            test</td>
                                                                        <td data-column-id="email" class="gridjs-td">
                                                                            samsung</td>
                                                                        <td data-column-id="position" class="gridjs-td">
                                                                            2023-08-18
                                                                            10:48:14</td>
                                                                        <td data-column-id="company" class="gridjs-td">
                                                                            Admin</td>
                                                                        <td data-column-id="country" class="gridjs-td">
                                                                            Admin</td>
                                                                        <td data-column-id="country" class="gridjs-td">
                                                                            high</td>
                                                                        <td data-column-id="country" class="gridjs-td">
                                                                        </td>
                                                                        <td data-column-id="country" class="gridjs-td">
                                                                            2023-08-27</td>
                                                                        <td data-column-id="country" class="gridjs-td">
                                                                            Admin</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="settings1" role="tabpanel">
                                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                                        <button
                                                                class="btn btn-soft-primary waves-effect waves-light"
                                                                type="button" id="email" data-bs-toggle="modal"
                                                                data-bs-target="#myModales"></i>Quotation</button>
                                                            <div>
                                                                No Quotation Found
                                                            </div>
                                                        </div>
                                                    </div> -->
                                            </div>

                                        </div>
                                        <!-- ////////// -->
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-6 col-form-label">
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            {{-- <label for="example-text-input" class="col-md-2 col-form-label">Domain Members</label> --}}
                                            <div class="col-md-10">
                                                <div id="fields">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-6 col-form-label">
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            {{-- <label for="example-text-input" class="col-md-2 col-form-label">Domain Members</label> --}}
                                            <div class="col-md-10">
                                                <div id="fields">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <ul class="nav nav-tabs nav-tabs-custom" role="">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab"
                                                aria-selected="true">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Activity</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab"
                                                aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Vendor</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab"
                                                aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                                <span class="d-none d-sm-block">Ticket
                                                    History</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab"
                                                aria-selected="false">
                                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                                <span class="d-none d-sm-block">Quotation</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                            <button class="btn btn-soft-primary waves-effect waves-light" type="button"
                                                id="email" data-bs-toggle="modal"
                                                data-bs-target="#myModals"></i>Activity</button>
                                            <div>
                                                No Activity Found
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <div class="col-4">
                                                <div class="col-md-10">
                                                    <select class="form-control" data-trigger
                                                        name="choices-single-default" id="ticket_reported_by"
                                                        placeholder="This is a search placeholder">

                                                    </select>
                                                </div>
                                                <br>
                                                <button class="btn btn-soft-primary waves-effect waves-light"
                                                    type="button" id="email">Update</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages1" role="tabpanel">
                                            <div class="gridjs-wrapper" style="height: auto;">
                                                <table role="grid" class="gridjs-table" style="height: auto;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="name" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="min-width: 86px; width: 109px;">
                                                                <div class="gridjs-th-content">Title
                                                                </div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="email" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="min-width: 185px; width: 234px;">
                                                                <div class="gridjs-th-content">Issue
                                                                    Type
                                                                </div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="position"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="min-width: 242px; width: 306px;">
                                                                <div class="gridjs-th-content">
                                                                    Reported On</div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="company"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="min-width: 125px; width: 158px;">
                                                                <div class="gridjs-th-content">
                                                                    Reported By</div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="country"
                                                                class="gridjs-th gridjs-th-sort" tabindex="0"
                                                                style="min-width: 118px; width: 149px;">
                                                                <div class="gridjs-th-content">
                                                                    Assigned To</div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="email" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="min-width: 185px; width: 234px;">
                                                                <div class="gridjs-th-content">MoC
                                                                </div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="email" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="min-width: 185px; width: 234px;">
                                                                <div class="gridjs-th-content">BU
                                                                </div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="email" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="min-width: 185px; width: 234px;">
                                                                <div class="gridjs-th-content">Due
                                                                    Date
                                                                </div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>
                                                            <th data-column-id="email" class="gridjs-th gridjs-th-sort"
                                                                tabindex="0" style="min-width: 185px; width: 234px;">
                                                                <div class="gridjs-th-content">
                                                                    Activity By
                                                                </div><button tabindex="-1"
                                                                    aria-label="Sort column ascending"
                                                                    title="Sort column ascending"
                                                                    class="gridjs-sort gridjs-sort-neutral"></button>
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        <tr class="gridjs-tr">
                                                            <td data-column-id="name" class="gridjs-td">
                                                                test</td>
                                                            <td data-column-id="email" class="gridjs-td">
                                                                samsung</td>
                                                            <td data-column-id="position" class="gridjs-td">
                                                                2023-08-18
                                                                10:48:14</td>
                                                            <td data-column-id="company" class="gridjs-td">
                                                                Admin</td>
                                                            <td data-column-id="country" class="gridjs-td">
                                                                Admin</td>
                                                            <td data-column-id="country" class="gridjs-td">
                                                                high</td>
                                                            <td data-column-id="country" class="gridjs-td">
                                                            </td>
                                                            <td data-column-id="country" class="gridjs-td">
                                                                2023-08-27</td>
                                                            <td data-column-id="country" class="gridjs-td">
                                                                Admin</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings1" role="tabpanel">
                                            <div class="tab-pane active" id="home1" role="tabpanel">
                                                <button class="btn btn-soft-primary waves-effect waves-light"
                                                    type="button" id="email" data-bs-toggle="modal"
                                                    data-bs-target="#myModales"></i>Quotation</button>
                                                <div>
                                                    No Quotation Found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end row -->

                        </div>

                        @include('partials.footer')
                        @include('partials.right_bar')
                        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                            aria-hidden="true" data-bs-scroll="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Email</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">To</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter Your Email" id="title">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Remarks</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name="remarks" spellcheck="false"
                                                            id="remarks">
                                                        </textarea>
                                                    </div>
                                                    <input class="form-control" type="hidden" id="hidden" name="hidden"
                                                        value="0">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" onclick=""
                                            class="btn btn-primary waves-effect waves-light">Save
                                            changes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <div id="myModals" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                            aria-hidden="true" data-bs-scroll="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Create Ticket</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Ticket</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" data-trigger
                                                            name="choices-single-default" id="ticket_reported_by"
                                                            placeholder="This is a search placeholder">

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Remarks</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name="remarks" spellcheck="false"
                                                            id="remarks">
                                                        </textarea>
                                                    </div>
                                                    <input class="form-control" type="hidden" id="hidden" name="hidden"
                                                        value="0">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" onclick=""
                                            class="btn btn-primary waves-effect waves-light">Save
                                            changes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <div id="myModales" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel"
                            aria-hidden="true" data-bs-scroll="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Create Quotation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Ticket</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" data-trigger
                                                            name="choices-single-default" id="ticket_reported_by"
                                                            placeholder="This is a search placeholder">

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Vendor</label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" data-trigger
                                                            name="choices-single-default" id="ticket_reported_by"
                                                            placeholder="This is a search placeholder">

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Amount</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" placeholder=""
                                                            id="title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3 row">
                                                    <label for="example-text-input"
                                                        class="col-md-2 col-form-label">Remarks</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" name="remarks" spellcheck="false"
                                                            id="remarks">
                                                        </textarea>
                                                    </div>
                                                    <input class="form-control" type="hidden" id="hidden" name="hidden"
                                                        value="0">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" onclick=""
                                            class="btn btn-primary waves-effect waves-light">Save
                                            changes</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        @include('partials.script')

                        <!-- </div> -->




</body>

</html>