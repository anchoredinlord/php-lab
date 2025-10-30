<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voting Eligibility Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            text-align: center;
            width: 320px;
        }
        input[type="number"] {
            width: 80%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 8px 15px;
            border: none;
            background-color: #1a73e8;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #155ab6;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Voting Eligibility Checker</h2>

    <form method="post">
        <label for="age">Enter your age:</label><br>
        <input type="number" name="age" id="age" required><br>
        <button type="submit">Check Eligibility</button>
    </form>

    <div class="result">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $age = $_POST["age"]; // get age input from user

                if ($age < 18) {
                    echo "Not eligible to vote.";
                } else {
                    echo "Eligible to vote.";
                }
            }
        ?>
    </div>
</div>

</body>
</html>
