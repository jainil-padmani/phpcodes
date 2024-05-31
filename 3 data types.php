<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <?php
        // Scalar Types (contains one value)
        $string = "Jainil Padmani"; // default value = " "
        $int = 123456; // default value = 0
        $float = 12.3456; // default value = 0.00
        $bool = true; // 1 is also return as true and 0 is return as false  // default value = false

        // Array Types
        $name = array("Jainil", "Snehalbhai", "Padmani"); // default value = []
        $name2 = ["Jainil", "Snehalbhai", "Padmani"]; // array can be written in this format also 

        // Object Type
        class Car {
            public $brand1;
            public $brand2;
            public $brand3;

            function __construct($brand1, $brand2, $brand3) {
                $this->brand1 = $brand1;
                $this->brand2 = $brand2;
                $this->brand3 = $brand3;
            }
        }

        $object = new Car("Hyundai", "Honda", "Tata"); // default value = null

        echo "String = " . $string . "<br>";
        echo "Integer = " . $int . "<br>";
        echo "Float = " . $float . "<br>";
        echo "Boolean = " . $bool . "<br>";
        echo "Array 1 = ";
        print_r($name);
        echo "<br>Array 2 = ";
        print_r($name2);
        echo "<br>Object = ";
        print_r($object);
    ?>
</body>
</html>
