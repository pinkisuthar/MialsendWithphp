<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel='stylesheet' href="assets/css/custom.css">
</head>
<body>
<div class="container">
    <form method="post" action="mailer.php">
        <input name="name" type="text" class="feedback-input" placeholder="Name" required />
        <input name="email" type="email" class="feedback-input" placeholder="Email" required />
        <textarea name="text" class="feedback-input" placeholder="Comment" required></textarea>
        <input type="submit" value="submit"/>
    </form>
</div>
</body>
</html>
