<?php

// تحديد معلومات قاعدة البيانات
$servername = "localhost:4306";
$username = "root2";
$password = "";
$dbname= "nsadb";



// إنشاء اتصال بقاعدة البيانات
$conn = mysqli_connect($servername, $username, $password, $dbname);
