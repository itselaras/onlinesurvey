<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid" style="padding-top: 30px;">

                        <div class="row">
            
                                <div class="col-xl-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Generate User</h4>
                                            <form method="post" action="<?php echo site_url('survey_controller/gen_user')?>">
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah User</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" name="count" type="number" id="count">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id_perusahaan" value="<?php echo $id_perusahaan;?>">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                            
                                            <div id="morris-area-example" class="dashboard-charts morris-charts"></div>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                            <!-- end row -->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->