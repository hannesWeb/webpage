<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="Hannes' Website" />
<meta property="og:description" content="Hier könnte Ihre Werbung stehen!" />
<meta property="og:image" content="https://www.hannes-hirsch.de/favicon/android-chrome-512x512.png" />
<meta property="og:url" content="https://hannes-hirsch.de" />
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="stylesheet" href="/style.css">
    <title>Kontakt</title>
</head>
<body>
    <div class="main_page">
        <div class="page_header">
            <span>Kontakt</span>
        </div>
        <div class="content_section">
          <div class="section_header">Kontaktinformationen</div>
          <div class="content_section_text">
              <p>Hannes Hirsch<br>E-Mail: <a href="mailto:info@hannes-hirsch.de">info@hannes-hirsch.de</p>
          </div>
          <div class="section_header">Contact me:</div>
          <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <?php
            $num1 = rand(0, 9);
            $num2 = rand(0, 9);
            $operators = array('+', '-', '*');
            $operator = $operators[array_rand($operators)];
            $question = "$num1 $operator $num2";
            ?>
            
            <label for="captcha">What is <?php echo $question; ?>?</label>
            <input type="text" id="captcha" name="captcha" required>
            <input type="hidden" name="question" value="<?php echo $question; ?>">
            
            <input type="submit" value="Send">
          </form>
          
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
    text-decoration: none; title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/DMCA_logo-std-btn180w.png?ID=42f77e89-fe3a-4c80-9b1c-ef52834c49f0"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>

</body>
</html>

