<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Vendors | Service Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> --}}
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    @include('partials.style')
</head>


<body>

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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-2">

                                            <h4 class="card-title mb-0 pt-3">Vendors</h4>
                                        </div>
                                        <div class="col-md-6">
                                            {{-- <button type="button" class="btn btn-soft-primary waves-effect waves-light"  data-bs-toggle="modal" data-bs-target="#myModal">
                                                     Add New
                                                </button> --}}
                                            <button class="btn btn-soft-primary waves-effect waves-light" type="button"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                aria-controls="offcanvasRight"><i
                                                    class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i>Add
                                                New</button>
                                            {{-- <button type="button" class="btn btn-primary waves-effect waves-light">Add New</button> --}}
                                        </div>
                                    </div>

                                </div><!-- end card header -->
                                <div class="card-body">
                                    <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Title</th>
                                                <th>Parent</th>
                                                <th>Active/Inactive</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>


                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->
        @include('partials.footer')
    </div>
    <!-- END layout-wrapper -->
    @include('partials.right_bar')
    <!-- Right Sidebar -->

    <!-- JAVASCRIPT -->
    <!-- right offcanvas -->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Create Vendors</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 row">
                        <label for="formrow-inputState" class="form-label">Type</label>
                        <div class="col-md-12">
                            <select class="form-control" data-trigger name="choices-single-default"
                                id="formrow-inputState" placeholder="This is a search placeholder">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 row">
                        <label for="formrow-inputState" class="form-label">Sub Type</label>
                        <div class="col-md-12">
                            <select class="form-control" data-trigger name="choices-single-default"
                                id="formrow-inputState" placeholder="This is a search placeholder">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Enter First Name</label>
                            <input type="text" class="form-control" placeholder="Enter First Name"
                                id="formrow-inputCity">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-email" class="form-label">Enter Email</label>
                            <input type="text" class="form-control" placeholder="Enter Enter Email"
                                id="formrow-inputCity">
                        </div>
                    </div>  

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Phone"
                                id="formrow-inputZip">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Alternate Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Alternate Phone"
                                id="formrow-inputCity">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Address 1</label>
                            <input type="text" class="form-control" placeholder="Enter Address 1"
                                id="formrow-inputCity">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Address 2</label>
                            <input type="text" class="form-control" placeholder="Enter Address 2"
                                id="formrow-inputZip">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" placeholder="Enter Latitude"
                                id="formrow-inputCity">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" placeholder="Enter Longitude"
                                id="formrow-inputCity">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-city" class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="Enter City"
                                id="formrow-inputZip">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-State" class="form-label">State</label>
                            <input type="text" class="form-control" placeholder="Enter State"
                                id="formrow-inputCity">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Country" class="form-label">Country</label>
                            <input type="text" class="form-control" placeholder="Enter Country"
                                id="formrow-inputZip">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" placeholder="Enter Zip"
                                id="formrow-inputZip">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        {{-- <label for="example-text-input" class="col-md-2 col-form-label">Domain Members</label> --}}
                        <div class="col-md-6">
                            <div id="fields">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-10 col-form-label"></label>
                        <div class="col-md-2">

                            <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('partials.script')
</body>
<script>
    $(document).ready(function() {

        $("#addfield").click(function() {
            var newRowAdd =
                '<div id="row" class="row"><div class="input-group m-3">' +
                '<div class="col-3"><div class="input-group-prepend">' +
                '<button type="button" id="DeleteRow" class="btn btn-outline-danger waves-effect waves-light m-1">Delete</button>' +
                '<i class="bi bi-trash"></i></button></div> </div>' +
                '<div class="col-4"><div class="input-group-prepend m-1"><input class="form-control" type="text" placeholder="Additional Field"></div> </div><div class="col-1"></div>' +
                '<div class="col-4"><select class="form-control " data-trigger name="choices-single-default" id="choices-single-default" placeholder=""><option>String</option><option>Number</option><option>Text</option></select> </div> </div>' +
                '';

            $('#fields').append(newRowAdd);
            // alert("The paragraph was clicked.");
        });


        $("body").on("click", "#DeleteRow", function() {
            $(this).parents("#row").remove();
        })
        $('#myTable').DataTable({
            dom: 'Bfrtip',


            buttons: ['copy', 'excel', 'csv', 'pdf', 'print']

        });
    });
</script>

</html>