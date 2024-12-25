<?php
/**
 * แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุในตัวแปร
 */
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ตารางสูตรคูณ</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body {
        background-color:rgb(254, 186, 255);
    }
    .multiplication-table {
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #343a40;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }
    .result {
        font-size: 1.2rem;
        margin-bottom: 5px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="multiplication-table">
            <?php
            $my_var = 2; // ตัวแปรสำหรับแม่สูตรคูณ
            ?>
            <h1>สูตรคูณแม่ <?php echo $my_var; ?></h1>
            <div class="row">
                <div class="col text-center">
                    <?php
                    for ($x = 1; $x <= 12; $x++) {
                        echo "<div class='result'>" . $my_var . " x " . $x . " = " . ($my_var * $x) . "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
