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
                                            <div class="container">
                                              <!-- Nav tabs -->
                                              <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                  <a class="nav-link active" data-toggle="tab" href="#bagian1">Bagian 1</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" data-toggle="tab" href="#bagian2">Bagian 2</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" data-toggle="tab" href="#bagian3">Bagian 3</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" data-toggle="tab" href="#bagian4">Bagian 4</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" data-toggle="tab" href="#bagian5">Bagian 5</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" data-toggle="tab" href="#bagian6">Bagian 6</a>
                                                </li>
                                              </ul>                                     

                                              <!-- Tab panes -->
                                              <div class="tab-content">
                                                <div id="bagian1" class="container tab-pane active"><br>
                                                    <?php if($report_type1): ?>
                                                        <table id="datatable-buttons-type1" class="table table-striped table-bordered nowrap" style="width:100%">

                                                            <thead>

                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <?php for($x=1; $x<=count(json_decode($report_type1[0]->jawaban)); $x++):?>
                                                                        <th>Soal <?= $x?></th>
                                                                        <th></th>
                                                                    <?php endfor ?>

                                                                </tr>
                                                                    
                                                            </thead>
                                                                    
                                                            <tbody>
                                                                <tr>

                                                                    <td>No.</td>

                                                                    <td>NIP</td>

                                                                    <?php for($x=1; $x<=count(json_decode($report_type1[0]->jawaban)); $x++):?>
                                                                        <td>Kepuasan</td>
                                                                        <td>Kepentingan</td>
                                                                    <?php endfor ?>
                                                                    
                                                                </tr>
                                                            <?php $num = 0; ?>         
                                                            <?php foreach ($report_type1 as $row): ?>
                                                            
                                                                <tr>
                                                                    <?php $num++; ?>
                                                                    <td><?= $num; ?></td>
                                                                    <td><?= $row->nip?></td>
                                                                    <?php foreach(json_decode($row->jawaban) as $answer): ?>
                                                                        <td><?= $answer->answer[0]?></td>
                                                                        <td><?= $answer->answer[1]?></td>
                                                                    <?php endforeach; ?>
                                                                    
                                                                 </tr>
                                                                    
                                                                <?php endforeach; ?>
                                                                    
                                                                </tbody>
                                                                    
                                                        </table>
                                                    <?php else: ?>
                                                        <div class = 'text-center'>
                                                            <h4>Belum ada data jawaban</h4>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div id="bagian2" class="container tab-pane"><br>
                                                    <?php if($report_type2): ?>
                                                        <table id="datatable-buttons-type2" class="table table-striped table-bordered nowrap" style="width:100%">

                                                            <thead>

                                                                <tr>

                                                                    <th>No.</th>

                                                                    <th>NIP</th>

                                                                    <?php for($x=1; $x<=count(json_decode($report_type2[0]->jawaban)); $x++):?>
                                                                        <th>Soal <?= $x?></th>
                                                                    <?php endfor ?>
                                                                    
                                                                </tr>
                                                                    
                                                            </thead>
                                                                    
                                                            <tbody>
                                                            <?php $num = 0; ?>        
                                                            <?php foreach ($report_type2 as $row): ?>

                                                                <tr>
                                                                    <?php $num++; ?>
                                                                    <td><?= $num; ?></td>
                                                                    <td><?= $row->nip?></td>
                                                                    <?php foreach(json_decode($row->jawaban) as $answer): ?>
                                                                        <td><?= $answer->answer[0]?></td>
                                                                    <?php endforeach; ?>
                                                                    
                                                                 </tr>
                                                                    
                                                            <?php endforeach; ?>
                                                                    
                                                            </tbody>
                                                                    
                                                        </table>
                                                    <?php else: ?>
                                                        <div class = 'text-center'>
                                                            <h4>Belum ada data jawaban</h4>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div id="bagian3" class="container tab-pane"><br>
                                                    <?php if($report_type3): ?>
                                                        <table id="datatable-buttons-type3" class="table table-striped table-bordered nowrap" style="width:100%">

                                                            <thead>

                                                                <tr>

                                                                    <th>No.</th>

                                                                    <th>NIP</th>

                                                                    <?php for($x=1; $x<=count(json_decode($report_type3[0]->jawaban)); $x++):?>
                                                                        <th>Soal <?= $x?></th>
                                                                    <?php endfor ?>
                                                                    
                                                                </tr>
                                                                    
                                                            </thead>
                                                                    
                                                            <tbody>
                                                            <?php $num = 0; ?>        
                                                            <?php foreach ($report_type3 as $row): ?>
                                                            
                                                                <tr>
                                                                    <?php $num++; ?>
                                                                    <td><?= $num; ?></td>
                                                                    <td><?= $row->nip?></td>
                                                                    <?php foreach(json_decode($row->jawaban) as $answer): ?>
                                                                        <td><?= $answer->answer[0]?></td>
                                                                    <?php endforeach; ?>
                                                                    
                                                                 </tr>
                                                                    
                                                                <?php endforeach; ?>
                                                                    
                                                                </tbody>
                                                                    
                                                        </table>
                                                    <?php else: ?>
                                                        <div class = 'text-center'>
                                                            <h4>Belum ada data jawaban</h4>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div id="bagian4" class="container tab-pane"><br>
                                                    <?php if($report_type4): ?>
                                                        <table id="datatable-buttons-type4" class="table table-striped table-bordered nowrap" style="width:100%">

                                                            <thead>

                                                                <tr>

                                                                    <th>No.</th>

                                                                    <th>NIP</th>

                                                                    <?php for($x=1; $x<=count(json_decode($report_type4[0]->jawaban)); $x++):?>
                                                                        <th>Soal <?= $x?></th>
                                                                    <?php endfor ?>
                                                                    
                                                                </tr>
                                                                    
                                                            </thead>
                                                                    
                                                            <tbody>
                                                            <?php $num = 0; ?>         
                                                            <?php foreach ($report_type4 as $row): ?>
                                                            
                                                                <tr>
                                                                    <?php $num++; ?>
                                                                    <td><?= $num; ?></td>
                                                                    <td><?= $row->nip?></td>
                                                                    <?php foreach(json_decode($row->jawaban) as $answer): ?>
                                                                        <td><?= $answer->answer[0]?></td>
                                                                    <?php endforeach; ?>
                                                                    
                                                                 </tr>
                                                                    
                                                                <?php endforeach; ?>
                                                                    
                                                                </tbody>
                                                                    
                                                        </table>
                                                    <?php else: ?>
                                                        <div class = 'text-center'>
                                                            <h4>Belum ada data jawaban</h4>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div id="bagian5" class="container tab-pane"><br>
                                                    <?php if($report_type5): ?>
                                                        <table id="datatable-buttons-type5" class="table table-striped table-bordered nowrap" style="width:100%">

                                                            <thead>

                                                                <tr>

                                                                    <th>No.</th>

                                                                    <th>NIP</th>

                                                                    <?php for($x=1; $x<=count(json_decode($report_type5[0]->jawaban)); $x++):?>
                                                                        <th>Soal <?= $x?></th>
                                                                    <?php endfor ?>
                                                                    
                                                                </tr>
                                                                    
                                                            </thead>
                                                                    
                                                            <tbody>
                                                            <?php $num = 0; ?>         
                                                            <?php foreach ($report_type5 as $row): ?>
                                                            
                                                                <tr>
                                                                    <?php $num++; ?>
                                                                    <td><?= $num; ?></td>
                                                                    <td><?= $row->nip?></td>
                                                                    <?php foreach(json_decode($row->jawaban) as $answer): ?>
                                                                        <td><?= $answer->answer[0]?></td>
                                                                    <?php endforeach; ?>
                                                                    
                                                                 </tr>
                                                                    
                                                                <?php endforeach; ?>
                                                                    
                                                                </tbody>
                                                                    
                                                        </table>
                                                    <?php else: ?>
                                                        <div class = 'text-center'>
                                                            <h4>Belum ada data jawaban</h4>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div id="bagian6" class="container tab-pane"><br>
                                                    <?php if($report_type6): ?>
                                                        <table id="datatable-buttons-type6" class="table table-striped table-bordered nowrap" style="width:100%">

                                                            <thead>

                                                                <tr>

                                                                    <th>No.</th>

                                                                    <th>NIP</th>

                                                                    <?php for($x=1; $x<=count(json_decode($report_type6[0]->jawaban)); $x++):?>
                                                                        <th>Soal <?= $x?></th>
                                                                    <?php endfor ?>
                                                                    
                                                                </tr>
                                                                    
                                                            </thead>
                                                                    
                                                            <tbody>
                                                            <?php $num = 0; ?>         
                                                            <?php foreach ($report_type6 as $row): ?>
                                                            
                                                                <tr>
                                                                    <?php $num++; ?>
                                                                    <td><?= $num; ?></td>
                                                                    <td><?= $row->nip?></td>
                                                                    <?php foreach(json_decode($row->jawaban) as $answer): ?>
                                                                        <td><?= $answer->answer[0]?></td>
                                                                    <?php endforeach; ?>
                                                                    
                                                                 </tr>
                                                                    
                                                                <?php endforeach; ?>
                                                                    
                                                                </tbody>
                                                                    
                                                        </table>
                                                    <?php else: ?>
                                                        <div class = 'text-center'>
                                                            <h4>Belum ada data jawaban</h4>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                              </div>
                                            </div>

                                            <div id="morris-area-example" class="dashboard-charts morris-charts"></div>

                                        </div>

                                    </div>

                                </div>

            

                            </div>

                            <!-- end row -->



                    </div> <!-- container-fluid -->



                </div> <!-- content -->

                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script>

                $(document).ready(function() {

                    //Buttons examples

                    var table1 = $('#datatable-buttons-type1').DataTable({

                        lengthChange: false,
                        "ordering": false,

                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            {
                                extend: 'excelHtml5',
                                title: 'Report Survey PDAM Bagian 1'
                            },
                            'csvHtml5',
                            {
                                extend: 'pdfHtml5',
                                title: 'Report Survey PDAM Bagian 1'
                            }
                        ],

                        scrollX: true

                    });


                } ); 
                $(document).ready(function() {

                    //Buttons examples

                    var table2 = $('#datatable-buttons-type2').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            {
                                extend: 'excelHtml5',
                                title: 'Report Survey PDAM Bagian 2'
                            },
                            'csvHtml5',
                            {
                                extend: 'pdfHtml5',
                                title: 'Report Survey PDAM Bagian 2'
                            }
                        ],

                        scrollX: true

                    });

                } ); 
                $(document).ready(function() {

                    //Buttons examples

                    var table3 = $('#datatable-buttons-type3').DataTable({

                        lengthChange: false,

                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            {
                                extend: 'excelHtml5',
                                title: 'Report Survey PDAM Bagian 3'
                            },
                            'csvHtml5',
                            {
                                extend: 'pdfHtml5',
                                title: 'Report Survey PDAM Bagian 3'
                            }
                        ]

                    });

                } ); 
                $(document).ready(function() {

                    //Buttons examples

                    var table4 = $('#datatable-buttons-type4').DataTable({

                        lengthChange: false,
                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            {
                                extend: 'excelHtml5',
                                title: 'Report Survey PDAM Bagian 4'
                            },
                            'csvHtml5',
                            {
                                extend: 'pdfHtml5',
                                title: 'Report Survey PDAM Bagian 4'
                            }
                        ],
                        scrollX: true

                    });

                } ); 
                $(document).ready(function() {

                    //Buttons examples

                    var table5 = $('#datatable-buttons-type5').DataTable({

                        lengthChange: false,

                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            {
                                extend: 'excelHtml5',
                                title: 'Report Survey PDAM Bagian 5'
                            },
                            'csvHtml5',
                            {
                                extend: 'pdfHtml5',
                                title: 'Report Survey PDAM Bagian 5'
                            }
                        ]


                    });

                } ); 
                $(document).ready(function() {

                    //Buttons examples

                    var table6 = $('#datatable-buttons-type6').DataTable({

                        lengthChange: false,

                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            {
                                extend: 'excelHtml5',
                                title: 'Report Survey PDAM Bagian 6'
                            }
                            ,
                            'csvHtml5',
                            {
                                extend: 'pdfHtml5',
                                title: 'Report Survey PDAM Bagian 6'
                            }
                        ],


                    });

                } ); 
                </script>




                <footer class="footer">

                        © 2021 Crafted with <i class="mdi mdi-heart text-danger"></i> by SMI IT Team</span>.

                </footer>



            </div>







            <!-- ============================================================== -->

            <!-- End Right content here -->

            <!-- ============================================================== -->