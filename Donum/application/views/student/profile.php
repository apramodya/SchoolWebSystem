<div class="container">
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> <?= $student['first_name'].'\'s Personal Details '; ?></h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="panel-body">
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item"><b>Student ID: </b><?= $student['student_id'];?></li>
                            <li class="list-group-item"><b>Full name: </b><?= $student['first_name'].' '.$student['last_name'];?></li>
                            <li class="list-group-item"><b>Date of Birth: </b><?= $student['dob'];?></li>
                            <li class="list-group-item"><b>Home Address: </b><?= $student['home_address'];?></li>
                            <li class="list-group-item"><b>Current Address: </b><?= $student['current_address'];?></li>
                            <hr>
                            <li class="list-group-item"><b>Mother's Name: </b><?=  $student['mothers_name'];?></li>
                            <li class="list-group-item"><b>Mother's Job: </b><?=  $student['mothers_job'];?></li>
                            <hr>
                            <li class="list-group-item"><b>Father's Name: </b><?=  $student['fathers_name'];?></li>
                            <li class="list-group-item"><b>Father's Job: </b><?=  $student['fathers_job'];?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> <?= $student['first_name'].'\'s Academic Details '; ?></h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                    class="glyphicon glyphicon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="panel-body">
                        <!-- List group -->
                        <ul class="list-group">
                            <li class="list-group-item"><b>Student ID: </b><?= $student['student_id'];?></li>
                            <li class="list-group-item"><b>Full name: </b><?= $student['first_name'].' '.$student['last_name'];?></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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