<?php

if (isset($_SESSION['error_message'])) {
    echo '<p class="text-danger">' . $_SESSION['error_message'] . '</p>';
    unset($_SESSION['error_message']); // ลบข้อความหลังแสดง
}
?>