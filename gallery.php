<?php
include 'include/header.php';
require 'include/crud.php';

$crud = new crud();
$sql = "select * from picture where placement='gallery'";

$result = $crud->getData($sql);
?>
<!--start gallery-->
<!--top- heading-->
<div class="top-heading">
    <!--start-wrap-->
    <div class="wrap">
        <h1>Gallery</h1>
    </div>
    <!--end wrap-->
</div>
<div class="toolbar">
  <button class="myBtn fil-cat" href="#" data-rel="all">All</button>
  <button class="myBtn fil-cat" href="#" data-rel="logo">TIBF</button>
  <button class="myBtn fil-cat" href="#" data-rel="pen">USENGE</button>
  <button class="myBtn fil-cat" href="#" data-rel="web">RUIRU</button>
  <button class="myBtn fil-cat" href="#" data-rel="app">MOSIRO</button>
</div>
<div style="clear:both"></div>
    <div class="panel-group">
        <?php foreach ($result as $key => $value) {?>
           <div class="images scale-anm <?php echo $value['filter'];?> all">
            <a href="images/mission/<?php echo $value['name']; ?>" data-fancybox>
            <img src="images/mission/<?php echo $value['name']; ?>"
               alt="<?php echo $value['name']; ?>"
               width="250px" height="200px"
                 /></a>
      </div>

            <?php
        }
        ?>

            <div class="clear"> </div>
        </div>
        <!--End-gallery-->
    <script>
            $(function() {
            var selectedClass = "";
            $(".fil-cat").click(function(){
            selectedClass = $(this).attr("data-rel");
             $(".panel-group").fadeTo(100, 0.1);
            $(".panel-group div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
            setTimeout(function() {
              $("."+selectedClass).fadeIn().addClass('scale-anm');
              $(".panel-group").fadeTo(300, 1);
            }, 300);

            });
            });
                /* This is basic - uses default settings */
              $("[data-fancybox]").fancybox({});
              
</script>    
</body>
</html>