<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $a = $_POST['a'];
    $t = $_POST['t'];
    if (is_numeric($a) && is_numeric($t)) {
        $luas = 0.5 * $a * $t;
        $result = "Jadi luas segitiga dengan alas $a dan tinggi $t adalah <b>$luas</b>";
    } else {
        $result = "Masukkan angka yang valid!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rumus Luas Segitiga</title>
    <style>
        body {font-family: Arial; background:#f9f9f9; padding:40px;}
        form {background:#fff;padding:20px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,0.1);max-width:400px;}
        form input[type="number"]{width:95%;padding:8px;margin-bottom:14px;border:1px solid #ccc;border-radius:6px;}
        button{background:#2980b9;color:white;padding:10px 18px;border:none;border-radius:6px;cursor:pointer;}
        button:hover{background:#1f6391;}
        .result{margin-top:15px;padding:12px;background:#ecf6ff;border-left:4px solid #2980b9;border-radius:6px;}
    </style>
</head>
<body>
    <h2>Hitung Luas Segitiga</h2>
    <form method="get">
        <label>Masukkan alas:</label>
        <input type="number" step="any" name="a" required>
        <label>Masukkan tinggi:</label>
        <input type="number" step="any" name="t" required>
        <button type="submit">Hitung</button>
    </form>
    <?php if ($result) echo "<div class='result'>$result</div>"; ?>
</body>
</html>
