
   <h2 width="100%" height="100%">

<div class="header-main">
    <a href="../index.html" style="color:blue;text-align:right">HOME PAGE</a> 
    <p style="display:inline-block;"> | </p>
    <a href="birthdays.php">BIRTHDAYS</a> 
    <p style="display:inline-block;"> | </p>
    <a href="weddings.php">WEDDINGS</a>
    <p style="display:inline-block;"> | </p>
    <a href="holy_mass_sponsor.php">MASS</a>
    <p style="display:inline-block;"> | </p>
    <a href="news.php">NEWS</a>
    <p style="display:inline-block;"> | </p>
    <a href="imagegal.php" >IMAGES</a>
    <p style="display:inline-block;"> | </p>
    <a href="index.php?logout='1'" style="color:blue;text-align:right">LOGOUT</a> 

    <br>
    <br>
    <!-- <div class="header-main"> -->
  <?php $week = get_week();
echo "<span style='font-weight:normal;'>";
foreach ($week as $Wid => $Warray) {
  echo "Today is: <b>" . date("Y-m-d") . "</b> <br>";
  echo "The week spans from: <b>" . $Wid . "</b> to: <b>" . $Warray . "</b> <br>";
  echo "Entries will only be displayed for the corresponding <b>week!</b>";
}
echo "</span>";
?>

    </h2>
    
<!-- </div> -->
