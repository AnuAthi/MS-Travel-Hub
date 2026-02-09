<?php
// index.php
include 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS Travel Hub</title>

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
        }

        /* Header and Nav styles removed as they are no longer used */

        section.home {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
            overflow: hidden;
        }

        section.home video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        section.home::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(3, 96, 251, 0.3);
            z-index: 1;
        }

        section.home .content {
            position: relative;
            z-index: 2;
            color: #fff;
            text-align: center;
            max-width: 700px;
        }

        section.home .content h1 {
            font-size: 3em;
            font-weight: 900;
            margin-bottom: 20px;
        }

        section.home .content p {
            margin-bottom: 30px;
            font-size: 1em;
            line-height: 1.6;
        }

        section.home .content a {
            background: #fff;
            color: #1680AC;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: 500;
        }

        @media screen and (max-width: 600px) {
            section.home .content h1 {
                font-size: 2.2em;
            }

            section.home .content p {
                font-size: 0.9em;
            }

            section.home .content a {
                padding: 10px 25px;
            }
        }
    </style>
</head>
<body>

<section class="home">
    <video src="images/video2.mp4" autoplay muted loop playsinline></video>
    <div class="content">
        <p>
            Dubai is a wonderful place known for its modern lifestyle and stunning architecture.
            The city is famous for its tall skyscrapers, luxury shopping, beautiful beaches, and vibrant nightlife.
        </p>
        <a href="#">Read More</a>
    </div>
</section>

<?php 
include 'footer.php'; 
?>

</body>
</html>