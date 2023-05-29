<!DOCTYPE html>
<html>
<head>
    <title>Binary Sum</title>
</head>
<body>
    <h1>Binary Sum: Input only binary 1 or 0</h1>
    <form method="post">
        <label for="binaryA">Binary A:</label>
        <input type="text" name="binaryA" id="binaryA" required pattern="[01]+">
        <br>
        <label for="binaryB">Binary B:</label>
        <input type="text" name="binaryB" id="binaryB" required pattern="[01]+">
        <br>
        <input type="submit" value="Calculate Sum">
    </form>
    <h2>Result:</h2>
    <?php
    function binarySum($a, $b)
    {
        $decimalA = bindec($a);
        $decimalB = bindec($b);
        $sum = $decimalA + $decimalB;
        $binarySum = decbin($sum);
        return $binarySum;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $binaryA = $_POST["binaryA"];
        $binaryB = $_POST["binaryB"];
        $result = binarySum($binaryA, $binaryB);
        echo "<p>{$result}</p>";
    }
    ?>
</body>
</html>