<?php
const SERVER = "localhost";
const DB = "magaz";
const LOGIN = "gb";
const PASSWORD ="Gfhjkmlkzj,extybz";

$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,DB);
if (mysqli_connect_errno()) {
    die("Connect failed: %s\n" . mysqli_connect_error());
}
