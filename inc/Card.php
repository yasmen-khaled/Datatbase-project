<?php

// التحقق من اتصال قاعدة البيانات
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// التحقق من وجود بيانات البحث المرسلة من نموذج البحث
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تحديد مصطلح البحث وتجنيب الأخطاء المحتملة
    $searchTerm = mysqli_real_escape_string($conn, $_POST['search']);

    // تحديد مرشح البحث حسب نوع الجريمة إذا تم تحديدها
    $crimeFilter = mysqli_real_escape_string($conn, $_POST['crime']);

    // تكوين الاستعلام SQL لاسترداد السجناء المطابقين
    $sql = "SELECT * FROM prisoners WHERE (first_name LIKE '%$searchTerm%' OR last_name LIKE '%$searchTerm%' OR prisoner_number='$searchTerm')";

    if (!empty($crimeFilter)) {
        $sql .= " AND crime = '$crimeFilter'";
    }

    // إرسال الاستعلام SQL واسترداد البيانات المطابقة
    $result = mysqli_query($conn, $sql);

    // التحقق من وجود بيانات مطابقة
    if (mysqli_num_rows($result) > 0) {
        // استرداد البيانات المطابقة كمصفوفة
        $prisoners = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // عرض جدول البيانات
        echo '<table>';
        echo '<tr><th>First Name</th><th>Last Name</th><th>Prisoner Number</th><th>Crime</th><th>Sentence Duration</th></tr>';

        

        foreach ($prisoners as $prisoner) {
            // عرض صف بيانات السجين
            echo '<div class="popup">';
            echo '<td>' . htmlspecialchars($prisoner['first_name']) . '</td>';
            echo '<td>' . htmlspecialchars($prisoner['last_name']) . '</td>';
            echo '<td><a href="prisoner.php?prisoner_number=' . htmlspecialchars($prisoner['prisoner_number']) . '">' . htmlspecialchars($prisoner['prisoner_number']) . '</a></td>';
            echo '<td>' . htmlspecialchars($prisoner['crime']) . '</td>';
            echo '<td>' . htmlspecialchars($prisoner['sentence_duration']) . '</td>';
            echo '</tr>';
        }

        echo '</table>';




    } else {
        // إذا لم يتم العثور على أي نتائج، يتم عرض رسالة للمستخدم
        echo 'No results found.';
    }

    // تحرير النتيجة وإغلاق الاتصال
    mysqli_free_result($result);
    mysqli_close($conn);
}