<?php
//letakkan "include" di bawah session start
if (isset($_SESSION['username'])) {
} else {
    header("location: index.php");
}
