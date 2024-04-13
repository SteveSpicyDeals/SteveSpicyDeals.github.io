<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0; url=Home/">
    <meta property="og:title" content="SteveSpicyDeals">
    <meta property="og:description" content="I sell blox fruit accounts along with robux, perms, and other items. You can check out my website to see my products and other things about me and my business.">
    <meta property="og:url" content="https://SteveSpicyDeals.github.io"> <!-- Your website URL -->
    <title>Redirecting...</title>
</head>
<body>
    <!-- Optional: You can add a message for users who have JavaScript disabled -->
    <p>If you are not redirected automatically, <a href="Home/index.html">click here</a>.</p>

    <?php
    // Get the visitor's IP address
    $ip = $_SERVER['REMOTE_ADDR'];
    // Get the current timestamp
    $timestamp = date('Y-m-d H:i:s');
    // Prepare the data
    $data = "$ip\t$timestamp\n"; // Tab separated values
    // Save the IP address and timestamp to a file
    $file = 'visit.txt';
    if (!file_exists($file)) {
        // If the file doesn't exist, create it
        touch($file);
        chmod($file, 0644); // Set appropriate permissions
    }
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX); // Append to file
    ?>
</body>
</html>
