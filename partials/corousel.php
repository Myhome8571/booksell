<!--corausel-->
<?php $var= rand(1,1);?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <!--  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>-->
  
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <img src="<?php echo "img/new[".$var."].jpg";?>" class="d-block w-100" alt="..." width="250" height="560">
       <div class="carousel-caption d-none d-md-block">
       <p class="exampleText">Welcome to Booktool</p>
      
      </div>
    </div>
<style>
   
.exampleText {
  padding: 200px 50px;
  font-size: 55px;
 text-align: center;
 font-family: 'Josefin Sans', sans-serif;
}
</style>


 <!-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
<!--end-->