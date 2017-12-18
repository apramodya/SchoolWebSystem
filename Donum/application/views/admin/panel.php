<div>
    <h2 class="text-center">Admin Panel</h2>
    <br>
    <hr>
    <br>
    <br>
    <?php echo validation_errors(); ?>
</div>

<div class="container">
    <!--students-->
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Students</h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date entered</th>
                            <th>Student ID#</th>
                            <th>Grade</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($students as $student): ?>
                            <?php
                            //date_default_timezone_set('Asia/Colombo');
                            //$entering_class = $student['entering_class'];
                            //$year_entered = date("Y",$student['date_entered']);
                            //$current_year = date("Y");
                            //$current_class = $entering_class + ($current_year-$year_entered);

                            ?>
                            <tr>
                                <?php $sid = $student['student_id']; ?>
                                <td class="center"><?php echo $student['first_name']. ' '.$student['last_name'] ;?></td>
                                <td class="center"><?php echo $student['date_entered'] ;?></td>
                                <td class="center"><?php echo $student['student_id'] ;?></td>
                                <td class="center"><?php echo $student['entering_class'] ;?></td>
                                <td class="center">
                                    <a class="btn btn-success" href="<?php echo site_url('student/profile/'.$sid); ?>">
                                        <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                        View
                                    </a>
                                    <a class="btn btn-info" href="<?php echo site_url('student/edit/'.$sid); ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
    <!--teachers-->
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Teachers</h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date entered</th>
                            <th>NID#</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($teachers as $teacher): ?>
                            <tr>
                                <?php $tid = $teacher['nid']; ?>
                                <td class="center"><?php echo $teacher['first_name']. ' '.$student['last_name'] ;?></td>
                                <td class="center"><?php echo $teacher['date_entered'] ;?></td>
                                <td class="center"><?php echo $teacher['nid'] ;?></td>
                                <td class="center"><?php echo $teacher['email'] ;?></td>
                                <td class="center">
                                    <a class="btn btn-success" href="<?php echo site_url('teacher/profile/'.$tid); ?>">
                                        <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                        View
                                    </a>
                                    <a class="btn btn-info" href="<?php echo site_url('teacher/edit/'.$tid); ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/span-->
    </div><!--/row-->
</div>

<div>
    <!-- external javascript -->

    <script src="<?php echo base_url() ?>assets/charisma/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- library for cookie management -->
    <script src="<?php echo base_url() ?>assets/charisma/js/jquery.cookie.js"></script>
    <!-- calender plugin -->
    <script src='<?php echo base_url() ?>assets/charisma/bower_components/moment/min/moment.min.js'></script>
    <script src='<?php echo base_url() ?>assets/charisma/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
    <!-- data table plugin -->
    <script src='<?php echo base_url() ?>assets/charisma/js/jquery.dataTables.min.js'></script>

    <!-- select or dropdown enhancer -->
    <script src="<?php echo base_url() ?>assets/charisma/bower_components/chosen/chosen.jquery.min.js"></script>
    <!-- plugin for gallery image view -->
    <script src="<?php echo base_url() ?>assets/charisma/bower_components/colorbox/jquery.colorbox-min.js"></script>
    <!-- notification plugin -->
    <script src="<?php echo base_url() ?>assets/charisma/js/jquery.noty.js"></script>
    <!-- library for making tables responsive -->
    <script src="<?php echo base_url() ?>assets/charisma/bower_components/responsive-tables/responsive-tables.js"></script>
    <!-- tour plugin -->
    <script src="<?php echo base_url() ?>assets/charisma/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
    <!-- star rating plugin -->
    <script src="<?php echo base_url() ?>assets/charisma/js/jquery.raty.min.js"></script>
    <!-- for iOS style toggle switch -->
    <script src="<?php echo base_url() ?>assets/charisma/js/jquery.iphone.toggle.js"></script>
    <!-- autogrowing textarea plugin -->
    <script src="<?php echo base_url() ?>assets/charisma/js/jquery.autogrow-textarea.js"></script>
    <!-- multiple file upload plugin -->
    <script src="<?php echo base_url() ?>assets/charisma/js/jquery.uploadify-3.1.min.js"></script>
    <!-- history.js for cross-browser state change on ajax -->
    <script src="<?php echo base_url() ?>assets/charisma/js/jquery.history.js"></script>
    <!-- application script for Charisma demo -->
    <script src="<?php echo base_url() ?>assets/charisma/js/charisma.js"></script>
</div>