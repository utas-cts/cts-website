<?php
require 'db_connect.php';
if (!isset($_POST['submit'])) {
    header("Location: ./member_signup.php");
    die();
}
if ($_POST['photograph_allowed'] === 'on') {
    $photo_allowed = 1;
} else {
    $photo_allowed = 0;
}

if ($_POST['email_allowed'] === 'on') {
    $email_allowed = 1;
} else {
    $email_allowed = 0;
}

$date = date('Y-m-d H:i:s');

$query = $mysqli->prepare('SELECT ID from members where first_name=? and last_name=? and 
    student_id=? and member_type=?');
$query->bind_param(
    'ssis',
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['id'],
    $_POST['member_type']
);
$query->execute();

$result = $query->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['ID'];
} else {
    $query = $mysqli->prepare(
        'INSERT INTO members (first_name, last_name, student_id, member_type)
        values (?, ?, ?, ?)'
    );
    $query->bind_param(
        'ssis',
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['id'],
        $_POST['member_type']
    );
    $query->execute();

    $query = $mysqli->prepare('SELECT ID from members where first_name=? and last_name=? and 
        student_id=? and member_type=?');
    $query->bind_param(
        'ssis',
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['id'],
        $_POST['member_type']
    );
    $query->execute();

    $result = $query->get_result();
    $row = $result->fetch_assoc();
    $id = $row['ID'];
}
$query = $mysqli->prepare(
    'INSERT INTO memberships (member, email, signup_date, photo_allowed,
    email_allowed) values (?,?,?,?,?)'
);
$query->bind_param(
    'issii',
    $id,
    $_POST['email'],
    $date,
    $photo_allowed,
    $email_allowed
);
$query->execute();
header("Location: ./index.php");
