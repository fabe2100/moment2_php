<?php
include("includes/header.php");
?>
<?php include("includes/mainmenu.php.php"); ?>

<div class="variables-body">
    <h2>Inläsning av extern textfil</h2>
    <fieldset>
        <div class="kurslistan">
            <ol>
                <?php
                //read from an extern file with an error message
                $filen = 'courses.txt';

                if (file_exists($filen)) {
                    $message = "";
                } else {
                    $message = "Filen kunde inte hittas";
                }
                echo $message;

                $list = fopen("courses.txt", "r");
                // Output one line until end-of-file
                while (!feof($list)) {
                    echo "<li>" . fgets($list)  . "<br>" . "</li>";
                }
                fclose($list);
                ?>
            </ol>

        </div>
    </fieldset>
</div>

<?php
include("includes/footer.php"); ?>