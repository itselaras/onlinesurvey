<!-- ============================================================== -->

            <!-- Start right Content here -->

            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Start content -->

                <div class="content">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="page-title-box">

                                    <h4 class="page-title">File Upload</h4>

                                </div>

                            </div>

                        </div>

                        <!-- end row -->



                        <div class="row">

                            <div class="col-12">

                                <div class="card m-b-20">

                                    <div class="card-body">

        

                                        <div class="m-b-30">

                                            <form action="<?php echo site_url('spreadsheet_controller/import');?>" method="post" enctype="multipart/form-data">

                                            <input name="perusahaan" type="hidden" value="<?= $id_perusahaan;?>">

                                            <div class="form-group">

                                                    <label for="exampleInputFile">Silahkan upload berkas dengan ekstensi xlsx atau csv.</label>

                                                    <a href="<?php echo base_url('assets/files/template_import_soal.xlsx')?>" download="Template Import Soal">(Download Template)</a>

                                                    <input type="file" name="excel" class="form-control" id="exampleInputFile">

                                                </div>

                                                

                                                <input type="submit" class="btn btn-primary" value="Import" name="import" />

                                            </form>

                                        </div>

                                </div>

                            </div> <!-- end col -->

                        </div> <!-- end row -->

        



                    </div> <!-- container-fluid -->



                </div> <!-- content -->



            </div>

