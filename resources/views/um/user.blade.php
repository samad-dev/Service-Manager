<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Users | Service Manager</title>
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

                                            <h4 class="card-title mb-0 pt-3">Users</h4>
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
                                                <th>Company</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Edit</th>
                                                <th>DELETE</th>
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
            <h5 class="modal-title" id="myModalLabel">
                <h5 id="labelc">Create</h5>
                <br>
                <h5>Users</h5>
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>
        <div class="offcanvas-body">
            <div class="row">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-firstname" class="form-label">Enter First Name</label>
                            <input type="text" class="form-control" placeholder="Enter First Name" id="name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-email" class="form-label">Enter Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter Enter Email" id="last_name">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-email" class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-password" class="form-label">Password</label>
                            <input type="text" class="form-control" placeholder="Enter password" id="password">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputCity" class="form-label">Company</label>
                            <div class="col-md-12">
                                <select class="form-control" id="company" placeholder="This is a search placeholder">

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formrow-inputZip" class="form-label">Designation</label>
                            <div class="col-md-12">
                                <select class="form-control" id="type" placeholder="This is a search placeholder">

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Roles</label>
                        <!-- <div>
                            <button type="button" class="btn btn-primary waves-effect waves-light" style="
                            height: 35px;
                            width: 100px;
                            margin-bottom: 10px;
                            font-size: small;
                        ">Select
                                all</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light" style="
                            height: 35px;
                            width: 100px;
                            margin-bottom: 8px;
                            font-size: small;
                        ">Deselect
                                all</button>
                        </div> -->
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Enter Roles" id="roll">
                        </div>
                    </div>
                </div>
                <!-- <div class="card-body">
                    <div>
                        <form action="#" class="dropzone dz-clickable">

                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                </div>

                                <h4>Drop files here or click to upload.</h4>
                            </div>
                        </form>
                    </div>
                </div> -->
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
                            <button type="button" onclick="submit()"
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
var table;
var type;
$(document).ready(function() {


    $.ajax({
        url: "http://localhost:8000/api/designations",
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
    table = $('#myTable').DataTable({
        dom: 'Bfrtip',


        buttons: ['copy', 'excel', 'csv', 'pdf', 'print']

    });
    fetchtable();
});

function fetchtable() {
    var settings = {
        "url": "http://localhost:8000/api/users",
        "method": "GET",
        "timeout": 0,
    };

    $.ajax(settings).done(function(response) {
        console.log(response);
        table.clear().draw();
        $.each(response, function(index, data) {
            table.row.add([
                index + 1,
                data.company_id,
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
        var subtype_val = $('#type').find(":selected").val();

        var form = new FormData();
        form.append("first_name", document.getElementById("name").value);
        form.append("last_name", document.getElementById("last_name").value);
        form.append("company_id", "1");
        form.append("email", document.getElementById("email").value);
        form.append("name", "P2P");
        form.append("designation_id", subtype_val);
        form.append("password", document.getElementById("password").value);

        var settings = {
            "url": "http://localhost:8000/api/users",
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
                        'User Created Successfully',
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
                    'User Not Created',
                    'error'
                )
            }
        });
    } else {
        var subid = $('#type').find(":selected").val();
        var settings = {
            "url": "http://localhost:8000/api/users/" + update_id + "",
            "method": "PUT",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "first_name": document.getElementById("name").value,
                "last_name": document.getElementById("last_name").value,
                "company_id": 0,
                "name": document.getElementById("name").value,
                "email": document.getElementById("email").value,
                "password": document.getElementById("password").value,
                "designation_id": "1"
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
                        'User updated Successfully',
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
                    'User Not updated',
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
        "url": "http://localhost:8000/api/users/" + id + "",
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            "first_name": document.getElementById("name").value,
            "last_name": document.getElementById("last_name").value,
            "company": document.getElementById("company").value,
            "email": document.getElementById("email").value,
            "password": document.getElementById("password").value,

        }),
    };

    $.ajax({
        ...settings,
        statusCode: {
            200: function(response) {
                console.log(response[0]['name']);
                document.getElementById('hidden').value = response[0]['id'];
                document.getElementById("name").value = response[0]["first_name"];
                document.getElementById("last_name").value = response[0]["last_name"];
                document.getElementById("email").value = response[0]["email"];
                document.getElementById("password").value = response[0]["password"];
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
        "url": "http://localhost:8000/api/users/" + id + "",
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
                    'User Deleted Successfully',
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
                'User Unit Not Deleted',
                'error'
            )

            // console.log("Request failed with status code: " + xhr.status);
        }
    });
}
</script>

</html>