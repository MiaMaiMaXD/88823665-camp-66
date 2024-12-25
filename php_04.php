<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางเลขคู่-คี่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1, h3 {
            color: #343a40;
        }
        .even {
            color: #198754; /* สีเขียว */
            font-weight: bold;
        }
        .odd {
            color: #dc3545; /* สีแดง */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">ตรวจสอบเลขคู่/คี่</h1>
        <div class="form-container">
            <form method="post" action="" class="mb-4">
                <div class="mb-3">
                    <label for="start" class="form-label">กรอกเลขเริ่มต้น</label>
                    <input type="number" name="start" id="start" class="form-control" placeholder="เช่น 1" required>
                </div>
                <div class="mb-3">
                    <label for="end" class="form-label">กรอกเลขสิ้นสุด</label>
                    <input type="number" name="end" id="end" class="form-control" placeholder="เช่น 100" required>
                </div>
                <button type="submit" class="btn btn-success w-100">แสดงผลลัพธ์</button>
            </form>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $start = (int)$_POST['start'];
            $end = (int)$_POST['end'];
            
            echo "<div class='mt-4'>";
            echo "<h3 class='text-center'>ผลลัพธ์จาก $start ถึง $end</h3>";
            echo "<div class='list-group'>";
            for ($i = $start; $i <= $end; $i++) {
                if ($i % 2 == 0) {
                    echo "<div class='list-group-item even'>$i เป็นเลขคู่</div>";
                } else {
                    echo "<div class='list-group-item odd'>$i เป็นเลขคี่</div>";
                }
            }
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
