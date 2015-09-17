
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
        foreach ($params as $key => $value) {
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

        <!-- 3 Text box below the carousel _____________________________________________________________________________
        ----------------------------------------------------------------------------------------------------------------->
        <div class="container marketing menuMargin">
            <div class="row">
                <div>
                    <!-- Event images __________________________________________________________________________________
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

                        <!-- Left image 4 ______________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_HoS.jpg" width="400" class="img-responsive" style="margin: auto;" id="pop_image4"/>
                        </div>

                        <!-- Middle image 5 ____________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_sc.jpg" width="400" class="img-responsive" style="margin: auto;" id="pop_image5"/>
                        </div>

                        <!-- Right image 6 _____________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_hs.png" width="400" class="img-responsive" style="margin: auto;" id="pop_image6"/>
                        </div>

                        <!-- Left image 7 ______________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_smite.jpg" width="400" class="img-responsive" style="margin: auto;" id="pop_image7"/>
                        </div>

                        <!-- Middle image 8 ____________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_HoN.jpg" width="400" class="img-responsive" style="margin: auto;" id="pop_image8"/>
                        </div>

                        <!-- Right image 9 _____________________________________________________________________________
                        ------------------------------------------------------------------------------------------------->
                        <div class="col-lg-4">
                            <img src="images/e_halo.jpg" width="400" class="img-responsive" style="margin: auto;" id="pop_image9"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("includes/form.php")?>

        <?php include("includes/footer.php")?>

        <?php include("includes/bottom.php")?>
    </body>
</html>