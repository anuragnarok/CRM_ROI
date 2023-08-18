<?php
session_start();
include('header.php');

include('leftSideBar.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Properties</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Location</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="col-12" action="areapricing.php">
                            <div class="card-body">
                                <div class="col-12 form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" id="" placeholder="Type your address">
                                </div>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label for="">Lat</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                    <div class="col-6 form-group">
                                        <label for="">Long</label>
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Flat/Office/Unit No.</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Property/Developer Name</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Building/Tower/Project</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Street</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Landmark</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Pin Code</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">City<span class="text-danger">*</span></label>
                                    <select class="form-select border-form-control required col-12" name="For" id="" placeholder="Select" required>
                                        <option>Select</option>
                                        <option value="Dibrugarh">Dibrugarh</option>
                                        <option value="Guwahati">Guwahati</option>
                                        <option value="Jorhat">Jorhat</option>
                                        <option value="Tezpur">Tezpur</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="">Locality<span class="text-danger">*</span></label>
                                    <select class="form-select border-form-control required col-12" name="For" id="" placeholder="Select" required>
                                        <option>Select</option>
                                        <option value="ABC">ABC</option>
                                        <option value="Beltola">Beltola</option>
                                        <option value="Bhangagarh">Bhangagarh</option>
                                        <option value="Boruah Chariali">Boruah Chariali</option>
                                        <option value="GS Road">GS Road</option>
                                        <option value="Khanapara">Khanapara</option>
                                        <option value="Mission Chariali">Mission Chariali</option>
                                        <option value="Thana Chariali">Thana Chariali</option>
                                        <option value="Zoo Road">Zoo Road</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>

    </section>
</div>

<?php
include('footer.php');
?>