<?php
include("includes/header.php");
?>
<?php include("includes/mainmenu.php.php"); ?>
<div class="variables-body">
    <h2>Beräkna area</h2>
    <fieldset>
        <?php
        //calculate sum of area
        function areacalc()
        {
            $width = $_POST['width'];
            $length = $_POST['length'];

            $area = $length * $width;
            //keep width and lenght into variables for POST
            if (isset($_POST['submit'])) {
                $width = $_POST['width'];
                $length = $_POST['length'];
                $area = $width * $length;
                //start session to keep variables stored  
                session_start();

                $_SERVER['width'] = $width;
                $_SERVER['length'] = $length;
                header("Location: calculate.php");
                //echo to calculate sum of area
            }
            echo " Längden " . $length . " meter och bredden " . $width . " meter ger en area på " . $area . " kvadratmeter ";
        }
        areacalc();
        ?>


    </fieldset>
    <a href="form.php">Gå tillbaks till föregående sida.</a>
</div>
<?php
include("includes/footer.php"); ?>