<?php
include 'db_connection.php';
//BIRTHDAYS
function get_birthdays(){
    $conn = OpenCon();

    $sql = "SELECT id, person_name, DATE_FORMAT(dob, '%m %d') as dobF FROM birthdays 
    WHERE DATE_FORMAT(dob, '%m %d') BETWEEN 
    DATE_FORMAT((SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1-DAYOFWEEK(CURRENT_DATE) DAY)), '%m %d') 
    AND DATE_FORMAT((SELECT DATE_ADD((SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1-DAYOFWEEK(CURRENT_DATE) DAY)), INTERVAL 6 DAY)), '%m %d') 
    ORDER BY person_name";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $birthdays[$row["id"]] = array($row["person_name"]);
        }
    }

    CloseCon($conn);
    return $birthdays;
}

//WEDDINGS
function get_weddings(){
    $conn = OpenCon();

    $sql = "SELECT id, husband, wife, DATE_FORMAT(dob, '%m %d') as dobF FROM weddings
    WHERE DATE_FORMAT(dob, '%m %d') BETWEEN 
    DATE_FORMAT((SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1-DAYOFWEEK(CURRENT_DATE) DAY)), '%m %d') 
    AND DATE_FORMAT((SELECT DATE_ADD((SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1-DAYOFWEEK(CURRENT_DATE) DAY)), INTERVAL 6 DAY)), '%m %d')
    ORDER BY wife";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $weddings[$row["id"]] = array($row["wife"], $row["husband"],$row["dobF"]);
        }
    }

    CloseCon($conn);
    return $weddings;
}

//HOLY MASS SPONSORS
function get_holy_mass(){
    $conn = OpenCon();

    $sql = "SELECT name, id, DATE_FORMAT(date, '%m %d') as dobF FROM holy_mass_sponsor
    WHERE DATE_FORMAT(date, '%m %d') BETWEEN 
    DATE_FORMAT((SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1-DAYOFWEEK(CURRENT_DATE) DAY)), '%m %d') 
    AND DATE_FORMAT((SELECT DATE_ADD((SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1-DAYOFWEEK(CURRENT_DATE) DAY)), INTERVAL 6 DAY)), '%m %d')
    ORDER BY name";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $holy_mass[$row["id"]] = array($row["name"]);
        }
    }

    CloseCon($conn);
    return $holy_mass;
}

//IMAGE GALLERY
function get_image_gal(){
    $conn = OpenCon();
    
    $sql = "SELECT picture, id FROM imagegal WHERE status = 1";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $image_gal[$row["id"]] = array($row["picture"]);
        }
    }

    CloseCon($conn);
    return $image_gal;
}

//NEWS
function get_news(){
    $conn = OpenCon();

    $sql = "SELECT news_item, news_id FROM news";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //DECODED BECAUSE OF ADMIN PAGE
            $news[$row["news_id"]] = array(urldecode($row["news_item"]));
        }
    }

    CloseCon($conn);
    return $news;
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