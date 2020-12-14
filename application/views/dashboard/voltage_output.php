                <div class="container-fluid">
`
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Node</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>time</th>
                                            <th>tegangan</th>
                                        </tr>
                                        <?php foreach ($table as $radonkcook) {?>
                                        <tr>
                                            <th><?php echo $radonkcook->date; ?></th>
                                            <th><?php echo $radonkcook->voltage_output; ?></th>
                                        </tr>
                                        <?php } ?>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->