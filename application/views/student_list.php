<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT LIST</title>
</head>

<body>
    <h2>
        <?php echo $title ?>
    </h2>
    <ul>
        <?php foreach ($studentlist as $student): ?>
            <?php //echo "<li > ".$student['student_id'].": ".$student['lastname']." ".
//$student['firstname'].", ".$student['email']."</li >";?>
            <?php echo "<li> " . $student['student_id'] . ": " . $student['lastname'] . " " .
                $student['firstname'] . ", " . $student['email'] . " - "
                . anchor('internships/delete/' . $student["student_id"], '[del]'); ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>