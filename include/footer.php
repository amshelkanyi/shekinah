<!--start footer-->
<div class="footer">
    <div class="footer-main wrap">
        <div class="footer-grids">
            <div class="fgrid">
                <h3>About Shekinah</h3>
                <p>Headed by Bishop Meliyio.<br /> Our core values are love, Holiness, faithfulness, excellence, truthfullness, integrity and Study of Gods word daily </p>
            </div>
            <div class="fgrid" id="plugin">
                <div class="fb-page" data-href="https://web.facebook.com/Shekinah-Pentecostal-Church-Kiserian-500552560031939/" data-tabs="timeline" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
            </div>
            <div class="fgrid">
                <h3> contact us </h3>
                </a>
                <p>Its always a great pleasure to hear from you feel free to contact us or post your comments below. God bless you</p>
                <a href="#">
                    <p>info@shekinah-kenya.org</p>
                </a>
                <h4>(+254) 717111222</h4>
                <div class="social-media">
                    <ul>
                        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
                        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="twitter"><a href="#" target="_blank"> </a> </span></li>
                        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="email"><a href="#" target="_blank"> </a></span></li>
                        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="rss"><a href="#" target="_blank"> </a></span></li>
                        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="vimeo"><a href="#" target="_blank"> </a></span></li>
                    </ul>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<!--end footer-->
<div class="copy-right">
    <div class="wrap">
        <div class="copy-right-left">
            <p>WEBMAIL <a href="http://shekinah-kenya.org:2095" /> Webmail </a>
            </p>
            <p>Copyright <a href="index.html">Shekinah  Pentecostal church</a></p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script>
    jQuery(function () {

        jQuery('#camera_wrap_2').camera({

            loader: 'bar',
            pagination: false,
            thumbnails: false
        });
    });
</script>
<!--end slider-->
<!--start gallery-->
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
    $(function () {

        var filterList = {

        init: function() {

        // MixItUp plugin
        // http://mixitup.io
        $('#gallerylist').mixitup({
        targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
        });
        },
                // Run the show!
                filterList.init();


    });
</script>
<!--Add fancyBox main JS and CSS files-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    });
</script>



</body>

</html>