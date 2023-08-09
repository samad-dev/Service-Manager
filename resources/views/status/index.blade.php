<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 18:04:41 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Status | Service Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" /> --}}
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
        @include("partials.style")
    </head>

    
    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include("partials.header")
            <!-- ========== Left Sidebar Start ========== -->
            @include("partials.navbar")
            <!-- Left Sidebar End -->
            @include("partials.horizontal_head")


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
                                            <div class="col-md-1">

                                                <h4 class="card-title mb-0 pt-3">Status</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-soft-primary waves-effect waves-light"  data-bs-toggle="modal" data-bs-target="#myModal">
                                                    <i class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i> Add New
                                                </button>
                                                {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add New</button> --}}
                                                {{-- <button type="button" class="btn btn-primary waves-effect waves-light">Add New</button> --}}
                                            </div>
                                        </div>
                                        
                                    </div><!-- end card header -->
                                    <div class="card-body">
                                        <table id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Company</th>
                                                    <th>Status</th>
                                                    
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Test</td>
                                                    <td>Test</td>
                                                    <td>Edit/Delete</td>
                                                </tr>
                                                
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
            @include("partials.footer")
        </div>
        <!-- END layout-wrapper -->
        @include("partials.right_bar")
        <!-- Right Sidebar -->
       
        <!-- JAVASCRIPT -->
       

        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Create Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" placeholder="Enter Status Title" id="example-text-input">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12">
                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Parent</label>
                                    <div class="col-md-10">
                                        
                                                <select class="form-control" data-trigger name="choices-single-default"
                                                    id="choices-single-default"
                                                    placeholder="This is a search placeholder">
                                                    
                                                </select>
                                          
                                    </div>
                                </div>
                            </div> --}}
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        @include("partials.script")
    </body>
    <script>
        $(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'colvis', 
          {
            extend: 'csv',
             // Add the custom class to the CSV button
          },
          {
            extend: 'excel', // Add the custom class to the Excel button
          },
          {
            extend: 'pdf',// Add the custom class to the Excel button
          },
          {
            extend: 'print',// Add the custom class to the Excel button
          }
          // Add more buttons and classes as needed
        ]
    } );
} );
    </script>    
</html>

