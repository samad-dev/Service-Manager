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
                                            <button class="btn btn-soft-primary waves-effect waves-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i>Add
                                                New</button>
                                            {{-- <button type="button" class="btn btn-primary waves-effect waves-light">Add New</button> --}}
                                        </div>
                                    </div>

                                </div><!-- end card header -->
                                <div class="card-body">
                                    <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Company</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
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
        <div class="offcanvas-body" id="fetchres">
            <div class="row">
                <div class="col-6">

                    <div class="mb-3 row">
                        <label for="formrow-inputState" class="form-label">Type</label>
                        <div class="col-md-12">
                            <select class="form-control" name="choices-single-default" id="type" placeholder="This is a search placeholder">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 row">
                        <label for="formrow-inputState" class="form-label">Sub Type</label>
                        <div class="col-md-12">
                            <select class="form-control" name="choices-single-default" id="subtype" placeholder="This is a search placeholder">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Enter Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" id="name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-email" class="form-label">Enter Email</label>
                            <input type="text" class="form-control" placeholder="Enter Enter Email" id="email">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Phone" id="phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Alternate Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Alternate Phone" id="aphone">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Address 1</label>
                            <input type="text" class="form-control" placeholder="Enter Address 1" id="address_1">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Address 2</label>
                            <input type="text" class="form-control" placeholder="Enter Address 2" id="address_2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" placeholder="Enter Latitude" id="latitude">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" placeholder="Enter Longitude" id="longitude">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-city" class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="Enter City" id="city">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-State" class="form-label">State</label>
                            <input type="text" class="form-control" placeholder="Enter State" id="state">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Country" class="form-label required">Country</label>
                            <input type="text" class="form-control" required placeholder="Enter Country" id="country">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" placeholder="Enter Zip" id="zipcode">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        {{-- <label for="example-text-input" class="col-md-2 col-form-label">Domain Members</label> --}}
                        <div class="col-md-6">
                            <div id="fields">
                                <input class="form-control" type="hidden" id="hidden" name="hidden" value="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-10 col-form-label"></label>
                        <div class="col-md-2">

                            <button type="button" onclick="submit()" class="btn btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('partials.script')
</body>
<script>
    var table;
    var type;
    var subtype;
    $(document).ready(function() {
        subtype = new Choices("#subtype", {
            removeItemButton: !0,
        })
        $("#type").change(function() {
            var end = this.value;
            // alert(end);
            $.ajax({
                url: "api/types/parent/" + end + "",
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    subtype.clearChoices();
                    console.log(response);
                    subtype.setChoices(response,
                        'id',
                        'title',
                        false, );
                }
            });

        });
        $.ajax({
            url: "api/types",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                type = new Choices("#type", {
                    removeItemButton: !0,
                })
                type.clearChoices();
                console.log(response);
                type.setChoices(response,
                    'id',
                    'title',
                    false, );
            }
        });
        table = $('#myTable').DataTable({
            dom: 'Bfrtip',


            buttons: ['copy', 'excel', 'csv', 'pdf', 'print']

        });
        fetchtable();
    });

    function fetchtable() {
        var settings = {
            "url": "api/vendors",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function(response) {
            console.log(response);
            table.clear().draw();
            $.each(response, function(index, data) {
                table.row.add([
                    index + 1,
                    data.company,
                    data.name,
                    data.email,
                    '<button type="button"id="edit" name="edit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"  onclick="editData(' +
                    data.id +
                    ')"  class="btn btn-soft-warning waves-effect waves-light"><i class="bx bx-edit-alt font-size-16 align-middle"></i></button>',
                    '<button type="button" id="delete" name="delete" onclick="deleteData(' +
                    data.id +
                    ')" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-trash-alt font-size-16 align-middle"></i></button>'
                ]).draw(false);
            });
        });
    }

    function submit() {

        var update_id = document.getElementById("hidden").value;
        console.log(update_id);
        if (update_id == 0) {
            var subtype_val = $('#subtype').find(":selected").val();

            var form = new FormData();
            form.append("company_id", "0");
            form.append("vendor_type_id", subtype_val);
            form.append("name", document.getElementById("name").value);
            form.append("email", document.getElementById("email").value);
            form.append("phone", document.getElementById("phone").value);
            form.append("alternate_phone", document.getElementById("aphone").value);
            form.append("address_1", document.getElementById("address_1").value);
            form.append("address_2", document.getElementById("address_2").value);
            form.append("latitude", document.getElementById("latitude").value);
            form.append("longitude", document.getElementById("longitude").value);
            form.append("city", document.getElementById("city").value);
            form.append("state", document.getElementById("state").value);
            form.append("country", document.getElementById("country").value);
            form.append("zipcode", document.getElementById("zipcode").value);
            form.append("status", '1');

            var settings = {
                "url": "api/vendors",
                "method": "POST",
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form
            };

            $.ajax({
                ...settings,
                statusCode: {
                    200: function(response) {
                        console.log(response);
                        $('#myModal').modal('hide');
                        console.log("Request was successful");
                        $('#fetchres').find('input:text').val('');
                        document.getElementById('hidden').value = "";
                        fetchtable();
                        Swal.fire(
                            'Success!',
                            'Vendor Created Successfully',
                            'success'
                        )
                    },
                },
                success: function(data) {
                    // $('#myModal').reset();
                    // Additional success handling if needed
                },
                error: function(xhr, textStatus, errorThrown) {
                    Swal.fire(
                        'Server Error!',
                        'Vendor Not Created',
                        'error'
                    )
                }
            });

        } else {
            var subid = $('#subtype').find(":selected").val();
            var settings = {
                "url": "api/vendors/" + update_id + "",
                "method": "PUT",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    "company_id": "0",
                    "vendor_type_id": subid,
                    "name": document.getElementById("name").value,
                    "email": document.getElementById("email").value,
                    "phone": document.getElementById("phone").value,
                    "alternate_phone": document.getElementById("aphone").value,
                    "address_1": document.getElementById("address_1").value,
                    "address_2": document.getElementById("address_2").value,
                    "latitude": document.getElementById("latitude").value,
                    "longitude": document.getElementById("longitude").value,
                    "city": document.getElementById("city").value,
                    "state": document.getElementById("state").value,
                    "country": document.getElementById("country").value,
                    "zipcode": document.getElementById("zipcode").value,
                    "status": 1
                }),
            };

            $.ajax({
                ...settings,
                statusCode: {
                    200: function(response) {
                        console.log(response);
                        $('#myModal').modal('hide');
                        $('#fetchres').find('input:text').val('');
                        document.getElementById('hidden').value = "0";


                        fetchtable();
                        Swal.fire(
                            'Success!',
                            'Vendor updated Successfully',
                            'success'
                        )
                    },
                },
                success: function(data) {
                    // Additional success handling if needed
                },
                error: function(xhr, textStatus, errorThrown) {
                    Swal.fire(
                        'Server Error!',
                        'Vendor Not updated',
                        'error'
                    )
                }
            });



            // alert("Update Records Here");

        }


    }

    function editData(id) {
        // alert(id);
        var settings = {
            "url": "api/vendors/" + id + "",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax({
            ...settings,
            statusCode: {
                200: function(response) {
                    console.log(response[0]['name']);
                    document.getElementById('hidden').value = response[0]['id'];
                    document.getElementById("name").value = response[0]["name"];
                    document.getElementById("email").value = response[0]["email"];
                    document.getElementById("phone").value = response[0]["phone"];
                    document.getElementById("aphone").value = response[0]["alternate_phone"];
                    document.getElementById("address_1").value = response[0]["address_1"];
                    document.getElementById("address_2").value = response[0]["address_2"];
                    document.getElementById("latitude").value = response[0]["latitude"];
                    document.getElementById("longitude").value = response[0]["longitude"];
                    document.getElementById("city").value = response[0]["city"];
                    document.getElementById("state").value = response[0]["state"];
                    document.getElementById("country").value = response[0]["country"];
                    document.getElementById("zipcode").value = response[0]["zipcode"];

                    // document.getElementById("labelc").innerHTML = 'Update'


                },
                // Add more status code handlers as needed
            },
            success: function(data) {
                // Additional success handling if needed
            },
            error: function(xhr, textStatus, errorThrown) {
                Swal.fire(
                    'Server Error!',
                    '',
                    'error'
                )

                // console.log("Request failed with status code: " + xhr.status);
            }
        });

    }

    function deleteData(id) {
        var settings = {
            "url": "api/vendors/" + id + "",
            "method": "DELETE",
            "timeout": 0,
        };
        $.ajax({
            ...settings,
            statusCode: {
                200: function(response) {
                    console.log(response);
                    // $('#myModal').modal('hide');
                    // console.log("Request was successful");
                    fetchtable();
                    Swal.fire(
                        'Success!',
                        'Vendor Deleted Successfully',
                        'success'
                    )
                },
                // Add more status code handlers as needed
            },
            success: function(data) {
                // Additional success handling if needed
            },
            error: function(xhr, textStatus, errorThrown) {
                Swal.fire(
                    'Server Error!',
                    'Vendor Unit Not Deleted',
                    'error'
                )

                // console.log("Request failed with status code: " + xhr.status);
            }
        });
    }
    
</script>

</html>