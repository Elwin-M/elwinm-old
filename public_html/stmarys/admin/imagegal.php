<!-- 
https://www.cluemediator.com/drag-and-drop-multiple-file-upload-using-jquery-ajax-and-php
https://artisansweb.net/drag-and-drop-multiple-file-upload-using-javascript-and-php/
https://artisansweb.net/drag-drop-file-upload-using-javascript-php/
 -->
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
	<title>Images</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="scripts/sorttable.js"></script>
  <script src="scripts/basescripts.js"></script>
  <!-- <script src="scripts/uploadImages.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script>
  $(document).ready(function () {
    $("html").on("dragover", function (e) {
      e.preventDefault();
      e.stopPropagation();
    });
 
    $("html").on("drop", function (e) {
      e.preventDefault();
      e.stopPropagation();
    });
 
    $('#drop_file_area').on('dragover', function () {
      $(this).addClass('drag_over');
      return false;
    });
 
    $('#drop_file_area').on('dragleave', function () {
      $(this).removeClass('drag_over');
      return false;
    });
 
    $('#drop_file_area').on('drop', function (e) {
      e.preventDefault();
      $(this).removeClass('drag_over');
      var formData = new FormData();
      var files = e.originalEvent.dataTransfer.files;
      for (var i = 0; i < files.length; i++) {
        formData.append('file[]', files[i]);
      }
      uploadFormData(formData);
    });
 
    function uploadFormData(form_data) {
      $.ajax({
        url: "uploadImages.php",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          $('#uploaded_file').append(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert("error occured");
          $('#uploaded_file').append(data);
        }
      });
    }
  });
</script> -->
<script>
  $(document).ready(function () {
    console.log("Document is ready.");

    $("html").on("dragover", function (e) {
      e.preventDefault();
      e.stopPropagation();
      console.log("Dragover event occurred.");
    });

    $("html").on("drop", function (e) {
      e.preventDefault();
      e.stopPropagation();
      console.log("Drop event occurred.");
    });

    $('#drop_file_area').on('dragover', function () {
      console.log("Dragover on drop area.");
      $(this).addClass('drag_over');
      return false;
    });

    $('#drop_file_area').on('dragleave', function () {
      console.log("Dragleave on drop area.");
      $(this).removeClass('drag_over');
      return false;
    });

    $('#drop_file_area').on('drop', function (e) {
      e.preventDefault();
      $(this).removeClass('drag_over');
      console.log("Files dropped on drop area.");
      var formData = new FormData();
      var files = e.originalEvent.dataTransfer.files;
      for (var i = 0; i < files.length; i++) {
        formData.append('file[]', files[i]);
      }
      uploadFormData(formData);
    });

    function uploadFormData(form_data) {
      console.log("Uploading form data...");
      $.ajax({
        url: "uploadImages.php",
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          console.log("Upload success:", data);
          $('#uploaded_file').append(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log("Upload error:", textStatus, errorThrown);
          $('#uploaded_file').append("An error occurred during upload.");
        }
      });
    }

    console.log("Script setup completed.");
  });
</script>
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
    
    <!-- <table>
      <form method="post" action="functions.php">
        <th style="cursor:default">Add Image</th>
        <tr>
          <th style="cursor:default">Image Name:</th>
          <th style="cursor:default;width:10%">Enabled?</th>
          <th style="cursor:default" colspan="2" style="width:20%"></th>
        </tr>

        <tr>
          <td><input type="text" name="add_name"> </td>
          <td style="width:10%"><input type="text" name="add_status"></td>
          <td style='display:none'><input type='hidden' name='event_type' value='imagegal'> </td> -->


          <!-- <td colspan="2" style="width:20%"><input class="btn" type="submit" name="save_event" value="Click To Add"></td> -->

          
        <!-- </tr>
  </div>
  </form>
  </table> -->

  <!-- <link rel="stylesheet" href="styleDrop.css" />
<div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
    <div id="drag_upload_file">
        <p>Drop file(s) here</p>
        <p>or</p>
        <p><input type="button" value="Select File(s)" onclick="file_explorer();" /></p>
        <input type="file" id="selectfile" multiple/>
    </div>
</div>
<div class="img-content"></div> -->

<div class="container">
    <h3>Large files take time to upload. Refresh the page to see if the images were uploaded successfully</h3><br />
    <div id="drop_file_area" class="drop_file_area">
      Drag and Drop File(s) Here. Max file size is <b>15 MB</b>
    </div>
    <div id="uploaded_file" class="uploaded_file"></div>
  </div>



<br>
  <table class="sortable">

    <tr>
      <!--When a header is clicked, run the sortTable function-->
    <th style="width:5%">#</th>
	  <th style="width:15%">Image Name:</th>
	  <th style="width:50%">Image:</th>
	  <!-- <th style="width:50%" class="sorttable_nosort">Image:</th> -->
	  <th style="width:10%">Enabled?</th>
	  <th style="width:10%"></th>
	  <th style="width:10%"></th>
    </tr>

    <!-- <form method="post" action="functions.php"> -->
    <?php $images = get_image_gal();
    $Type = 5;
    $n = 1;

    foreach ($images as $Iid => $Iarray) {

		
      echo "<tr class='item'>";
      echo "<form method='post' action='functions.php'>";

      echo "<td>" . $n . "</td>";
      // Base info
      echo "<td id='base_name$Iarray[2]' class='inputNames' style='display:visible'>" . $Iarray[0] . "</td>";
      echo "<td id='base_image$Iarray[2]' class='inputNames' style='display:visible;text-align:center;'> <img src='../images/$Iarray[0]' alt='$Iarray[0]' style='width:50%'> </td>";
      echo "<td id='base_stat$Iarray[2]' class='inputDates' style='display:visible'>" . $Iarray[1] . "</td>";
      // Initially hidden - edit fields
	  echo "<td id='hidden_name$Iarray[2]' class='inputNames' style='display:none'><input type='text' name='hidden_name' value='$Iarray[0]'></td>";
	  echo "<td id='hidden_image$Iarray[2]' class='inputNames' style='display:none;text-align:center;'> <img src='../images/$Iarray[0]' alt='$Iarray[0]' style='width:50%'> </td>";
      echo "<td id='hidden_stat$Iarray[2]' class='inputDates' style='display:none'><input type='text' name='hidden_stat' value='$Iarray[1]'></td>";

      // Hidden fields to carry over for submission
      echo "<td style='display:none'><input type='hidden' name='del_id' value='$Iarray[2]'></td>";
      echo "<td style='display:none'><input type='hidden' name='add_name' value='$Iarray[0]'></td>";
      echo "<td style='display:none'><input type='hidden' name='event_type' value='imagegal'></td>";

      // Cancel button
      echo "<td id='cancel_button$Iarray[2]' class='btnFixed' style='display:none'><input class='btn' type='button' onclick='cancel_b($Iarray[2], $Type)' value='Cancel'></td>";

	  // Base edit and delete buttons - before confirm
     echo "<td id='edit_button$Iarray[2]' class='btnFixed'><input class='btn' type='button' onclick='edit_b($Iarray[2], $Type)' value='Edit'></td>";
     echo "<td id='delete_button$Iarray[2]' class='btnFixed'><input class='btn' type='button' onclick='delete_b($Iarray[2], $Type)' value='Delete'></td>";

      // Confirm edit and delete
      echo "<td id='delete_confirm$Iarray[2]' class='btnFixed' style='display:none'><input class='btn' type='submit' name='delete_event' value='Confirm'></td>";
      echo "<td id='edit_confirm$Iarray[2]' class='btnFixed' style='display:none'><input class='btn' type='submit' name='edit_event' value='Confirm'></td>";

      echo "</tr>";
      $n = $n + 1;
      echo "</form>";
    } ?>

  </table>

  </div>

</body>
</html>