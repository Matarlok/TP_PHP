<?php
    include("lib/config.php");
    include("lib/db.connect.php");
    include("includes/top.php");

    if (isset($_POST["submitbt"])) {

        $params = array();
        $conn = new DBConnect();
        $error = array();

        /*-- Clean all input information for DB ________________________________________________________________________
        -----------------------------------------------------------------------------------------------------------------*/
        foreach ($_POST as $key => $value) {
            $params[$key] = htmlspecialchars(stripslashes(trim($value)));
        }

        /*-- Check if optin is toggled or not __________________________________________________________________________
        -----------------------------------------------------------------------------------------------------------------*/
        if (!isset($params["optin"])) {
            $params["optin"] = 0;
        }

        /*-- Check all fields except "submitbt" and "optin" to see if empty ____________________________________________
        -----------------------------------------------------------------------------------------------------------------*/
        foreach ($params as $key => $value){
            if($key != "submitbt" && $key != "optin" && $value == "") {
                $error[$key] = 1;
            }
        }

        $result = $conn -> insertUser($params);

        echo "<pre>";
        var_dump($error);
        exit;

    }
?>
    <body>
        <?php include("includes/menu.php")?>

        <!-- CAROUSEL __________________________________________________________________________________________________
        ----------------------------------------------------------------------------------------------------------------->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- 3 little carousel bottom dots (image selector) ________________________________________________________
            ------------------------------------------------------------------------------------------------------------->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner img-responsive" role="listbox">

                <!-- First image in carousel ___________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="item active">
                    <img src="images/c_image_1.jpg" alt="firstSlide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Une ambiance extraordinaire!</h1>
                            <p>Venez vous amusez toute la nuit en notre compagnie!</p>
                        </div>
                    </div>
                </div>

                <!-- Second image in carousel __________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="item img-responsive">
                    <img src="images/c_image_2.JPG" alt="secondSlide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>L'univers du 8-bit</h1>
                            <p>Vintage gaming FTW!</p>
                        </div>
                    </div>
                </div>

                <!-- Third image in carousel ___________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="item img-responsive">
                    <img src="images/c_image_3.jpg" alt="thirdSlide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Des boissons personnalisées au style gaming!</h1>
                            <p>Venez vous peter la fraise avec style</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left arrow carousel button ____________________________________________________________________________
            ------------------------------------------------------------------------------------------------------------->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right arrow carousel button ___________________________________________________________________________
            ------------------------------------------------------------------------------------------------------------->
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- 3 Text box below the carousel _____________________________________________________________________________
        ----------------------------------------------------------------------------------------------------------------->
        <div class="container marketing">
            <div class="row">
                <div>
                    <div>

                        <!-- Left text box _____________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4 text-center">
                            <a href="event.php"><span class="glyphicon glyphicon-calendar" style="font-size:68px;"></span></a>
                            <h2>Événements</h2>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                            <p><a class="btn btn-default" href="event.php" role="button">Participez a un événement!</a></p>
                        </div>

                        <!-- Middle text box ___________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4 text-center">
                            <a href="about.php"><span class="glyphicon glyphicon-envelope" style="font-size:68px;"></span></a>
                            <h2>Contact</h2>
                            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                            <p><a class="btn btn-default" href="about.php" role="button">Contactez-nous!</a></p>
                        </div>

                        <!-- Right text box ____________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4 text-center">
                            <a href="contact.php"><span class="glyphicon glyphicon-comment" style="font-size:68px;"></span></a>
                            <h2>A propos</h2>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                            <p><a class="btn btn-default" href="contact.php" role="button">A propos de nous</a></p>
                        </div>
                    </div>

                    <!-- 3 images under carousel _______________________________________________________________________
                    ----------------------------------------------------------------------------------------------------->
                    <div>

                        <!-- Left image 1 ______________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_TI5_small.jpg" width="400" class="img-responsive" style="margin: auto;" id="pop_image1"/>
                        </div>

                        <!-- Middle image 2 ____________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_CS_small.jpg" width="400" class="img-responsive" style="margin: auto;" id="pop_image2"/>
                        </div>

                        <!-- Right image 3 _____________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_LoL_small.jpg" width="400" class="img-responsive" style="margin: auto;" id="pop_image3"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hidden image 1 (popUp window) _____________________________________________________________________________
        ----------------------------------------------------------------------------------------------------------------->
        <div class="modal fade" id="image1">
            <div class="modal-dialog">

                <!-- Window content ____________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="modal-content">

                    <!-- Window top section ____________________________________________________________________________
                    ----------------------------------------------------------------------------------------------------->
                    <div class="modal-header text-center">

                        <!-- Small X button to close window ____________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        <!-- Window title ______________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <h4 class="modal-title">The international 2015</h4>
                    </div>

                    <!-- Image 1 (big) _________________________________________________________________________________
                    ----------------------------------------------------------------------------------------------------->
                    <div class="modal-body">
                       <img src="images/e_TI5.jpg" class="img-responsive" id="popout_image1"/>
                    </div>

                    <!-- Register button _______________________________________________________________________________
                    ----------------------------------------------------------------------------------------------------->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Inscrivez-vous</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hidden image 2 (popUp window)______________________________________________________________________________
        ----------------------------------------------------------------------------------------------------------------->
        <div class="modal fade" id="image2">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">ESWC Montreal 2015</h4>
                    </div>

                    <div class="modal-body">
                        <img src="images/e_CS.jpg" class="img-responsive" id="popout_image2"/>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Inscrivez-vous</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hidden image 3 (popUp window)______________________________________________________________________________
        ----------------------------------------------------------------------------------------------------------------->
        <div class="modal fade" id="image3">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">League of legends Championship series 2015</h4>
                    </div>

                    <div class="modal-body">
                        <img src="images/e_LoL.jpg" class="img-responsive" id="popout_image3"/>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Inscrivez-vous</button>
                    </div>
                </div>
            </div>
        </div>

        <?php include("includes/form.php")?>

        <?php include("includes/footer.php")?>

        <?php include("includes/bottom.php")?>
    </body>
</html>