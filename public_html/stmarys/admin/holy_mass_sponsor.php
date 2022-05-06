<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>

<?php include '../../../stmarys_private/functions_admin.php'; ?>


<html>

<head>
  <title>Mass</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="scripts/sorttable.js"></script>
  <script src="scripts/basescripts.js"></script>
</head>

<body>
  <?php include('header.php') ?>

  <div class="content-main">

    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success">
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <?php if (isset($_SESSION['failed'])) : ?>
      <div class="error">
        <h3>
          <?php
          echo $_SESSION['failed'];
          unset($_SESSION['failed']);
          ?>
        </h3>
      </div>
    <?php endif ?>







    <table>
      <form method="post" action="functions.php">
        <th style="cursor:default">Add New Mass Sponsor</th>
        <tr>
          <th style="cursor:default">Sponsor Name(s):</th>
          <th style="cursor:default;width:15%">Month (1-12):</th>
          <th style="cursor:default;width:15%">Day:</th>
          <th style="cursor:default" colspan="2" style="width:20%"></th>
        </tr>

        <tr>
          <td><input type="text" name="add_name"> </td>
          <td style="width:15%"><input type="text" name="add_month"></td>
          <td style="width:15%"><input type="text" name="add_day"></td>
          <td style='display:none'><input type='hidden' name='event_type' value='holy_mass_sponsor'> </td>
          <td colspan="2" style="width:20%"><input class="btn" type="submit" name="save_event" value="Click To Add"></td>
        </tr>
  </div>
  </form>
  </table>
  <br><br>

  <table class="sortable">

    <tr>
      <!--When a header is clicked, run the sortTable function-->
      <th class="sorttable_numeric inputNum" style="width:5%">#</th>
      <th class="sorttable_alpha inputNames" style="width:55%">Name(s)</th>
      <th class="sorttable_numeric inputDates" style="width:10%">Month</th>
      <th class="sorttable_numeric inputDates" style="width:10%">Day</th>
      <th class="sorttable_nosort" colspan="2" style="width:20%"></th>
    </tr>

    <!-- <form method="post" action="functions.php"> -->
    <?php $mass = get_holy_mass();
    $Type = 3;
    $n = 1;

    foreach ($mass as $Mid => $Marray) {

      echo "<tr class='item'>";
      echo "<form method='post' action='functions.php'>";

      echo "<td class='inputNum inputNum'>" . $n . "</td>";
      // Base info
      echo "<td id='base_name$Marray[3]' class='inputNames' style='display:visible'>" . $Marray[0] . "</td>";
      echo "<td id='base_month$Marray[3]' class='inputDates' style='display:visible'>" . $Marray[1] . "</td>";
      echo "<td id='base_day$Marray[3]' class='inputDates' style='display:visible'>" . $Marray[2] . "</td>";
      // Initially hidden - edit fields
      echo "<td id='hidden_name$Marray[3]' class='inputNames' style='display:none'><input type='text' name='hidden_name' value='$Marray[0]'> </td>";
      echo "<td id='hidden_month$Marray[3]' class='inputDates' style='display:none'><input type='text' name='hidden_month' value='$Marray[1]'> </td>";
      echo "<td id='hidden_day$Marray[3]' class='inputDates' style='display:none'><input type='text' name='hidden_day' value='$Marray[2]'> </td>";

      // Hidden fields to carry over for submission
      echo "<td style='display:none'><input type='hidden' name='del_id' value='$Marray[3]'> </td>";
      echo "<td style='display:none'><input type='hidden' name='add_name' value='$Marray[0]'> </td>";
      echo "<td style='display:none'><input type='hidden' name='event_type' value='holy_mass_sponsor'> </td>";

      // Cancel button
      echo "<td id='cancel_button$Marray[3]' class='btnFixed' style='display:none'> <input class='btn' type='button' onclick='cancel_b($Marray[3], $Type)' value='Cancel'> </td>";

      // Base edit and delete buttons - before confirm
      echo "<td id='edit_button$Marray[3]' class='btnFixed'> <input class='btn' type='button' onclick='edit_b($Marray[3], $Type)' value='Edit'> </td>";
      echo "<td id='delete_button$Marray[3]' class='btnFixed'> <input class='btn' type='button' onclick='delete_b($Marray[3], $Type)' value='Delete'> </td>";

      // Confirm edit and delete
      echo "<td id='delete_confirm$Marray[3]' class='btnFixed' style='display:none'> <input class='btn' type='submit' name='delete_event' value='Confirm'> </td>";
      echo "<td id='edit_confirm$Marray[3]' class='btnFixed' style='display:none'> <input class='btn' type='submit' name='edit_event' value='Confirm'> </td>";

      echo "</tr>";
      $n = $n + 1;
      echo "</form>";
    } ?>

  </table>

  </div>

</body>

</html>