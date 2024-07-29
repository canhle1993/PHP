<!DOCTYPE html>
<html>
<head>
    <title>Lê Văn Cảnh</title>
</head>
<body>

<?php
    function classify($score) {
        if ($score >= 8) return "Xuất sắc";
        if ($score >= 6.5) return "Khá";
        if ($score >= 5) return "Trung bình";
        return "Yếu";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate input data
        $students = [];
        $errors = [];

    for ($i = 0; $i < 5; $i++) {
        $name = $_POST["name"][$i];
        $score = $_POST["score"][$i];

        if (empty($name)) {
            $errors[] = "Tên học sinh thứ " . ($i + 1) . " không được để trống.";
        }
        if (!is_numeric($score) || $score < 0 || $score > 10) {
            $errors[] = "Điểm của học sinh thứ " . ($i + 1) . " phải là số từ 0 đến 10.";
        }

        $students[] = [
            "name" => $name,
            "score" => (float)$score,
        ];
    }

    if (empty($errors)) {
        // Sort students by score in descending order
        usort($students, function($a, $b) {
            return $b["score"] <=> $a["score"];
        });

        // Calculate class average
        $total_score = array_sum(array_column($students, "score"));
        $average_score = $total_score / count($students);
?>

        <h2>Kết quả xếp loại</h2>
        <table border="1">
            <tr>
                <th>Tên</th>
                <th>Điểm</th>
                <th>Xếp loại</th>
            </tr>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($student["name"]); ?></td>
                    <td><?php echo $student["score"]; ?></td>
                    <td><?php echo classify($student["score"]); ?></td>
                </tr>
            <?php } ?>
        </table>

        <h3>Điểm trung bình của cả lớp: <?php echo number_format($average_score, 2); ?></h3>

        <?php
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

<h2>Nhập thông tin học sinh</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <p>
            Học sinh <?php echo $i + 1; ?>:<br>
            Tên: <input type="text" name="name[]" required><br>
            Điểm: <input type="text" name="score[]" required><br>
        </p>
    <?php } ?>
    <input type="submit" value="Xếp loại">
</form>

</body>
</html>
