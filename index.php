<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel='stylesheet' href="assets/css/custom.css">
    <style>
        /* Add some basic styling */
        .feedback-input { margin-bottom: 10px; padding: 10px; width: 100%; }
        .success { 
            color: green; 
            font-size: 25px;
            text-align: center;
        }
        .error { 
            color: red; 
            font-size: 25px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
    // Display the message if the status is set in the URL
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo '<p class="success">Mail sent successfully.</p>';
        } elseif ($_GET['status'] == 'error') {
            echo '<p class="error">Mail sending failed.</p>';
        }
        
        // JavaScript to remove the query parameters from the URL
        echo '
        <script>
            // Delay removal to ensure the user sees the message
            setTimeout(function() {
                if (typeof window.history.replaceState === "function") {
                    window.history.replaceState(null, null, window.location.pathname);
                }
            }, 1000); // Adjust the delay as needed (1 second here)
        </script>';
    }
    ?>

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
