<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Company | Service Manager</title>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-2">

                                            <h4 class="card-title mb-0 pt-3">Company</h4>
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
                                                <th>S.No</th>
                                                <th>Company Name</th>
                                                <th>Email</th>
                                                <th>No. Of Users</th>
                                                <th>Package</th>
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
            <h5 id="offcanvasRightLabel">Create Company</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
            <div class="row">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Enter First Name</label>
                            <input type="text" class="form-control" placeholder="Enter First Name" id="first_name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Enter Middle Name</label>
                            <input type="text" class="form-control" placeholder="Enter Middle Name" id="middle_name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Enter Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter Last Name" id="last_name">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-email" class="form-label">Enter Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Enter Mobile Number"
                                id="mobile_number">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-phone" class="form-label">Enter Company Name</label>
                            <input type="text" class="form-control" placeholder="Enter Company Name"
                                id="company_name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Enter Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Registration Number</label>
                            <input type="text" class="form-control" placeholder="Enter Registration Number"
                                id="reg_number">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Telephone</label>
                            <input type="text" class="form-control" placeholder="Enter Telephone" id="telephone">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Latitude" class="form-label">Website</label>
                            <input type="text" class="form-control" placeholder="Enter Website" id="website">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Longitude" class="form-label">Communication Channel</label>
                            <div class="col-md-12">
                                <select class="form-control" name="choices-single-default" id="com_channel"
                                    placeholder="Select Communication Channel">
                                    <option value="Call">Call</option>
                                    <option value="Website">SMS</option>
                                    <option value="Email">Email</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-city" class="form-label">Domain</label>
                            <div class="col-md-12">
                                <select class="form-control" name="choices-single-default" id="domain"
                                    placeholder="Select Domain">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-State" class="form-label">Number of Licences</label>
                            <input type="text" class="form-control" placeholder="Enter Number of Licences"
                                id="license">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Country" class="form-label">Data Lines</label>
                            <input type="text" class="form-control" placeholder="Enter Data Line" id="datalines">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Telebox</label>
                            <input type="text" class="form-control" placeholder="Enter Telebox" id="telebox">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-State" class="form-label">Address 1</label>
                            <input type="text" class="form-control" placeholder="Enter Address 1" id="address1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Country" class="form-label">Address 2</label>
                            <input type="text" class="form-control" placeholder="Enter Address 2" id="address2">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Latitude</label>
                            <input type="text" class="form-control" placeholder="Enter Latitude" id="lat">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-State" class="form-label">Longitude</label>
                            <input type="text" class="form-control" placeholder="Enter Longitude" id="lng">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Country" class="form-label">Country</label>
                            <input type="text" class="form-control" placeholder="Enter Country" id="country">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">State/Province</label>
                            <input type="text" class="form-control" placeholder="Enter State/Province"
                                id="state">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-State" class="form-label">City</label>
                            <input type="text" class="form-control" placeholder="Enter City" id="city">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-Country" class="form-label">Subscription Package</label>
                            <select class="form-control" placeholder="Select Subscription Package" id="subscription">

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Support Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" id="support_email">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-State" class="form-label">Support Contact</label>
                            <input type="text" class="form-control" placeholder="Enter Contact"
                                id="support_contact">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        {{-- <label for="example-text-input" class="col-md-2 col-form-label">Domain Members</label> --}}
                        <div class="col-md-6">
                            <div id="fields">
                                <input type="text" name="hidded" id="hidden" hidden>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-10 col-form-label"></label>
                        <div class="col-md-2">

                            <button type="button" onclick="save()"
                                class="btn btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('partials.script')
</body>
<script>
    var domain, table,subscription;
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

        new Choices("#com_channel", {
            removeItemButton: !0,
        })

        domain = new Choices("#domain", {
            removeItemButton: !0,
        })
        subscription = new Choices("#subscription", {
            removeItemButton: !0,
        })
        $.ajax({
            url: "api/domains",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                
                console.log(response);
                domain.setChoices(response,
                    'id',
                    'title',
                    false, );
            }
        });
        $.ajax({
            url: "api/subscription-packages",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                
                console.log(response);
                subscription.setChoices(response,
                    'id',
                    'title',
                    false, );
            }
        });
        $("body").on("click", "#DeleteRow", function() {
            $(this).parents("#row").remove();
        })
        table = $('#myTable').DataTable({
            dom: 'Bfrtip',


            buttons: ['copy', 'excel', 'csv', 'pdf', 'print']

        });
        fetchtable();
    });

    function fetchtable() {
        var settings = {
            "url": "api/companies",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function(response) {
            console.log(response);
            table.clear().draw();
            $.each(response, function(index, data) {
                table.row.add([
                    index + 1,
                    data.name,
                    data.email,
                    '10',
                    'Silver Package',
                    '<button type="button"id="edit" name="edit"  onclick="editData(' +
                    data.id +
                    ')"  class="btn btn-soft-warning waves-effect waves-light"><i class="bx bx-edit-alt font-size-16 align-middle"></i></button>',
                    '<button type="button" id="delete" name="delete" onclick="deleteData(' +
                    data.id +
                    ')" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-trash-alt font-size-16 align-middle"></i></button>'
                ]).draw(false);
            });
        });
    }

    function save() {
        var settings = {
            "url": "api/companies",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "name": document.getElementById("company_name").value,
                "email":document.getElementById("email").value,
                "telephon":document.getElementById("telephone").value,
                "mobile":document.getElementById("mobile_number").value,
                "address_1":document.getElementById("address1").value,
                "address_2":document.getElementById("address2").value,
                "city_id":document.getElementById("city").value,
                "state_id": document.getElementById("state").value,
                "country_id": document.getElementById("country").value,
                "zipcode":"321",
                "status": 1,
                "registration_number": document.getElementById("reg_number").value,
                "first_name": document.getElementById("first_name").value,
                "middle_name":document.getElementById("middle_name").value,
                "last_name": document.getElementById("last_name").value,
                "website": document.getElementById("website").value,
                "communication": document.getElementById("com_channel").value,
                "datalines":document.getElementById("datalines").value,
                "telebox": document.getElementById("telebox").value,
                "domain_id": document.getElementById("domain").value,
                "licences": document.getElementById("license").value,
                "latitude": document.getElementById("lat").value,
                "longitude":document.getElementById("lng").value,
                "support_email":document.getElementById("support_email").value,
                "support_contact":document.getElementById("support_contact").value,
                "subscription_id": document.getElementById("subscription").value,
            }),
        };
        $.ajax({
                ...settings,
                statusCode: {
                    200: function(response) {
                        console.log(response);
                        $('#myModal').modal('hide');
                        console.log("Request was successful");
                        // document.getElementById('example-text-input').value = "";
                        document.getElementById('hidden').value = "";
                        fetchtable();
                        Swal.fire(
                            'Success!',
                            'Company Created Successfully',
                            'success'
                        )
                    },
                    
                },
                success: function(data) {
                    // $('#myModal').reset();
                    // Additional success handling if needed
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log(errorThrown);
                    Swal.fire(
                        'Server Error!',
                        'Company Not Created',
                        'error'
                    )

                    // console.log("Request failed with status code: " + xhr.status);
                }
            });
    }   

    function deleteData(id) {

// alert(id);
var settings = {
    "url": "api/companies/" + id + "",
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
                'Company Deleted Successfully',
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
            'Company Not Deleted',
            'error'
        )

        // console.log("Request failed with status code: " + xhr.status);
    }
});
};
</script>

</html>
