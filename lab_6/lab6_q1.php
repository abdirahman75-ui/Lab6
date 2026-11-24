<?php

$name = 'Abdirahman Abdinor Ali';
$matricNumber = 'Ai240241';
$course = 'Web development';
$yearOfStudy = '3rd year';
$address = 'Eco Dobi';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 6 Q1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Student Details</h1>
        <table>
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
                <tr>
                    <th scope="row">Matric Number</th>
                    <td><?= htmlspecialchars($matricNumber, ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
                <tr>
                    <th scope="row">Course</th>
                    <td><?= htmlspecialchars($course, ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
                <tr>
                    <th scope="row">Year of Study</th>
                    <td><?= htmlspecialchars($yearOfStudy, ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td><?= htmlspecialchars($address, ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
