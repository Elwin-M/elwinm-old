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
	<title>News</title>
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

    <tr>
      <!--When a header is clicked, run the sortTable function-->
      <th style="width:5%">#</th>
	  <th style="width:75%">News Message</th>
	  <th style="width:10%"></th>
	  <th style="width:10%"></th>
    </tr>

    <!-- <form method="post" action="functions.php"> -->
    <?php $news = get_news();
    $Type = 4;
    $n = 1;

    foreach ($news as $Nid => $Narray) {

      echo "<tr class='item'>";
      echo "<form method='post' action='functions.php'>";

      echo "<td>" . $n . "</td>";
      // Base info
      echo "<td id='base_name$Narray[1]' style='display:visible'>" . $Narray[0] . "</td>";

      // Initially hidden - edit fields
      echo "<td id='hidden_name$Narray[1]' style='display:none'><input type='text' name='hidden_name' value='$Narray[0]'> </td>";

      // Hidden fields to carry over for submission
      echo "<td style='display:none'><input type='hidden' name='del_id' value='$Narray[1]'> </td>";
      echo "<td style='display:none'><input type='hidden' name='add_name' value='$Narray[0]'> </td>";
      echo "<td style='display:none'><input type='hidden' name='event_type' value='news'> </td>";

      // Cancel button
      echo "<td id='cancel_button$Narray[1]' class='btnFixed' style='display:none;width:10%'> <input class='btn' type='button' onclick='cancel_b($Narray[1], $Type)' value='Cancel'> </td>";

      // Base edit and delete buttons - before confirm
      echo "<td id='edit_button$Narray[1]' class='btnFixed' colspan='2' style='width:10%'> <input class='btn' type='button' onclick='edit_b($Narray[1], $Type)' value='Edit'> </td>";

      // Confirm edit and delete
      echo "<td id='edit_confirm$Narray[1]' class='btnFixed' style='display:none;width:10%'> <input class='btn' type='submit' name='edit_event' value='Confirm Edit'> </td>";

      echo "</tr>";
      $n = $n + 1;
      echo "</form>";
    } ?>

  </table>

  </div>

</body>
</html>