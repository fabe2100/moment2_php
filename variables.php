<?php
include("includes/header.php");
?>
<div class="variables-body">
    <h2>Variabler</h2>
    <h3>Utskrift</h3>
    <fieldset>
        <!--create variables for name, age and mail-->
        <?php $name = "Fauzia Bensliman,";
        $mail = "fabe2100@student.miun.se";
        $age = "35";

        echo "Hej! Jag heter " . $name . " är " . $age . " år gammal och nås på följande e-post :  <a href= 'mailto:$mail'>$mail</a> "; ?>

    </fieldset>
</div>
<br>
<?php
include("includes/footer.php"); ?>