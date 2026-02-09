<?php
// aboutus.php
include 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us | MS Travel Hub</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f7f7f7;
    overflow-x:hidden;
}

/* ================= HERO ================= */
.about-hero{
    position:relative;
    min-height:100vh;
    display:flex;
    align-items:center;
    padding:0 20px;
    overflow:hidden;
    color:#fff;
}


.about-hero video{
    position:absolute;
    top:0%;
    left:0;
    width:100%;
    height:100%;
    object-fit:cover;
    z-index:0;
}

/* BLUE OVERLAY */
.about-hero::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(
        rgba(22, 43, 90, 0.75),
        rgba(49, 61, 85, 0.75)
    );
    z-index:1;
}

.hero-content{
    position:relative;
    z-index:2;
    max-width:650px;
}

.hero-content .tag{
    font-size:1em;
    opacity:.9;
    letter-spacing:1px;
}

.hero-content h1{
    font-size:3.8em;
    font-weight:900;
    margin:15px 0 20px;
}

.hero-content p{
    font-size:1.1em;
    line-height:1.7;
    opacity:.95;
}

/* ================= STORY ================= */
.story-section{
    display:flex;
    gap:50px;
    padding:80px 50px;
    background:#fff;
}

.title-col{
    flex:0 0 30%;
}

.title-col h2{
    font-size:2.5em;
    color:#193060;
}

.content-col p{
    font-size:1.05em;
    color:#555;
    line-height:1.7;
    margin-bottom:20px;
}

/* ================= STATS ================= */
.stats-section{
    background:#193060;
    margin:0 50px 80px;
    padding:60px 50px;
    border-radius:10px;
}

.stats-container{
    display:flex;
    justify-content:space-around;
    flex-wrap:wrap;
    text-align:center;
}

.stat-item{
    color:#fff;
}

.stat-item h3{
    font-size:3em;
}

.stat-item p{
    opacity:.85;
}

/* ================= WHY CHOOSE ================= */
.why-choose-section{
    display:flex;
}

.left-panel{
    flex:0 0 40%;
    background:#193060;
    color:#fff;
    padding:80px 50px;
}

.right-panel{
    flex:1;
    padding:80px 50px;
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:30px;
}

.feature-box{
    background:#fff;
    padding:30px;
    border-radius:6px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.feature-box i{
    font-size:2.5em;
    color:#1e88e5;
    margin-bottom:15px;
}

.feature-box h3{
    color:#193060;
    margin-bottom:10px;
}

/* ================= MOBILE ================= */
@media(max-width:992px){
    .story-section,
    .why-choose-section{
        flex-direction:column;
    }

    .right-panel{
        grid-template-columns:1fr;
    }

    .hero-content h1{
        font-size:2.6em;
    }
}
</style>
</head>

<body>

<section class="about-hero">
    <video src="images/video3.mp4" autoplay muted loop playsinline></video>
    <div class="hero-content">
        <p class="tag">ABOUT US</p>
        <h1>Who We Are</h1>
        <p>
            We are a trusted Dubai tourism service provider delivering premium travel experiences
            across the United Arab Emirates with personalized tours and luxury services.
        </p>
    </div>
</section>

<section class="story-section">
    <div class="title-col">
        <h2>Our Story</h2>
    </div>
    <div class="content-col">
        <p>
            MS Travel Hub is a professionally managed destination management company
            specializing in Dubai city tours, desert safaris, luxury travel, and tailor-made holidays.
        </p>
        <p>
            Our passion is to showcase Dubai’s iconic skyline, vibrant culture, and world-class
            hospitality through unforgettable travel experiences.
        </p>
    </div>
</section>

<section class="stats-section">
    <div class="stats-container">
        <div class="stat-item"><h3>783+</h3><p>Happy Clients</p></div>
        <div class="stat-item"><h3>4</h3><p>Branches</p></div>
        <div class="stat-item"><h3>50+</h3><p>Team Members</p></div>
        <div class="stat-item"><h3>18+</h3><p>Years Experience</p></div>
    </div>
</section>

<section class="why-choose-section">
    <div class="left-panel">
        <h2>Why Choose MS Travel Hub</h2>
        <p>Premium service, trusted expertise, and unforgettable journeys.</p>
    </div>
    <div class="right-panel">
        <div class="feature-box"><i class="fas fa-globe"></i><h3>Customized Tours</h3><p>Trips designed just for you.</p></div>
        <div class="feature-box"><i class="fas fa-headset"></i><h3>24/7 Support</h3><p>We are always here.</p></div>
        <div class="feature-box"><i class="fas fa-wallet"></i><h3>Best Prices</h3><p>Luxury at the best value.</p></div>
        <div class="feature-box"><i class="fas fa-star"></i><h3>Trusted Service</h3><p>Reliable & professional.</p></div>
    </div>
</section>

<?php 
include 'footer.php'; 
?>

</body>
</html>