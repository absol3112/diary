<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Messenger</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php foreach ($messengerResult as $messengerResult) {?>
	                                        <tr class="gradeX tableDetail" data-href="admin/messenger/detail?id=<?=$messengerResult->messenger_id?>">
	                                        	<td><?=$messengerResult->messenger_id?></td>
	                                            <td><?=$messengerResult->name?></td>
	                                            <td><?=$messengerResult->email?></td>
	                                            <td><?=$messengerResult->date?></td>
	                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
