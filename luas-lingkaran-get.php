<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $r = $_GET['r'];
    if (is_numeric($r)) {
        $luas = pi() * pow($r, 2);
        $result = "Jadi luas lingkaran dengan jari-jari $r adalah <b>$luas</b>";
    } else {
        $result = "Masukkan angka yang valid!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rumus Luas Lingkaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
            color: #333;
        }
        h2 { color: #2c3e50; }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 400px;
        }
        form input[type="number"] {
            width: 95%;
            padding: 8px;
            margin-bottom: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            background-color: #2980b9;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover { background-color: #1f6391; }
        .result {
            margin-top: 15px;
            padding: 12px;
            background: #ecf6ff;
            border-left: 4px solid #2980b9;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <h2>Hitung Luas Lingkaran</h2>
    <form method="get">
        <label>Masukkan jari-jari (r):</label>
        <input type="number" step="any" name="r" required>
        <button type="submit">Hitung</button>
    </form>
    <?php if ($result) echo "<div class='result'>$result</div>"; ?>
</body>
</html>
