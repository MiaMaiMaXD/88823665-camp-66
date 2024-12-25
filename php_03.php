<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
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
        h1, h2 {
            color: #343a40;
        }
        table {
            margin-top: 20px;
            background: #fff;
        }
        th {
            background-color: #198754;
            color: white;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">แสดงตารางสูตรคูณ</h1>
        <div class="form-container">
            <form method="post" action="" class="mb-4">
                <div class="mb-3">
                    <label for="number" class="form-label">กรอกแม่สูตรคูณ</label>
                    <input type="number" id="number" name="number" class="form-control" placeholder="เช่น 1, 2, 3" required>
                </div>
                <button type="submit" class="btn btn-success w-100">แสดงผลลัพธ์</button>
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST["number"]);
            echo "<div class='mt-4'>";
            echo "<h2 class='text-center'>แม่สูตรคูณของ $number</h2>";
            echo "<table class='table table-bordered text-center'>";
            echo "<thead><tr>
                    <th>ลำดับ</th>
                    <th>การคูณ</th>
                    <th>ผลลัพธ์</th>
                </tr></thead>";
            echo "<tbody>";
            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$number × $i</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
