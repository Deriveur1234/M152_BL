<?php
include_once '../function.php';

if (isset($_FILES)) {
    upload_file($_FILES);
}
