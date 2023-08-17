<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<?php 
include('header.php');
include('leftSideBar.php');
include('footer.php');
?>

<head>

    <meta charset="utf-8" />
    <title>File Manager | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="file-detail-show">

    <!-- Begin page -->
    <div id="layout-wrapper">

  

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                        <div class="file-manager-sidebar" >
                            <div class="p-3 d-flex flex-column h-100  ">
                                <div class="mb-3">
                                    <h5 class="mb-0 fw-semibold">MEDIA</h5>
                                </div>
                               
                                <div class="mt-3 mx-n4 px-4 file-menu-sidebar-scroll" data-simplebar>
                                    <ul class="list-unstyled file-manager-menu">
                                        <li>
                                            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                                                <i class="ri-folder-2-line align-bottom me-2"></i> <span class="file-list-link">Plans and Drawing</span>
                                            </a>
                                            <div class="collapse show" id="collapseExample">
                                                <ul class="sub-menu list-unstyled">
                                                    <li>
                                                        <a href="#!">Floor Plans</a>
                                                    </li>
                                                    <li>
                                                        <a href="#!">Project plans</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="ri-file-list-2-line align-bottom me-2"></i> <span class="file-list-link">Brochure</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="ri-image-2-line align-bottom me-2"></i> <span class="file-list-link">Marketing Materials</span></a>
                                        
                                        </li>
                                        
                                    </ul>
                                </div>
                                    

                                
                            </div>
                        </div>
                        <!-- Form Placement -->
                        <div>hello Real code will go HEREEEE</div>
                        
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- START CREATE FOLDER MODAL -->
            <div class="modal fade zoomIn" id="createFolderModal" tabindex="-1" aria-labelledby="createFolderModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-success-subtle">
                            <h5 class="modal-title" id="createFolderModalLabel">Create Folder</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" id="addFolderBtn-close" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form autocomplete="off" class="needs-validation createfolder-form" id="createfolder-form" novalidate>
                                <div class="mb-4">
                                    <label for="foldername-input" class="form-label">Folder Name</label>
                                    <input type="text" class="form-control" id="foldername-input" required placeholder="Enter folder name">
                                    <div class="invalid-feedback">Please enter a folder name.</div>
                                    <input type="hidden" class="form-control" id="folderid-input" value="" placeholder="Enter folder name">
                                </div>
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-success" data-bs-dismiss="modal"><i class="ri-close-line align-bottom"></i> Close</button>
                                    <button type="submit" class="btn btn-primary" id="addNewFolder">Add Folder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CREATE FOLDER MODAL -->

            <!-- START CREATE FILE MODAL -->
            <div class="modal fade zoomIn" id="createFileModal" tabindex="-1" aria-labelledby="createFileModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-success-subtle">
                            <h5 class="modal-title" id="createFileModalLabel">Create File</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" id="addFileBtn-close" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form autocomplete="off" class="needs-validation createfile-form" id="createfile-form" novalidate>
                                <div class="mb-4">
                                    <label for="filename-input" class="form-label">File Name</label>
                                    <input type="text" class="form-control" id="filename-input" value="" required placeholder="Enter file name" />
                                    <div class="invalid-feedback">Please enter a file name.</div>
                                    <input type="hidden" class="form-control" id="fileid-input" value="" placeholder="Enter file name">
                                </div>
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-success" data-bs-dismiss="modal"><i class="ri-close-line align-bottom"></i> Close</button>
                                    <button type="submit" class="btn btn-primary" id="addNewFile">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CREATE FILE MODAL -->

            <!-- removeFileItemModal -->
            <div id="removeFileItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removefilemodal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this item ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="remove-fileitem">Yes, Delete It!</button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- removeFileItemModal -->
            <div id="removeFolderModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removeFoldermodal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this folder ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="remove-folderList">Yes, Delete It!</button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    

    <!-- Theme Settings -->
    

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/pages/file-manager.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>