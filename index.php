<?php
include 'include/crud.php';
$crud=new crud();
$sql="select * from picture where placement='slider'";
$sql1="select * from picture where placement='panel'";

$slider=$crud->getData($sql);
$panel=$crud->getData($sql1);

include 'include/header.php';


?>
<!-- start slider -->
<div class="main-con">
    <div class="slider">
        <div class="animated fadeInUpBig" />
        <div class="color"> <span></span></div>
        <div class="wrap">
            <div class="fluid_container">
                <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
                    <?php
                    foreach ($slider as $key => $value) {?>
                        <div data-src="images/home/<?php echo $value['name']; ?>">
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- #camera_wrap_2 -->
            </div>
            <!-- .fluid_container -->
            <div class="clear"></div>
        </div>
    </div>
    <!--end slider-->
    <!--start home-page-con-->

    <div class="home-page-con">
        <div class="wrap">
            <div class="top-grids">
                <div class="top-grid">
                    <div class="top-grid-info">
                        <h2>WELCOME</h2>
                        <div class="clear"> </div>
                    </div>
                    <p>Shallom and welcome to ou website. We endevour to forward God's word to every corner of the world and emphasize on fellowship, discipleship, worship, ministry and evangelism . </p>
                </div>
                <div class="top-grid">
                    <div class="top-grid-info">
                        <h2>VISION</h2>
                        <div class="clear"> </div>
                    </div>
                    <p>To be a christ-centered Bible teaching church dedicated to helping develop the spiritual growth of each member of the family and equip them to become active in the ministry. </p>
                </div>
                <div class="top-grid">
                    <div class="top-grid-info">
                        <h2>MISSION</h2>
                        <div class="clear"> </div>
                    </div>
                    <p>We exist as a family of mature believers transforming seekers into disciples, developing talents and empowering people to win souls and establishing strong churches. </p>
                </div>
                <div class="clear"> </div>
            </div>

            <div class="heading">
                <h2>recent works</h2>
                <h6> </h6>
                <div class="clear"> </div>
            </div>

            <!--end home-page-con-->
            

                <!--start-mfp -->
                <?php
                foreach ($panel as $key => $myPanel) {?>
                    <div id="small-dialog1" class="mfp-hide">
                    <div class="pop_up">
                        <img src="images/home/<?php echo $myPanel['name'];?>"/>
                    </div>
                </div>
                <?php
                }?>
                         <!--end-mfp -->
                            <!--start-content-->
                            <div class="gallery">
                                <div class="clear"> </div>
                                <div class="container">

                                    <div id="gallerylist">
                                        <?php 
                                        foreach($panel as $key=>$val){?>

                                        <div class="gallerylist-wrapper">
                                            <a class="popup-with-zoom-anim" href="#small-dialog1">
                                                <img src="images/home/<?php echo $val['name'];?>"  />
                                                <span><img src="images/plus.png" alt=" "/> </span>
                                            </a>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- container -->
                            <script type="text/javascript" src="js/fliplightbox.min.js"></script>
                            <script type="text/javascript">
                                $('body').flipLightBox()
                            </script>
                            <div class="clear"> </div>
                        </div>

                    </div>
                </div>
                <?php
                include 'include/footer.php';
                