<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $r = $_GET['r'];
    if (is_numeric($r)) {
        $rumus = "L = π × r²";
        $hitung = "L = π × $r² = " . round(pi() * pow($r, 2), 2);
        $luas = round(pi() * pow($r, 2), 2);
        $result = "
            <p><b>Rumus:</b> $rumus</p>
            <p><b>Perhitungan:</b> L = π × ($r × $r) = $luas</p>
            <p><b>Jadi luas lingkaran dengan jari-jari $r adalah $luas</b></p>
        ";
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
            font-family: "Segoe UI", sans-serif;
            background-color: #f5e6d3; /* coklat muda */
            padding: 40px;
            color: #3e2f1c;
        }
        h2 {
            color: #5a3d2b;
            text-align: center;
        }
        form {
            background: #fffaf3;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(90,61,43,0.3);
            max-width: 450px;
            margin: auto;
        }
        label {
            font-weight: bold;
        }
        input[type="number"] {
            width: 95%;
            padding: 8px;
            margin: 10px 0 18px;
            border: 1px solid #bfa48a;
            border-radius: 8px;
            background: #fff;
        }
        button {
            background-color: #8b5e34;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
        }
        button:hover {
            background-color: #6e4727;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #fff5e6;
            border-left: 6px solid #8b5e34;
            border-radius: 10px;
            line-height: 1.6;
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
