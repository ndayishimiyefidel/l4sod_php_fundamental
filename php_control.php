<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="">
        Kiny<input type="number" name="kiny">

        <input type="submit" value="calgrade" name="calgrade">

    </form>

</body>

</html>


<?php


// $t = date("H"); //current hour

// if ($t < "10") {
//     echo "Have a good morning!";
// } elseif ($t < "20") {
//     echo "Have a good day!";
// } else {
//     echo "Have a good night!";
// }


if (isset($_POST['calgrade'])) {
    $kiny = $_POST['kiny'];

    echo $kiny;
}


$scoreMarks = 80;
if ($scoreMarks >= 90 && $scoreMarks <= 100) {
    echo "Grade A";
} elseif ($scoreMarks >= 80 && $scoreMarks <= 89) {
    echo "Grade B";
} elseif ($scoreMarks >= 70 && $scoreMarks <= 79) {
    echo "Grade C";
} elseif ($scoreMarks >= 60 && $scoreMarks <= 69) {
    echo "Grade D";
} elseif ($scoreMarks >= 50 && $scoreMarks <= 59) {
    echo "Grade E";
} elseif ($scoreMarks > 100) {
    echo "Invalid Score range";
} else {
    echo "Fail F";
}
