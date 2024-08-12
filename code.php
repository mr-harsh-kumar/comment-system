<?php
session_start();
include('dbconnect.php');

if (isset($_POST['add_comment'])) {
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);
    $username = $_SESSION['username'];

    $sql = "INSERT INTO `comment system` (username, msg) VALUES ('$username', '$msg')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Retrieve the auto-incremented ID of the inserted comment
        $commentId = mysqli_insert_id($conn);

        // Return the comment ID as JSON
        echo json_encode(['commentId' => $commentId]);
        exit;
    } else {
        echo json_encode(['status' => 'error']);
        exit;
    }
}

if (isset($_POST['load_comment'])) {
    $sql = "SELECT * FROM `comment system`";
    $result = mysqli_query($conn, $sql);

    $comments = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $comments[] = $row;
    }

    // The PHP script echoes the JSON-encoded data, which becomes the response to the AJAX request.
    echo json_encode($comments);
    exit;
}

if (isset($_POST['add_reply'])) {
    $reply = mysqli_real_escape_string($conn, $_POST['reply_msg']);
    $cmt_id = mysqli_real_escape_string($conn, $_POST['cmt_id']);
    $username = $_SESSION['username'];

    $sql = "INSERT INTO `comment-reply system` (comment_id, reply_msg, username) VALUES ('$cmt_id', '$reply', '$username')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}


if (isset($_POST['add_sub_replies'])) {
    $reply = mysqli_real_escape_string($conn, $_POST['reply_msg']);
    $cmt_id = mysqli_real_escape_string($conn, $_POST['cmt_id']);
    $username = $_SESSION['username'];

    $sql = "INSERT INTO `comment-reply system` (comment_id, reply_msg, username) VALUES ('$cmt_id', '$reply', '$username')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
}  


if (isset($_POST['view_reply_true'])) {
    $cmt_id = mysqli_real_escape_string($conn, $_POST['cmt_id']);

    $sql = "SELECT * FROM `comment-reply system` WHERE comment_id = '$cmt_id'";
    $result = mysqli_query($conn, $sql);

    $replies = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $replies[] = $row;
    }

    echo json_encode($replies);
}

if (isset($_POST['view_sub_replies'])) {
    $cmt_id = mysqli_real_escape_string($conn, $_POST['cmt_id']);

    $sql = "SELECT * FROM `comment-reply system` WHERE comment_id = '$cmt_id'";
    $result = mysqli_query($conn, $sql);

    $subReplies = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $subReplies[] = $row;
    }

    echo json_encode($subReplies);
}
?>
