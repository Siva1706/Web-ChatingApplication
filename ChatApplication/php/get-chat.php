<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "config.php";
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $output = "";

    $sql = "SELECT * FROM messages 
            LEFT JOIN users ON users.unique_id = messages.incoming_msg_id
            WHERE (outgoing_msg_id = '{$outgoing_id}' AND incoming_msg_id = '{$incoming_id}') 
            OR (outgoing_msg_id = '{$incoming_id}' AND incoming_msg_id = '{$outgoing_id}') ORDER By message_id ";

    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($rows = mysqli_fetch_assoc($query)) {
            if ($rows['outgoing_msg_id'] === $outgoing_id) { //if this is equal to than he is a msg sender 
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>' . $rows['msg'] . '</p>
                                </div>
                            </div>';
            } else {
                // he is a msg receiver
                $output .= '<div class="chat incoming">
                                <img src="php/images/'.$rows['image'].'" alt="" />
                                <div class="details">
                                    <p>' . $rows['msg'] . '</p>
                                </div>
                            </div>';
            }
        }
        echo $output;
    }
} else {
    header("../login.php");
}
