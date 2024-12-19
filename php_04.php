<!DOCTYPE html>
<html lang="th">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ตารางเลขคู่-คี่</title>
</head>
<body>
    <div class="container mt-5">
    <h1 class = "col h2 text-center ">ตรวจสอบเลขคู่/คี่</h1>
        <form method="post" action="https://localhost/88823665-camp-66/php_04.php" class="mb-4">
            <div class="row">
            <div class="mb-3">
                <label for="start" class="form-label">กรอกเลขเริ่มต้น</label>
                <input type="number" name="start" id="start" class="form-control" required>
                <label for="end" class="form-label">กรอกเลขสิ้นสุด</label>
                <input type="number" name="end" id="end" class="form-control" required>
                <button type="submit" class="btn btn-success d-block mx-auto mt-2">แสดงผลลัพธ์</button>
            </div>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $start = (int)$_POST['start'];
            $end = (int)$_POST['end'];
            
            echo "<h3 class='text-center mt-4'>ผลลัพธ์จาก $start ถึง $end</h3>";
            echo "<div class='text-center'>";
            for ($i = $start; $i <= $end; $i++) {
                if ($i % 2 == 0) {
                    echo "<p>$i เป็นเลขคู่</p>";
                } else {
                    echo "<p>$i เป็นเลขคี่</p>";
                }
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
            