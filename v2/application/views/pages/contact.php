 <div class="container-fluid">
    <div class="image">
     
        <img src="<?php echo base_url() ?>image/bh.jpg">
      
    </div>
    </div>
    <!--/imge-->
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-6">
    <!-- contacts card -->
    <div class="card card-default" id="card_contacts">
        <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
            <ul class="list-group pull-down" id="contact-list">
                <li class="list-group-item">
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="http://demos.themes.guide/bodeo/assets/images/users/m101.jpg" alt="Mike Anamendolla" class="rounded-circle mx-auto d-block img-fluid">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                            <span class="fa fa-mobile fa-2x text-success float-right pulse" title="online now"></span>
                            <label class="name lead">Principal</label>
                            <br> 
                            <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5842 Hillcrest Rd"></span>
                            <span class="text-muted">MR M.R.K.Chamara</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(870) 288-4149"></span>
                            <span class="text-muted small">011-1510286</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                            <span class="text-muted small text-truncate">mrkchamara@gmail.com</span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="http://demos.themes.guide/bodeo/assets/images/users/m105.jpg" alt="Seth Frazier" class="img-fluid rounded-circle d-block mx-auto">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                            <span class="name lead">Primary Principal</span>
                            <br>
                            <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="7396 E North St"></span>
                            <span class="text-muted">MR A.D.S.Dissanayake</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(560) 180-4143"></span>
                            <span class="text-muted small">011-1510287</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="seth.frazier@example.com"></span>
                            <span class="text-muted small text-truncate">amila9darshana@egmail.com</span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="http://demos.themes.guide/bodeo/assets/images/users/w102.jpg" alt="Rosemary Porter" class="img-fluid rounded-circle d-block mx-auto">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                            <span class="fa fa-envelope fa-lg text-danger float-right" title="left you a message"></span>
                            <span class="name lead">Vice Principal</span>
                            <br> <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5267 Cackson St"></span>
                            <span class="text-muted">MRS S.D.A.Munasinhe</span>
                            <br>
                            <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(497) 160-9776"></span>
                            <span class="text-muted small">011-1510288</span>
                            <br>
                            <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="rosemary.porter@example.com"></span>
                            <span class="text-muted small text-truncate">rosemary.porter@example.com</span>
                            <br>

                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 col-md-3 px-0">
                            <img src="http://demos.themes.guide/bodeo/assets/images/users/w104.jpg" alt="Debbie Schmidt" class="img-fluid rounded-circle d-block mx-auto">
                        </div>
                        <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                            <label class="name lead">Vice Principal</label>
                            <br>

                            <span class="fa fa-fw fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="3903 W Alexander Rd"></span>
                            <span class="text-muted">Miss V.W.A.Tharindi</span>
                            <br>

                            <span class="fa fa-fw fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(867) 322-1852"></span>
                            <span class="text-muted small">0111-22758260</span>
                            <br>

                            <span class="fa fa-fw fa-envelope fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="debbie.schmidt@example.com"></span>
                            <span class="text-muted small text-truncate">akilatharindi@gmail.com</span>

                        </div>
                    </div>
                </li>
            </ul>
            <!--/contacts list-->
        </div>
    </div>
    </div>
    <div class="col-md-6">
      <<center>
          <h1>SEND A MESSAGE</h1>
      </center>
      <?php echo validation_errors();?>
      <?php echo form_open('Controller_con/sentmessage'); ?>
      
        <div class="name">
        <label for="Your name">Your name:</label>
        <input type="text" class="form-control" name="yourname">
        </div>
    <div class="email">
      <label for="email">Your email:</label>
      <input type="email" class="form-control" id="pwd" name="youremail">
    </div>
    <div class="subject">
        <label for="subject">Subject:</label>
        <input type="text" class="form-control" name="subject">
        </div>
        <div class="form-group">
          <label for="comment">Message:</label>
            <textarea class="form-control" rows="5" id="comment" name="message"></textarea>

        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <?php echo form_close();?>
      
      
      
    </div>
    </div>
    </div>
    
    <div class="map" style="margin-left: 120px">
      <h1>MAP</h1>
    </div>

    <!--map-->
    <div class="row">
    <div class="col-md-9">
      
        
          <iframe width="50%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed" style="margin-left: 50px"></iframe>
        
      
      </div>
      
    <div class="col-md-3">  
        <div class="span4">
        <h3>DONUM DEI Institute-International School</h3>
        <address>
          <strong>donumdei@gmail.com</strong><br>
          15<br>
          Idama<br>
          Moratuwa<br>
          Sri lanka<br>
          
          <abbr title="Phone">TEL:</abbr> 011-0151899
        </address>
      
      </div>
      </div>
    
    </div>
    <!--/map-->
    

