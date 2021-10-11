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

                                            <h4 class="mt-0 header-title">Edit Data User</h4>

                                            <form method="post" action="<?php echo site_url('survey_controller/update_user/'.$user->id) ?>">

                                                <div class="form-group row">

                                                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>

                                                    <div class="col-sm-10">

                                                        <input class="form-control" name="nip" type="text" id="nip" value="<?php echo $user->nip?>">

                                                    </div>

                                                </div>
                                                <div class="form-group row">

                                                    <label for="id-batch" class="col-sm-2 col-form-label">ID Batch</label>

                                                    <div class="col-sm-10">

                                                        <input class="form-control" name="id-batch" type="text" id="id-batch" value="<?php echo $user->id_batch?>">

                                                    </div>

                                                </div>
                                                <div class="form-group row">

                                                    <label for="status" style="margin-right:15px;" class="col-sm-2 col-form-label ">Status Survey</label>

                                                    <select name="status" class="form-select" aria-label="Default select example" id="status">
                                                      <option <?= $user->status == '1'?'selected':'' ?> value="1">Sudah Survey</option>
                                                      <option <?= $user->status != '1'?'selected':'' ?> value="0">Belum Survey</option>
                                                    </select>

                                                </div>

                                            <button type="submit" class="btn btn-primary">Update</button>

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