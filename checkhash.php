<html>
<head><title>Check</title></head>
<body>
<h1>Checking PHP</h1>
<?php
    if (function_exists('hash')) {
        print "Hash function is available";
    } else {
        print "Hash function is NOT available";
    }
?>
</body>
</html>