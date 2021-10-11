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

                                             <div class="m-b-30">

                                                <form action="<?php echo site_url('spreadsheet_controller/import_user');?>" method="post" enctype="multipart/form-data">

                                                    <input name="perusahaan" type="hidden" value="<?php $id_perusahaan;?>">

                                                    <div class="form-group">

                                                            <label for="exampleInputFile">Silahkan upload berkas dengan ekstensi xlsx atau csv.</label>

                                                            <a href="<?php echo base_url('assets/files/template_import_user.xlsx')?>" download="Template Import User">(Download Template)</a>

                                                            <input type="file" name="excel" class="form-control" id="exampleInputFile">

                                                    </div>



                                                        <input type="submit" class="btn btn-primary" value="Import" name="import" />

                                                </form>

                                            </div>

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