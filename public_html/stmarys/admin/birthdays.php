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

<!DOCTYPE html>
<html>

<head>
  <title>Birthdays</title>
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
        <th style="cursor:default">Add New Birthday</th>
        <tr>
          <th style="cursor:default">First And Last Name:</th>
          <th style="cursor:default;width:15%">Month (1-12):</th>
          <th style="cursor:default;width:15%">Day:</th>
          <th style="cursor:default" colspan="2" style="width:20%"></th>
        </tr>

        <tr>
          <td><input type="text" name="add_name"> </td>
          <td style="width:15%"><input type="text" name="add_month"></td>
          <td style="width:15%"><input type="text" name="add_day"></td>
          <td style='display:none'><input type='hidden' name='event_type' value='birthdays'> </td>
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
      <th class="sorttable_alpha inputNames" style="width:55%">Name</th>
      <th class="sorttable_numeric inputDates" style="width:10%">Month</th>
      <th class="sorttable_numeric inputDates" style="width:10%">Day</th>
      <th class="sorttable_nosort" colspan="2"  style="width:20%"></th>
    </tr>

    <!-- <form method="post" action="functions.php"> -->
    <?php $birthdays = get_birthdays();
    $Type = 1;
    $n = 1;

    foreach ($birthdays as $Bid => $Barray) {

      echo "<tr class='item'>";
      echo "<form method='post' action='functions.php'>";

      echo "<td class='inputNum'>" . $n . "</td>";
      // Base info
      echo "<td id='base_name$Barray[3]' class='inputNames' style='display:visible'>" . $Barray[0] . "</td>";
      echo "<td id='base_month$Barray[3]' class='inputDates' style='display:visible'>" . $Barray[1] . "</td>";
      echo "<td id='base_day$Barray[3]' class='inputDates' style='display:visible'>" . $Barray[2] . "</td>";
      // Initially hidden - edit fields
      echo "<td id='hidden_name$Barray[3]' class='inputNames' style='display:none'><input type='text' name='hidden_name' value='$Barray[0]'> </td>";
      echo "<td id='hidden_month$Barray[3]' class='inputDates' style='display:none'><input type='text' name='hidden_month' value='$Barray[1]'> </td>";
      echo "<td id='hidden_day$Barray[3]' class='inputDates' style='display:none'><input type='text' name='hidden_day' value='$Barray[2]'> </td>";

      // Hidden fields to carry over for submission
      echo "<td style='display:none'><input type='hidden' name='del_id' value='$Barray[3]'> </td>";
      echo "<td style='display:none'><input type='hidden' name='add_name' value='$Barray[0]'> </td>";
      echo "<td style='display:none'><input type='hidden' name='event_type' value='birthdays'> </td>";

      // Cancel button
      echo "<td id='cancel_button$Barray[3]' class='btnFixed' style='display:none'> <input class='btn' type='button' onclick='cancel_b($Barray[3], $Type)' value='Cancel'> </td>";

      // Base edit and delete buttons - before confirm
      echo "<td id='edit_button$Barray[3]' class='btnFixed'> <input class='btn' type='button' onclick='edit_b($Barray[3], $Type)' value='Edit'> </td>";
      echo "<td id='delete_button$Barray[3]' class='btnFixed'> <input class='btn' type='button' onclick='delete_b($Barray[3], $Type)' value='Delete'> </td>";

      // Confirm edit and delete
      echo "<td id='delete_confirm$Barray[3]' class='btnFixed' style='display:none'> <input class='btn' type='submit' name='delete_event' value='Confirm'> </td>";
      echo "<td id='edit_confirm$Barray[3]' class='btnFixed' style='display:none'> <input class='btn' type='submit' name='edit_event' value='Confirm'> </td>";

      echo "</tr>";
      $n = $n + 1;
      echo "</form>";
    } ?>

  </table>

  </div>

</body>

</html>