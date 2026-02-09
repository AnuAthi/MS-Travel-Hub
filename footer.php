<?php
/**
 * MS Travel Hub - Footer Component
 * Internal CSS version matching the 3-column horizontal layout.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS Travel Hub</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
    <style>
        /* Footer Container */
        .main-footer {
            background-color: #0a162b;
            color: #ffffff;
            padding: 64px 0 32px 0;
            margin-top: auto;
            font-family: sans-serif; /* Replace with your site font */
        }

        .footer-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 48px;
        }

        /* Grid Layout */
        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 48px;
            margin-bottom: 64px;
        }

        @media (min-width: 768px) {
            .footer-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Column Styles */
        .footer-col {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .footer-col h4 {
            font-size: 17px;
            font-weight: bold;
            margin: 0;
        }

        .footer-col p, .footer-col div {
            color: #cbd5e1; /* slate-300 */
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }

        /* Social Icons */
        .social-links {
            display: flex;
            gap: 20px;
            padding-top: 8px;
        }

        .social-links a {
            color: #ffffff;
            font-size: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: #3b82f6; /* blue-500 */
        }

        /* Contact List */
        .contact-info p {
            margin-bottom: 8px;
        }

        /* Copyright Bar */
        .footer-bottom {
            padding-top: 32px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .footer-bottom p {
            color: #94a3b8; /* slate-400 */
            font-size: 14px;
        }
    </style>
</head>
<body>

    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-grid">
                
                <div class="footer-col">
                    <h4>MS Travel Hub</h4>
                    <p>Luxury, adventure, and unforgettable journeys.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <div class="contact-info">
                        <p>Email: info@mstravelhub.com</p>
                        <p>Phone: +94 71 108 98</p>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Office</h4>
                    <p>Dubai, United Arab Emirates</p>
                </div>

            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> MS Travel Hub</p>
            </div>
        </div>
    </footer>
    

</body>
</html> 