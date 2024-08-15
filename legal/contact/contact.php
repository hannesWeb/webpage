<!DOCTYPE html>
<html>
<head>
<meta property="og:title" content="Hannes' Website" />
<meta property="og:description" content="Hier könnte Ihre Werbung stehen!" />
<meta property="og:image" content="https://www.hannes-hirsch.de/favicon/android-chrome-512x512.png" />
<meta property="og:url" content="https://hannes-hirsch.de" />
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <title>hannes-hirsch.de</title>
</head>
<body>
    <div class="main_page">
        <div class="page_header">
            <span id="message">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $subject = htmlspecialchars($_POST['subject']);
                    $message = htmlspecialchars($_POST['message']);
                    $captcha = htmlspecialchars($_POST['captcha']);
                    $question = htmlspecialchars($_POST['question']);
                    
                    eval('$correct_answer = ' . $question . ';');

                    if ($captcha == $correct_answer) {
                        $to = "info@mail.hannes-hirsch.de";
                        $headers = "From: " . $email;
                        
                        mail($to, $subject, $message, $headers);
                        echo "Your message was sent successfully";
                    } else {
                        echo "Captcha wrong";
                    }
                }
                ?>
            </span>
        </div>
    </div>
    <a href="https://www.hannes-hirsch.de" id="floating-button" style="
        display: block;
        width: 120px;
        height: 30px;
        border-radius: 50%;
        background-color: #5C6BC0;
        color: white;
        text-align: center;
        padding: 16px 0;
        position: fixed;
        bottom: 20px;
        right: 20px;
        font-size: 18px;
        text-decoration: none;
        transition: background-color 0.3s;
    " onmouseover="this.style.backgroundColor='#3F51B5';" onmouseout="this.style.backgroundColor='#5C6BC0';">
        Zurück
    </a>
    <a href="//www.dmca.com/Protection/Status.aspx?ID=42f77e89-fe3a-4c80-9b1c-ef52834c49f0" style="
        display: block;
        width: 120px;
        height: 30px;
        padding: 16px 0;
        position: fixed;
        bottom: 40px;
        left: 10px;
        font-size: 18px;
        text-decoration: none;" title="DMCA.com Protection Status" class="dmca-badge">
        <img src="https://images.dmca.com/Badges/DMCA_logo-std-btn180w.png?ID=42f77e89-fe3a-4c80-9b1c-ef52834c49f0" alt="DMCA.com Protection Status" />
    </a>
    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
</body>
</html>
