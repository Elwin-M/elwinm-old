//Images variables
var playing = true;
var firstLoad = true;
var currentSlide = 0;
var slides = document.querySelectorAll('.slideshowImage');
var slidesLength = slides.length;

//Content variables
var playingC = true;
var firstLoadC = true;
var currentSlideC = 0;
var slidesC = document.querySelectorAll('.slideshowContent');
var slidesLengthC = slidesC.length;

//News variables
var playingN = true;
var firstLoadN = true;
var currentSlideN = 0;
var slidesN = document.querySelectorAll('.slideshowNews');
var slidesLengthN = slidesN.length;

timers()

//Timer functions
function timers() {
    //For next slide intervals
    slideTimer = imageTime * 1000;
    slideTimerC = contentTime * 1000;
    slideTimerN = newsTime * 1000;

    //var news = document.getElementById('newsMessage');
    var news = document.getElementsByClassName('slideshowNews');
    var images = document.getElementsByClassName('slideshowImage');
    var content = document.getElementsByClassName('slideshowContent');

    //news timer
    if (news.length == 0) {
        console.log("news is empty")
    } else {
        for (i = 0; i < news.length; i++) {
            news[i].style.animationDuration = newsTime + 's';
        }
        //news[i].style.animationDuration = newsTime + 's';
    }

    //images timer
    if (images.length == 0) {
        console.log("images is empty")
    } else {
        for (i = 0; i < images.length; i++) {
            images[i].style.animationDuration = imageTime + 's';
        }
    }

    //content timer
    if (content.length == 0) {
        console.log("content is empty")
    } else {
        for (i = 0; i < content.length; i++) {
            content[i].style.animationDuration = contentTime + 's';
        }
    }
}

//Empty content function
if ((birthdayNoContent == true) && (weddingsNoContent == true) && (sponsorsNoContent == true)) {
    console.log("no events")
    var x = document.getElementById("cellMidRight").style.display = "none";
    var y = document.getElementById("cellMidLeft").style.gridColumnEnd = 6;
}

//Images functions
if (slidesLength == 0) {
    console.log("images are empty");
} else {
    if (firstLoad) {
        goToSlide(0);
        firstLoad = false;
    }
    var slideInterval = setInterval(nextSlide, slideTimer);
    var next = document.getElementById('next');
    var prev = document.getElementById('prev');
    var pauseButton = document.getElementById('pause');

    pauseButton.onclick = function() {
        if (playing) {
            pauseSlideshow();
        } else {
            playSlideshow();
        }
    }

    next.onclick = function() {
        pauseSlideshow();
        nextSlide();
    }
    prev.onclick = function() {
        pauseSlideshow();
        prevSlide();
    }
}

function nextSlide() {
    goToSlide(currentSlide + 1);
}

function prevSlide() {
    goToSlide(currentSlide - 1);
}

function goToSlide(n) {
    slides[currentSlide].className = 'slideshowImage';
    currentSlide = (n + slides.length) % slides.length;
    if (playing) {
        slides[currentSlide].className = 'slideshowImage showingAni';
    } else {
        slides[currentSlide].className = 'slideshowImage showing';
    }
}

function pauseSlideshow() {
    pauseButton.innerHTML = '&#9658';
    playing = false;
    slides[currentSlide].className = "slideshowImage showing";
    pauseButton.className = 'pause paused';
    clearInterval(slideInterval);
}

function playSlideshow() {
    pauseButton.innerHTML = '&#10074;&#10074;';
    playing = true;
    pauseButton.className = 'pause';
    slides[currentSlide].className = "slideshowImage showing";
    slideInterval = setInterval(nextSlide, slideTimer);
}

//Content functions
if (slidesLengthC == 0) {
    console.log("CONTENT are empty");
} else {
    if (firstLoadC) {
        goToSlideC(0);
        firstLoadC = false;
    }
    var slideIntervalC = setInterval(nextSlideC, slideTimerC);
    var nextC = document.getElementById('nextC');
    var prevC = document.getElementById('prevC');
    var pauseButtonC = document.getElementById('pauseC');

    pauseButtonC.onclick = function() {
        if (playingC) {
            pauseSlideshowC();
        } else {
            playSlideshowC();
        }
    }

    nextC.onclick = function() {
        pauseSlideshowC();
        nextSlideC();
    }
    prevC.onclick = function() {
        pauseSlideshowC();
        prevSlideC();
    }
}

function nextSlideC() {
    goToSlideC(currentSlideC + 1);
}

function prevSlideC() {
    goToSlideC(currentSlideC - 1);
}

function goToSlideC(n) {
    slidesC[currentSlideC].className = 'slideshowContent';
    currentSlideC = (n + slidesC.length) % slidesC.length;
    if (playingC) {
        slidesC[currentSlideC].className = 'slideshowContent slideshowContentShowing contentAni'; ///////////////////// animation
    } else {
        slidesC[currentSlideC].className = 'slideshowContent slideshowContentShowing';
    }
}

function pauseSlideshowC() {
    pauseButtonC.innerHTML = '&#9658';
    playingC = false;
    slidesC[currentSlideC].className = "slideshowContent slideshowContentShowing";
    pauseButtonC.className = 'pause paused';
    clearInterval(slideIntervalC);
}

function playSlideshowC() {
    pauseButtonC.innerHTML = '&#10074;&#10074;';
    playingC = true;
    pauseButtonC.className = 'pause';
    slidesC[currentSlideC].className = "slideshowContent slideshowContentShowing";
    slideIntervalC = setInterval(nextSlideC, slideTimerC);
}

//News functions
if (slidesLengthN == 0) {
    console.log("news are empty");
} else {
    if (firstLoadN) {
        goToSlideN(0);
        firstLoadN = false;
    }
    var slideIntervalN = setInterval(nextSlideN, slideTimerN);
    var nextN = document.getElementById('nextN');
    var prevN = document.getElementById('prevN');
    var pauseButtonN = document.getElementById('pauseN');

    pauseButtonN.onclick = function() {
        if (playingN) {
            pauseSlideshowN();
        } else {
            playSlideshowN();
        }
    }

    nextN.onclick = function() {
        pauseSlideshowN();
        nextSlideN();
    }
    prevN.onclick = function() {
        pauseSlideshowN();
        prevSlideN();
    }
}

function nextSlideN() {
    goToSlideN(currentSlideN + 1);
}

function prevSlideN() {
    goToSlideN(currentSlideN - 1);
}

function goToSlideN(n) {
    slidesN[currentSlideN].className = 'slideshowNews';
    currentSlideN = (n + slidesN.length) % slidesN.length;
    if (playingN) {
        slidesN[currentSlideN].className = 'slideshowNews slideshowNewsShowing contentAni';
    } else {
        slidesN[currentSlideN].className = 'slideshowNews slideshowNewsShowing';
    }
}

function pauseSlideshowN() {
    pauseButtonN.innerHTML = '&#9658';
    playingN = false;
    slidesN[currentSlideN].className = "slideshowNews slideshowNewsShowing";
    pauseButtonN.className = 'pauseN paused';
    clearInterval(slideIntervalN);
}

function playSlideshowN() {
    pauseButtonN.innerHTML = '&#10074;&#10074;';
    playingN = true;
    pauseButtonN.className = 'pause';
    slidesN[currentSlideN].className = "slideshowNews slideshowNewsShowing";
    slideIntervalN = setInterval(nextSlideN, slideTimerN);
}