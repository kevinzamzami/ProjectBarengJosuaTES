<?php
//letakkan "include" di bawah session start
if (isset($_SESSION['username'])) {
} else if (isset($_SESSION['admin'])) {
} else {
    header("location: index.php");
}
