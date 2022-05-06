<?php
include 'db_admin_connection.php';
//BIRTHDAYS
function get_birthdays(){
    $conn = OpenCon();

    $sql = "SELECT id, person_name, DATE_FORMAT(dob, '%m') as dobM, DATE_FORMAT(dob, '%d') as dobD FROM birthdays
    ORDER BY person_name";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $birthdays[$row["id"]] = array($row["person_name"], $row["dobM"], $row["dobD"], $row["id"]);
        }
    }

    CloseCon($conn);
    return $birthdays;
}

//WEDDINGS
function get_weddings(){
    $conn = OpenCon();

    $sql = "SELECT id, husband, wife, DATE_FORMAT(dob, '%m') as dobM, DATE_FORMAT(dob, '%d') as dobD FROM weddings
    ORDER BY wife";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $weddings[$row["id"]] = array($row["wife"], $row["husband"], $row["dobM"], $row["dobD"], $row["id"]);
        }
    }

    CloseCon($conn);
    return $weddings;
}

//MASS
function get_holy_mass(){
    $conn = OpenCon();

    $sql = "SELECT name, id, DATE_FORMAT(date, '%m') as dobM, DATE_FORMAT(date, '%d') as dobD FROM holy_mass_sponsor
    ORDER BY dobM, dobD, name";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $holy_mass[$row["id"]] = array($row["name"], $row["dobM"], $row["dobD"], $row["id"]);
        }
    }

    CloseCon($conn);
    return $holy_mass;
}

//NEWS
function get_news(){
    $conn = OpenCon();

    $sql = "SELECT news_item, news_id FROM news";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //DECODED for quotes and other characters
            $news[$row["news_id"]] = array(urldecode($row["news_item"]), $row["news_id"]);
        }
    }

    CloseCon($conn);
    return $news;
}

//IMAGES
function get_image_gal(){
    $conn = OpenCon();
    
    $sql = "SELECT picture, status, id FROM imagegal";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $image_gal[$row["id"]] = array($row["picture"], $row["status"], $row["id"]);
        }
    }

    CloseCon($conn);
    return $image_gal;
}


//CURRENT WEEK
function get_week(){
    $conn = OpenCon();
    
    $sql1 = "SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1-DAYOFWEEK(CURRENT_DATE) DAY) AS FDOTW";
    $sql2 = "SELECT DATE_ADD((SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1-DAYOFWEEK(CURRENT_DATE) DAY)), INTERVAL 6 DAY) AS LDOTW";

    $result1 = $conn->query($sql1);
    while ($row = $result1->fetch_assoc()) {
        $FDOTW = $row["FDOTW"];
    }

    $result2 = $conn->query($sql2);
    while ($row = $result2->fetch_assoc()) {
        $date[$FDOTW] = $row["LDOTW"];
    }

    CloseCon($conn);
    return $date;
}
?>