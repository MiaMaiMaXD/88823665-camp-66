<!DOCTYPE html>
<html lang="th">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ตารางสูตรคูณ</title>
</head>
<body>
    <div class="container mt-5">
    <h1 class = "col h2 text-center ">แสดงตารางสูตรคูณ</h1>
        <form method="post" action="https://localhost/88823665-camp-66/php_03.php" class="mb-4">
            <div class="row">
                <div class="col-center">
                    <label for="number" class="form-label">กรอกแม่สูตรคูณ</label>
                    <input type="number" id="number" name="number" class="form-control" placeholder="เช่น 1 ,2 ,3" required>
                    <button type="submit" class="btn btn-success d-block mx-auto mt-2">แสดงผลลัพธ์</button>
                </div>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST["number"]);
            echo "<h2 class='text-center'>แม่สูตรคูณของ $number</h2>";
            echo "<table class='table table-bordered '>";
            echo "<thead><tr>
                         <th>ลำดับ</th>
                         <th>การคูณ</th>
                         <th>ผลลัพธ์</th> </tr></thead>";
            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$number × $i</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
