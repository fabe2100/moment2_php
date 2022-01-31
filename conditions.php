<?php
include("includes/header.php");
?>
<?php include("includes/mainmenu.php.php"); ?>
<div class="variables-body">
    <h2>Villkor</h2>
    <h3>Del 1</h3>
    <fieldset>
        <!--read date and time from a variable-->
        <?php $datum = "Datum/klockaslag";
        echo " $datum : " . date("Y-m-d") . " : " . date("H.i");  ?>

    </fieldset>

    <h3>Del 2</h3>
    <fieldset>
        <!--create if sats to check if the day is a sunday or not-->
        <?php $d = date("D");
        if ($d == "Sunday") {
            echo "Idag är det söndag";
        } else {
            echo "Idag är det inte söndag";
        } ?>
    </fieldset>


    <h3>Del 3</h3>
    <fieldset>
        <!--check time with if elseif else -->
        <?php $tid = date("H");
        if ($tid  < "09:00") {
            echo " Det är morgon ";
        } else if ($tid > "09:00" && $tid < "12:00") {
            echo " Det är förmiddag ";
        } else if ($tid > "12:00" && $tid < "18:00") {
            echo " Det är eftermiddag";
        } else {
            echo " Det är natt";
        }


        ?>


    </fieldset>


    <h3>Del 4</h3>
    <fieldset>
        <!--create a switch to see which day it is-->
        <?php $dag = date("D");


        switch ($dag) {
            case "måndag":
                echo "Idag är det måndag";
                break;
            case "tisdag":
                echo "Idag är det tisdag";
                break;
            case "onsdag":
                echo "Idag är det onsdag";
                break;
            case "torsdag":
                echo "Idag är det torsdag";
                break;
            case "fredag":
                echo "Idag är det fredag";
                break;
            case "lördag":
                echo "Idag är det lördag";
                break;
            case "söndag":
                echo "Idag är det söndag";
                break;

            default:
                //create array for all week days
                $dagar = array("Mon" => "Måndag", "Tue" => "Tisdag", "Wed" => "Onsdag", "Thu" => "Torsdag", "Fri" => "Fredag", "Sat" => "Lördag", "Sun" => "Söndag");
                //read the day of the week
                echo "Idag är det " .  $dagar[date("D", strtotime('now'))];
        }

        ?>

    </fieldset>
</div>


<?php
include("includes/footer.php"); ?>