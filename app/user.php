<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    /* adds some margin below the link sets  */
.navbar .dropdown-menu div[class*="col"] {
   margin-bottom:1rem;
}

.navbar .dropdown-menu {
  border:none;
  background-color:#f7f7f7 !important;
}

/* breakpoint and up - mega dropdown styles */
@media screen and (min-width: 992px) {
  
  /* remove the padding from the navbar so the dropdown hover state is not broken */
.navbar {
  padding-top:0px;
  padding-bottom:0px;
}

/* remove the padding from the nav-item and add some margin to give some breathing room on hovers */
.navbar .nav-item {
  padding:.5rem .5rem;
  margin:0 .25rem;
}

/* makes the dropdown full width  */
.navbar .dropdown {position:static;}

.navbar .dropdown-menu {
 border-style:none !important;   
  width:100%;
  left:0;
  right:0;
/*  height of nav-item  */
  top:45px;
}
  
  /* shows the dropdown menu on hover */
.navbar .dropdown:hover .dropdown-menu, .navbar .dropdown .dropdown-menu:hover {
  display:block!important;
}
  
  .navbar .dropdown-menu {
    border: 1px solid rgba(0,0,0,.15);
    background-color: #444444;
  }
  .navbar-dark .navbar-nav .nav-link {
    color: #444444 !important;
}
nav.navbar.navbar-expand-lg.navbar-dark {
    background-color: #f7f7f7 !important;
}



}


</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          
          <div class="container">
            
            <div class="row">
                
              <div class="col-md-2">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link " href="#">NEW IN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">SALE</a>
                </li>
               
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-2">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link " href="#">SHOP SWIM</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">One piece</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Bikini</a>
                </li>
              </ul>
              </div>
               <div class="col-md-2">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link " href="#">SHOP SUN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">sunglassles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hats</a>
                </li>
              </ul>
              </div>
               <div class="col-md-2">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link " href="#">SHOP THE EDIT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Wild Palm Pics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">SS/18 Patterans</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
            
            </div>
           
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    

    </ul>
    
  </div>


</nav>
<script type="text/javascript">
    $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
    if ($(window).width() >= 980){  

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
       alert('v');
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show");
         $(this).css({"border-top":"0","border-bottom":"0.3em solid"})
       
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
        // do something here
    }   
});  
  
  

// document ready  
});
</script>