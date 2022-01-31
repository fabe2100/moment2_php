<?php
include("includes/header.php");
?>
<?php include("includes/mainmenu.php.php"); ?>

<div class="variables-body">
  <h2>Formulär</h2>
  <h3>Del 1 - Skicka data med GET
  </h3>
  <fieldset>
    <?php
    //form with Get method to fill in firstname and lastname
    if (isset($_GET["firstname"], $_GET["lastname"])) {
      $firstname = $_GET["firstname"];
      $lastname = $_GET["lastname"];
    
  
    if (empty($firstname) && empty($lastname)) {
      echo "Både förnamn och efternamn måste fyllas i";
    } else {

      echo "Hej " .  $firstname . "&nbsp" . $lastname . " ! ";
    }}
   
    ?>

    <form action="form.php" method="GET">
      <label for="firstname">Förnamn:</label>
      <input type="text" id="firstname" name="firstname"><br><br>
      <label for="lastname">Efternamn:</label>
      <input type="text" id="lastname" name="lastname"><br><br>
      <input type="submit" value="Skicka">
    </form>


  </fieldset>


  <h3>Del 2 - Skicka data med POST
  </h3>
  <fieldset>
    <p>Beräkna arean på en yta genom att ange längd och bredd.
      <!--Form to calculate sum of area-->
    </p>
    <form action="calculate.php" method="POST">
      <label for="length">Längd:</label>
      <input type="number" id="length" name="length"><br><br>
      <label for="width">Bredd:</label>
      <input type="number" id="width" name="width"><br><br>
      <input type="submit" value="Beräkna">
    </form>


  </fieldset>

</div>
<?php
include("includes/footer.php"); ?>