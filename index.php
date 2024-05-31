<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Codes Index</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #e74c3c;
        }
        h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #e74c3c;
        }
        ul {
            list-style-type: none;
            padding: 0;
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #1abc9c;
            font-size: 1.2rem;
        }
        a:hover {
            color: #16a085;
        }
    </style>
</head>
<body>
    <main>
        <h1>PHP Codes Index</h1>
        <h3> BY JAINIL PADMANI</h3>
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
                // Check if it's a file, if it ends with .php, and if it's not index.php
                if (is_file($directory . '/' . $file) && pathinfo($file, PATHINFO_EXTENSION) === 'php' && $file !== 'index.php') {
                    echo "<li><a href=\"$file\">$file</a></li>";
                }
            }
            ?>
        </ul>
    </main>
</body>
</html>
