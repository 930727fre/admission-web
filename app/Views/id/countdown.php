<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Redirect with Countdown</title>
    <link rel="stylesheet" href="https://classless.de/classless.css">

</head>
<body>
    <h1><?php echo $message."<br>"; ?> Redirect in <span id="countdown">3</span> seconds...</h1>

    <script>
        // Function to update the countdown and redirect
        function updateCountdown() {
            var countdownElement = document.getElementById('countdown');
            var seconds = parseInt(countdownElement.innerHTML);
            
            if (seconds > 0) {
                seconds--;
                countdownElement.innerHTML = seconds;
                setTimeout(updateCountdown, 1000); // Call this function again after 1 second
            } else {
                // Perform the redirect after the countdown is finished
                window.location.replace("<?php if(isset($url)){echo $url;}else{echo "/";} ?>");
            }
        }

        // Call the function on page load
        updateCountdown();
    </script>
</body>
</html>
