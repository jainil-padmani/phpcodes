<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Codes Index</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>PHP Codes Index</h1>
    <ul>
        <?php
        // Set the directory you want to scan
        $directory = __DIR__; // __DIR__ gets the current directory of this script

        // Scan the directory and get an array of files and directories
        $files = scandir($directory);

        // Filter out the current (.) and parent (..) directories
        $files = array_diff($files, array('.', '..'));

        // Iterate over the files and directories
        foreach ($files as $file) {
            // Check if it's a file and if it ends with .php
            if (is_file($directory . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                echo "<li><a href=\"$file\">$file</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
