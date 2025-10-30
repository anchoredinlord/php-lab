<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;
        }

        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"], select {
            width: 200px;
            padding: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 8px 20px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #004d99;
        }

        h2 {
            margin-top: 20px;
            color: #0066cc;
        }
    </style>
</head>
<body>
<h1>Simple Calculator</h1>

<?php
// Initialize result variable to store the calculation result
$result = "";

// Check if the form was submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve input values from form
    $num1 = $_POST["num1"];       // First number
    $num2 = $_POST["num2"];       // Second number
    $operation = $_POST["operation"]; // Selected operation

    // Validate inputs: check if both are numeric
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $result = "Error: Please enter valid numbers."; // Show error if invalid
    } else {
        // Perform calculation based on selected operation
        switch ($operation) {
            case "Add":
                $result = $num1 + $num2; // Addition
                break;
            case "Subtract":
                $result = $num1 - $num2; // Subtraction
                break;
            case "Multiply":
                $result = $num1 * $num2; // Multiplication
                break;
            case "Divide":
                if ($num2 == 0) { // Check for division by zero
                    $result = "Error: Division by zero!";
                } else {
                    $result = $num1 / $num2; // Division
                }
                break;
            default:
                $result = "Invalid operation."; // Safety fallback
        }
    }
}
?>

<!-- HTML Form for Calculator -->
<form method="post" action="">
    <!-- Input for first number -->
    <label>Number 1:</label>
    <input type="text" name="num1" value="<?php if(isset($num1)) echo $num1; ?>"><br>
    
    <!-- Input for second number -->
    <label>Number 2:</label>
    <input type="text" name="num2" value="<?php if(isset($num2)) echo $num2; ?>"><br>
    
    <!-- Dropdown for selecting operation -->
    <label>Operation:</label>
    <select name="operation">
        <option value="Add" <?php if(isset($operation) && $operation=="Add") echo "selected"; ?>>Add</option>
        <option value="Subtract" <?php if(isset($operation) && $operation=="Subtract") echo "selected"; ?>>Subtract</option>
        <option value="Multiply" <?php if(isset($operation) && $operation=="Multiply") echo "selected"; ?>>Multiply</option>
        <option value="Divide" <?php if(isset($operation) && $operation=="Divide") echo "selected"; ?>>Divide</option>
    </select><br>
    
    <!-- Submit button -->
    <input type="submit" value="Calculate">
</form>

<?php
// Display the result if it exists
if ($result !== "") {
    echo "<h2>Result: $result</h2>";
}
?>

</body>
</html>
