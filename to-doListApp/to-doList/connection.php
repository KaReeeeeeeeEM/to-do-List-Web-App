<?php
$con = new mysqli("localhost","root","","youMentionIt");

if(!$con){
    echo "There is an error in establishing connection".mysqli_connect_err();
}