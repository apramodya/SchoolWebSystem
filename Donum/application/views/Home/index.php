

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url() ?>img/donum7.jpg" alt="image1" style="width:100%;height:400px">
      <div>
          
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>img/donum6.jpg" alt="image2" style="width:100%;height:400px">
    </div>

    <div class="item">
      <img src="<?php echo base_url() ?>img/donum8.jpg" alt="image3" style="width:100%;height:400px">
    </div>
 
 
    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <div class="col-md-2">
     <div class="row" style="height:80px"></div>
  <img src="<?php echo base_url();?>image/principal.jpg" style="width:200px;height:200px" >
</div>


         <div class="row" style="height:50px"></div>

<div>
<div style="text-align: center;">
	<h2>PRINICIPAL'S MESSAGE</h2></div>
	         <div class="row" style="height:30px"></div>

	<div class="col-sm-8" style="font-size: 15px; margin-left: 50px; ">
            <p>Donum Dei Institute is an international school which was established in 08<sup>th</sup> of September 2015 with 8 students and 3 teachers to ofer a Cambridge Education for students from Primary,Secondary Level to Advanced Level.<br>
            Donum Dei is one of the best schol which you can gurantee your chid's sucess in all the ways</p>
          </div>
    </div>

         <div class="row" style="height:150px"></div>

   


<div style="background-color: #7F7FFF">
<div class="row" style="margin-left: 400px;  margin-top: 20px; margin-bottom: 20px;" >
<h1><?= $title ?></h1></div>
<div class="col-md-10" style="text-align: center;">
<div class="row" style="font-size: 20px; color: #0000ff">
<?php foreach ($Announce as $Amt) : ?> 
  <?php echo $Amt['Announce']; ?>
  <!-- <p><a class="btn btn-default" href="<?php echo site_url('/Home/'.$Amt['Announce']); ?>">Read More</a></p>  -->
  <?php endforeach; ?>
</div>
</div>
</div>
         <div class="row" style="height:150px"></div>
