<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
        /* Set basic styling for the whole page */
        body {
            font-family: Arial, sans-serif; /* Set font */
            background-color: #f2f2f2;      /* Light gray background */
            padding: 30px;                   /* Space around content */
        }

        h1 {
            color: #333;                     /* Dark heading color */
        }

        /* Style the form */
        form {
            background-color: #fff;          /* White form background */
            padding: 20px 30px;              /* Inner spacing */
            border-radius: 10px;             /* Rounded corners */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Light shadow for depth */
            max-width: 400px;                /* Form width limit */
        }

        label {
            display: inline-block;           /* Align label next to input */
            width: 120px;                    /* Fixed width for alignment */
            margin-bottom: 10px;             /* Space below label */
            font-weight: bold;               /* Make label bold */
        }

        input[type="text"] {
            width: 200px;                    /* Input width */
            padding: 5px;                    /* Space inside input */
            margin-bottom: 15px;             /* Space below input */
            border: 1px solid #ccc;          /* Gray border */
            border-radius: 5px;              /* Rounded corners */
        }

        input[type="submit"] {
            padding: 8px 20px;               /* Button padding */
            background-color: #0066cc;       /* Blue button background */
            color: white;                    /* White text */
            border: none;                    /* Remove border */
            border-radius: 5px;              /* Rounded corners */
            cursor: pointer;                 /* Pointer on hover */
        }

        input[type="submit"]:hover {
            background-color: #004d99;       /* Darker blue on hover */
        }

        h2 {
            margin-top: 20px;                /* Space above result */
            color: #0066cc;                  /* Result color */
        }
    </style>
</head>
<body>
<h1>Temperature Converter (Celsius → Fahrenheit)</h1>

<?php
// Initialize a variable to store the conversion result or error message
$result = "";

// Check if the form has been submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve the value entered by the user in the 'celsius' input field
    $celsius = $_POST["celsius"];

    // Validate the input
    if (!is_numeric($celsius)) { 
        // If input is not a number, set an error message
        $result = "Error: Please enter a valid number.";
    } elseif ($celsius < -273.15) {
        // Check if the input is below absolute zero (-273.15°C)
        // Absolute zero is the lowest physically possible temperature
        $result = "Error: Temperature below absolute zero!";
    } else {
        // Input is valid, perform the Celsius to Fahrenheit conversion
        // Formula: F = (C * 9/5) + 32
        $fahrenheit = ($celsius * 9/5) + 32;

        // Prepare the result string to display
        $result = "$celsius °C = $fahrenheit °F";
    }
}
?>

<!-- HTML Form to accept user input -->
<form method="post" action="">
    <!-- Label for Celsius input -->
    <label>Temperature (°C):</label>
    <!-- Input field for Celsius value -->
    <!-- 'value' keeps the previous input after form submission -->
    <input type="text" name="celsius" value="<?php if(isset($celsius)) echo $celsius; ?>"><br>

    <!-- Submit button to trigger conversion -->
    <input type="submit" value="Convert">
</form>

<?php
// Display the result (conversion or error) if it exists
if ($result !== "") {
    echo "<h2>$result</h2>";
}
?>

</body>
</html>
