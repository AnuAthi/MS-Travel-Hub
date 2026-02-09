<?php 
// contact_us.php
include "header.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | MS Travel Hub</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
     
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            overflow-x: hidden;
            background: #f7f7f7;
        }
        .menu-btn {
            display: none;
            font-size: 1.5em;
            color: #fff;
            cursor: pointer;
        }

        
        .contact-hero {
            position: relative;
            min-height: 100vh; 
            display: flex;
            justify-content: center; 
            align-items: center;     
            text-align: center;
            overflow: hidden;
            color: #fff;
        }
        .contact-hero video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; 
            z-index: 0;
        }
        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(25, 25, 112, 0.55); 
            z-index: 1;
        }
        .hero-info {
            position: relative;
            z-index: 2;
            max-width: 700px;
            color: #fff; 
        }
        .hero-info .tag {
            color: #fff; 
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.1em;
        }
        .hero-info h2 {
            font-size: 3.5em;
            font-weight: 900;
            margin-bottom: 20px;
        }
        .hero-info p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .hero-info .call-btn {
            display: inline-block;
            background: #060d3fff;
            color: #f0f0f7ff;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1em;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
        }
        .hero-info .call-btn:hover {
            background: #76a83d;
        }
        .contact-details-section {
            background: #f0f4f8; 
            display: flex;
            flex-wrap: wrap;
            min-height: 600px;
        }
        .contact-details-container {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
        }
        .info-panel {
            flex: 1;
            background: #ffffff;
            color: #191970; 
            padding: 80px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 40%;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .info-panel h3 { font-size: 2em; margin-bottom: 10px; }
        .info-panel p { font-size: 1.1em; line-height: 1.6; margin-bottom: 40px; color: #191970; }
        .contact-item { display: flex; align-items: flex-start; margin-bottom: 25px; }
        .contact-item i { font-size: 1.5em; color: #8BC34A; margin-right: 15px; margin-top: 5px; }
        .contact-item div p { margin: 0; font-size: 1em; color: #191970; }
        .contact-item div p:first-child { font-weight: 600; color: #555; }

        .form-panel {
            flex: 1;
            background: #e0e7ef; 
            color: #191970;
            padding: 80px 50px;
            min-width: 60%;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .form-panel h3 { font-size: 2em; margin-bottom: 30px; color: #191970; }
        .form-group { margin-bottom: 25px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 500; font-size: 0.9em; color: #191970; }
        .form-panel input[type="text"],
        .form-panel input[type="email"],
        .form-panel input[type="tel"],
        .form-panel select,
        .form-panel textarea {
            width: 100%;
            padding: 15px 20px;
            border: none;
            border-radius: 50px;
            background: #fff;
            color: #191970;
            font-size: 1em;
        }
        .form-panel textarea { min-height: 120px; border-radius: 10px; resize: vertical; }
        .checkbox-group { display: flex; align-items: flex-start; margin-bottom: 30px; font-size: 0.9em; }
        .checkbox-group input[type="checkbox"] { margin-right: 10px; margin-top: 3px; }
        .checkbox-group label { color: #191970; }
        .form-panel button[type="submit"] {
            width: 100%;
            padding: 15px;
            background: #8BC34A;
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: 1.1em;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.3s;
        }
        .form-panel button[type="submit"]:hover { background: #76a83d; }
        
        @media screen and (max-width: 1024px) {
            header { padding: 10px 20px; }
            header .navigation {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100vh;
                background: #0d1e3a;
                justify-content: center;
                align-items: center;
                transition: 0.3s;
            }
            header .navigation.active { left: 0; }
            header .navigation .navigation-items { flex-direction: column; gap: 25px; text-align: center; }
            .contact-hero { min-height: 60vh; padding: 100px 20px 40px; }
            .hero-info h2 { font-size: 2.5em; }
            .hero-info p { font-size: 1em; }
            .contact-details-container { flex-direction: column; }
            .info-panel, .form-panel { padding: 40px 20px; min-width: 100%; }
            footer { padding: 40px 20px 10px; }
            .footer-col { min-width: 100%; }
        }
        @media screen and (max-width: 600px) {
            .hero-info h2 { font-size: 2em; }
            .hero-info .call-btn { padding: 12px 25px; font-size: 1em; }
        }

    </style>
</head>
<body>

<section class="contact-hero">
    <video src="images/video4.mp4" autoplay muted loop playsinline></video>
    <div class="hero-info">
        <h2>Ready to Talk?</h2>
        <p>We can help you plan a great holiday, assist in hotel bookings, and recommend the best destinations.</p>
        <a href="tel:+94711790694" class="call-btn"><i class="fas fa-phone"></i> +94 711 790 694</a>
    </div>
</section>


<section class="contact-details-section">
    <div class="contact-details-container">

        <div class="info-panel">
            <h3>Send us a Message</h3>
            <p>Let's leave a message, we will get back to you.</p>

            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <p>Write us an email</p>
                    <p>info@mstavelhub.com</p>
                </div>
            </div>

            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <div>
                    <p>Your Contact</p>
                    <p>+94 711 790 694</p>
                </div>
            </div>

            <h3 style="margin-top: 40px;">Let's connect</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="form-panel">
            <h3>Leave a message</h3>
            <form action="#" method="POST">

                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Name Here" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Email here" required>
                </div>

                <div class="form-group">
                    <label for="phone">Your Contact</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number here">
                </div>

                <div class="form-group">
                    <label for="tour_type">Type of Tour</label>
                    <select id="tour_type" name="tour_type">
                        <option value="">Select a Tour Type</option>
                        <option value="solo">Solo</option>
                        <option value="couple">Couple</option>
                        <option value="honeymoon">Honeymoon</option>
                        <option value="family">Family</option>
                        <option value="business">Business</option>
                        <option value="mice">MICE</option>
                        <option value="medical">Medical</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="accommodation">Accommodation Type</label>
                    <select id="accommodation" name="accommodation">
                        <option value="">Select an Accommodation</option>
                        <option value="guesthouses">Guest Houses</option>
                        <option value="budget">Budget Hotels</option>
                        <option value="luxury">Luxury Hotels</option>
                        <option value="boutique">Luxury Boutique Hotels</option>
                        <option value="eco">Eco Lodges</option>
                        <option value="tented">Tented Camps</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Write a message</label>
                    <textarea id="message" name="message" placeholder="Your Message"></textarea>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="privacy" name="privacy" required>
                    <label for="privacy">I have read the <a href="#" style="color:#8BC34A; text-decoration:none;">Privacy Policy</a> and agree to its terms.</label>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>

    </div>
</section>
</script>
<?php 
include 'footer.php'; 
?>
</body>
</html>
