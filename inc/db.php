<?php

$conn = mysqli_connect('localhost', 'root2', '', 'win', '4306');

if (!$conn){

    echo 'Error: ' . mysqli_connect_error();
}