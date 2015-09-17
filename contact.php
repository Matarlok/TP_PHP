
<?php
    include("lib/config.php");
    include("lib/db.connect.php");
    include("includes/top.php");

    if(isset($_POST["submitbt"])) {

        $params = array();
        $conn = new DBConnect();
        $error = array();

        /*-- Clean all input information for DB ________________________________________________________________________
        -----------------------------------------------------------------------------------------------------------------*/
        foreach ($_POST as $key => $value){
            $params[$key] = htmlspecialchars(stripslashes(trim($value)));
        }

        /*-- Check if optin is toggled or not __________________________________________________________________________
        -----------------------------------------------------------------------------------------------------------------*/
        if(!isset($params["optin"])){
            $params["optin"] = 0;
        }

        /*-- Check all fields except "submitbt" and "optin" to see if empty ____________________________________________
        -----------------------------------------------------------------------------------------------------------------*/
        foreach ($params as $key => $value){
            if($key != "submitbt" && $key != "optin" && $value == ""){
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

        <?php include("includes/form.php")?>

        <?php include("includes/footer.php")?>

        <?php include("includes/bottom.php")?>
    </body>
</html>
