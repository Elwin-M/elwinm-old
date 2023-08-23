<!DOCTYPE html>
<html>

<head>
    <?php include '../../stmarys_private/functions.php'; ?>
    <link rel="stylesheet" href="stmarys.css">
    <title>St Mary's</title>
    
    <script>
        //Set timers here in seconds:
        var newsTime = 10;
        var imageTime = 20;
        var contentTime = 10;
    </script>
</head>

<body>

    <div class="wrapper">

        <div class="cellMidTop">
            <!-- logos -->
            <div class="innerTopGrid">
                <div class="topLogo">
                    <img class="logo" src="images/logo.png" alt="Church Logo">
                </div>
                <!-- <div class="topCall">
                    <p>
                        <span style="float:right;">CALL US</span><br><br>
                        <span style="float:left;">Vicar:</span>
                        <span style="float:right;">905-270-8000</span><br>
                        <span style="float:left;">Secretary:</span>
                        <span style="float:right;">647-459-4454</span>
                    </p>
                </div> -->
                <!-- <div class="topMail">
                    <p>
                        <span style="float:right;">MAIL US</span><br><br>
                        <span style="float:right;">vicar@stmaryscanada.com</span><br>
                        <span style="float:right;">secretary@stmaryscanada.com</span>
                    </p>
                </div> -->
            </div>
        </div>

        <div id="cellMidLeft" class="cellMidLeft">
            <!-- images and all -->
            <div class="slideshowImageContainer">
                <!-- controller -->
                <a class="prev" id="prev">&#10096;</a>
                <a class="next" id="next">&#10097;</a>
                <a class="pause" id="pause">&#10074;&#10074;</a>
                <!-- images -->
                <?php $images = get_image_gal();
                if (sizeof($images) == 0) {
                    echo "<img src='images/stmary.jpg' id='slideshowNoImage' class='slideshowNoImage'>";
                } else {
                    foreach ($images as $Pid => $Parray) {
                        echo "<img src='images/$Parray[0]' alt='$Pid' id='slideshowImage' class='slideshowImage'>";
                    }
                } ?>
            </div>
        </div>

        <div id="cellMidRight" class="cellMidRight">
            <!-- birthdays, weddings, sponsors -->
            <div class="slideshowContentContainer">
                <!-- controller -->
                <a class="prev" id="prevC">&#10096;</a>
                <a class="next" id="nextC">&#10097;</a>
                <a class="pause" id="pauseC">&#10074;&#10074;</a>
                <!-- BIRTHDAYS -->
                <div id='slideshowContent' class="slideshowContent">
                    <?php $birthdays = get_birthdays();
                    if (sizeof($birthdays) == 0) {
                        echo "<script>var birthdayNoContent = true</script>"; $birthdayNoContent = true;  
                        echo "<p class='slideshowNoEvent'>There are <br> no birthdays <br> for this week</p>";
                    } else {
                        echo "<script>var birthdayNoContent = false</script>"; $birthdayNoContent = false;
                        echo "<h1 class='slideshowEvent'>BIRTHDAYS THIS WEEK:</h1>";
                        foreach ($birthdays as $Bid => $Barray) {
                            echo "<p class='slideshowEvent'>" . $Barray[0] . "</p>";
                        }
                    } ?>
                </div>
                <!-- WEDDINGS -->
                <div id='slideshowContent' class="slideshowContent">
                    <?php $weddings = get_weddings();
                    if (sizeof($weddings) == 0) {
                        echo "<script>var weddingsNoContent = true</script>"; $weddingsNoContent = true;
                        echo "<p class='slideshowNoEvent'>There are <br> no weddings <br> for this week</p>";
                    } else {
                        echo "<script>var weddingsNoContent = false</script>"; $weddingsNoContent = false;
                        echo "<h1 class='slideshowEvent'>WEDDINGS THIS WEEK:</h1>";
                        foreach ($weddings as $Wid => $Warray) {
                            echo "<p class='slideshowEvent'>" . $Warray[0] . " and " . $Warray[1] . "</p>";
                        }
                    } ?>
                    <br>
                </div>
                <!-- HOLY MASS -->
                <div id='slideshowContent' class="slideshowContent">
                    <?php $holy_mass = get_holy_mass();
                    if (sizeof($holy_mass) == 0) {
                        echo "<script>var sponsorsNoContent = true</script>"; $sponsorsNoContent = true;
                        echo "<p class='slideshowNoEvent'>There are <br> no special qurbanas <br> for this week</p>";
                    } else {
                        echo "<script>var sponsorsNoContent = false</script>"; $sponsorsNoContent = false;
                        echo "<h1 class='slideshowEvent'>SPECIAL QURBANA:</h1>";
                        foreach ($holy_mass as $Sid => $Sarray) {
                            echo "<p class='slideshowEvent'>" . $Sarray[0] . "</p>";
                        }
                    } ?>
                    <br>
                </div>
            </div>
        </div>

        <div class="cellBotFull">
            <!-- news -->
            <div class="innerGrid">
                <?php $news = get_news();
                if (sizeof($news) == 0) {
                    echo "<p id='noNews' class='noNews'> Have a good day!</p>";
                    echo "<p id='newsMessage' class='newsMessage' style='display:none'></p>"; //for javscript error purposes
                } 

                else {
                    echo "<p id='newsTitle' class='newsTitle'>NEWS</p>";
                    //echo "<span id='newsMessage' class='newsMessage'>";
                    echo "<div class='newsMessageContainer'>";
                    echo "<a class='prev' id='prevN'>&#10096;</a>";
                    echo "<a class='next' id='nextN'>&#10097;</a>";
                    echo "<a class='pause' id='pauseN'>&#10074;&#10074;</a>";




                    foreach ($news as $Nid => $Narray) {
                        if (($birthdayNoContent == true) && ($weddingsNoContent == true) && ($sponsorsNoContent == true)) {
                            //echo "<span id='newsMessage' class='newsMessage'>" . "There are no notable events this week!" . "</span>";
                            echo "<p id='newsMessage' class='newsMessage'> There are no notable events this week! Have a good day!</p>";
                            
                            //echo ". There are no notable events this week!" . "</span>";
                            //echo "<p id='newsMessage' class='newsMessage'> There are no notable events this week! " . $Narray[0] . "</p>";
                            //echo ". There are no notable events this week!" . "</span>";
                        } else {

                            if (sizeof($news) == 1) {
                                echo "<p id='slideshowNewsSingle' class='slideshowNewsSingle'>" . $Narray[0]  . "</p>";
                            } else {


                            
                            //foreach ($news as $Nid => $Nid) {
                                //echo "<p class='slideshowEvent'>" . $Sarray[0] . "</p>";
                                //echo "<p id='newsMessage' class='newsMessage'>" . $Narray[0]  . "</p>";
                            //}
                            echo "<p id='slideshowNews' class='slideshowNews'>" . $Narray[0]  . "</p>";
                            //echo "<p>" . $Narray[0]  . "</p>";
                            }
                        }

                    //echo "</span>";
                    }
                    echo "</div";
                } ?>
            </div>
        </div>

    </div>


</body>

<script src="stmarys.js"></script>

</html>
