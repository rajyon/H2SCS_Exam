<?php
include_once 'validate_result.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Result</title>
</head>

<body>
    <a href="index.php">Retake Test</a>
    <div class="card"><?php echo $Answer_List; ?></div>
    <div class="card">
        <h1>Test Result</h1>
        <p>Count(a): <?php echo $A_count; ?></p>
        <p>Count(b): <?php echo $B_count; ?></p>
        <p>Count(c): <?php echo $C_count; ?></p><br>
        <p>Total Answers: <?php echo $Total_count; ?></p>
    </div>
    <div class="card">
        <h2>Description:</h2>
        <p><?php echo $result_desc; ?></p>
    </div>
</body>

</html>