<?php
include("includes/header.php");
?>
<?php include("includes/mainmenu.php.php"); ?>
<div class="variables-body">
    <h2>Upprepningar</h2>
    <h3>Del 1</h3>
    <fieldset>
        <?php
        //created a loop to write from number 10 decreasing with -- until number 1
        for ($i = 10; $i >= 1; $i--) {

            echo "$i <br>";
        }
        ?>

    </fieldset>

    <h3>Del 2</h3>
    <fieldset>
        <div class="kurslistan">
            <h4>Kurslistan i den ordning kurserna ges:</h4>

            <ol>
                <?php $arr = array("Webbutveckling I", "Introduktion till programmering i JavaScript", "Digital bildbehandling för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III");
                // creating an array to display on screen unsorted
                foreach ($arr as $value) {
                    echo  "<li>" . "$value <br>" . "</li>";
                }
                ?>
            </ol>
        </div>
    </fieldset>


    <h3>Del 3</h3>
    <fieldset>
        <div class="kurslistan">
            <h4>Kurslistan i bokstavsordning:</h4>
            <ol>
                <?php $lista = array("Webbutveckling I", "Introduktion till programmering i JavaScript", "Digital bildbehandling för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III");
                // created an array to write courses in an ordered list
                sort($lista);

                $length = count($lista);
                for ($x = 0; $x < $length; $x++) {
                    echo "<li> $lista[$x] </li>";
                }
                ?>
            </ol>

        </div>
    </fieldset>

</div>

<?php
include("includes/footer.php"); ?>