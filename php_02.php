<?php
/**
 * แสดงข้อมูลตัวเลข 1 - 100 ว่าเป็นเลขคู่ หรือ เลขคี่
 */
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ตัวเลขคู่และคี่</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body {
        background-color:rgb(254, 186, 255);
        }
    .number-box {
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #343a40;
        font-weight: bold;
        margin-bottom: 20px;
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
    <div class="container">
        <div class="number-box">
            <h1 class="text-center">ตัวเลข 1 - 100</h1>
            <div class="row">
                <div class="col text-center">
                    <?php
                    for ($i = 1; $i <= 100; $i++) {
                        if ($i % 2 == 0) {
                            echo "<div class='even'>$i เป็นเลขคู่</div>";
                        } else {
                            echo "<div class='odd'>$i เป็นเลขคี่</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
