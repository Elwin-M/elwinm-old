<?php
include '../../../stmarys_private/db_admin_connection.php';

//Adding items
if (isset($_POST['save_event'])) {
    //getting page
    $type = $_POST['event_type'];
    $conn = OpenCon();

    //adding birthdays
    if ($type == 'birthdays') {

        $first_last_name = $_POST['add_name'];
        $month = $_POST['add_month'];
        $day = $_POST['add_day'];

        $comb_name = $first_last_name;
        $comb_date = '2000-' . $month . '-' . $day;

        $sql = "INSERT INTO birthdays (person_name, dob) 
        VALUES ('$first_last_name', '$comb_date')";
    }

    //adding weddings
    if ($type == 'weddings') {

        $wife_name = $_POST['add_wife'];
        $husband_name = $_POST['add_husband'];
        $month = $_POST['add_month'];
        $day = $_POST['add_day'];

        $comb_name = $wife_name . ' and ' . $husband_name;
        $comb_date = '2000-' . $month . '-' . $day;

        $sql = "INSERT INTO weddings (husband, wife, dob) 
        VALUES ('$husband_name', '$wife_name', '$comb_date')";
    }

    //adding mass sponsors 
    if ($type == 'holy_mass_sponsor') {

        $first_last_name = $_POST['add_name'];
        $month = $_POST['add_month'];
        $day = $_POST['add_day'];

        $comb_name = $first_last_name;
        $comb_date = '2000-' . $month . '-' . $day;

        $sql = "INSERT INTO holy_mass_sponsor (name, date) 
        VALUES ('$first_last_name', '$comb_date')";
    }

    //adding news (unnecessary)
    if ($type == 'news') {
    }

    //adding images
    if ($type == 'images') {
    }

    //after adding, returns message
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
        $_SESSION['success'] = "Success: " . $comb_name . " has been added";
    } else {
        header('location: ' . $type . '.php');
        $_SESSION['failed'] = "Error: " . $sql . " " . mysqli_error($conn);
    }

    // returning to original page
    mysqli_close($conn);
    header('location: ' . $type . '.php');
}

//deleting items
if (isset($_POST['delete_event'])) {
    //getting static items
    $type = $_POST['event_type'];
    $conn = OpenCon();
    $Id = $_POST['del_id'];
    $name = $_POST['add_name'];
    
    $sql = "DELETE FROM $type WHERE id = '$Id'";

    //after deleting, returns message
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
        $_SESSION['success'] = "Success: " . $name . " has been deleted";
    } else {
        header('location: ' . $type . '.php');
        $_SESSION['failed'] = "Error: " . $sql . " " . mysqli_error($conn);
    }

    // returning to original page
    mysqli_close($conn);
    header('location: ' . $type . '.php');
}

//editting items
if (isset($_POST['edit_event'])) {
    //getting page
    $type = $_POST['event_type'];
    $conn = OpenCon();
    $Id = $_POST['del_id'];

    //editting birthdays
    if ($type == 'birthdays') {

        $first_last_name = $_POST['hidden_name'];
        $month = $_POST['hidden_month'];
        $day = $_POST['hidden_day'];
        
        $comb_name = $first_last_name;

        $comb_date = '2000-' . $month . '-' . $day;
        $sql = "UPDATE birthdays SET person_name = '$first_last_name', dob = '$comb_date' WHERE id = '$Id'";
    }

    //editting weddings
    if ($type == 'weddings') {

        $wife_name = $_POST['hidden_wife'];
        $husband_name = $_POST['hidden_husband'];
        $month = $_POST['hidden_month'];
        $day = $_POST['hidden_day'];

        $comb_name = $wife_name . ' and ' . $husband_name;
        $comb_date = '2000-' . $month . '-' . $day;

        $sql = "UPDATE weddings SET wife = '$wife_name', husband ='$husband_name', dob = '$comb_date' WHERE id = '$Id'";
    }

    //editting mass sponsors
    if ($type == 'holy_mass_sponsor') {

        $first_last_name = $_POST['hidden_name'];
        $month = $_POST['hidden_month'];
        $day = $_POST['hidden_day'];

        $comb_name = $first_last_name;
        $comb_date = '2000-' . $month . '-' . $day;

        $sql = "UPDATE holy_mass_sponsor SET name = '$first_last_name', date = '$comb_date' WHERE id = '$Id'";
    }

    //editing news
    if ($type == 'news') {

        //ENCODED
        $first_last_name = urlencode($_POST['hidden_name']);

        $comb_name = $first_last_name;

        $sql = "UPDATE news SET news_item = '$first_last_name' WHERE news_id = '$Id'";

    }

    //editting images
    if ($type == 'images') {
    }

    //returning images
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
        //decoded for the sake of other characters
        if ($type == 'news') {
            $_SESSION['success'] = "Success: " . urldecode($comb_name) . " is the new news message";
        }
        else {
            $_SESSION['success'] = "Success: " . $comb_name . " has been updated";
        }
    } else {
        header('location: ' . $type . '.php');
        $_SESSION['failed'] = "Error: " . $sql . " " . mysqli_error($conn);
    }

    // returning to original page
    mysqli_close($conn);
    header('location: ' . $type . '.php');
}