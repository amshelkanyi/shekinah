<?php
include 'include/header.php';
?>

<!--top- heading-->
<div class="top-heading">
    <!--start-wrap-->
    <div class="wrap">
        <h1>contact us</h1>
    </div>
    <!--end wrap-->
</div>
<!--start contact-->
<div class="wrap">
    <div class="content">

        <!-- blog-grids-->
        <div class="main-grid">
            <!-- blog-left-->
            <div class="contact-left">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.8383535370626!2d36.68338589084305!3d-1.4276636207181335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f01398fecab8d%3A0xf1d3c34aee8c8c0a!2sShekinah+Pentecostal+Church!5e1!3m2!1sen!2s!4v1461665582342" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="contact">
                    <div class="company_address">
                        <p>Its always a great pleasure to hear from you, feel free to contact us or post your comments below.God bless You. </p>
                        <h3>Shekinah Pentecostal Church</h3>
                        <p>P.O BOX 444-00206</p>
                        <p>Kiserian, Kenya</p>
                        <p>Telephone :(+254) 20 2180380</p>
                        <p>Fax : +254 717 111222</p>
                        <p>Email : <a href="mailto:info@shekinah-kenya.org"> info@shekinah-kenya.org</a></p>
                    </div>
                    <div class="contact-form">
                        <form method="post" action="contact-post.html">
                            <div>
                                <span><input name="userName" type="text" class="textbox right" value="first Name" onfocus="if (this.value == 'first Name')
                                                                    this.value = '';" onblur="if (this.value == '')
                                                                                this.value = 'first Name';"></span>
                            </div>
                            <div>
                                <span><input name="userName" type="text" class="active textbox" value="last Name" onfocus="if (this.value == 'last Name')
                                                                    this.value = '';" onblur="if (this.value == '')
                                                                                this.value = 'last Name';"></span>
                            </div>
                            <div class="clear"></div>
                            <div>
                                <span><input name="userName" type="text" class="textbox right" value="Email Address" onfocus="if (this.value == 'Email Address')
                                                                    this.value = '';" onblur="if (this.value == '')
                                                                                this.value = 'Email Address';"></span>
                            </div>

                            <div class="clear"></div>
                            <div>
                                <span><textarea rows="2" cols="70" onfocus="if (this.value == 'Your Message')
                                                                    this.value = '';" onblur="if (this.value == '')
                                                                                this.value = 'Your Message';">Your Message</textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" class="" value="Submit"></span>
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
<?php
include 'include/sidebar.php';
include 'include/footer.php';