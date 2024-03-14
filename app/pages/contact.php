<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Ecomania</title>
    <link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/contact.css">
    
</head>
<body>
    
    <div class="arrow-left">
        <a href="<?=ROOT?>/home"><img src="<?=ROOT?>/../public/assets/imgs/contact/arrow_icon.png" alt=""></a>
    </div>

    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>Contact us</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="e0230737-e106-4974-9f36-9af4a2f965b1">
            <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
            <input type="email name="email" placeholder="Your Email" class="contact-inputs" required>
            <textarea name="message" placeholder="Your Message" class="contact-inputs" required></textarea>
            <button type="submit">Submit <img src="<?=ROOT?>/../public/assets/imgs/contact/arrow_icon.png" alt=""></button>
        </form>

        <div class="contact-right">
            <img src="<?=ROOT?>/../public/assets/imgs/contact/right.png" alt="">
        </div>
    </div>
    
</body>
</html>