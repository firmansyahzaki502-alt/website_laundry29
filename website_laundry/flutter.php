<?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aksi = $_POST['aksi'] ?? '';

    if ($aksi === 'tambah') {
        $_SESSION['counter']++;
    } elseif ($aksi === 'kurang' && $_SESSION['counter'] > 0) {
        $_SESSION['counter']--;
    } elseif ($aksi === 'reset') {
        $_SESSION['counter'] = 0;
    }

    // Redirect supaya refresh halaman tidak mengulang aksi
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f0f4f8;
        }
        .card {
            background: #fff;
            padding: 32px 48px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
        }
        .angka { font-size: 64px; margin: 16px 0; }
        button {
            padding: 10px 20px;
            margin: 0 4px;
            border: none;
            border-radius: 6px;
            background: #2563eb;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Counter App</h2>
        <p>Jumlah hitungan:</p>
        <div class="angka"><?= $_SESSION['counter'] ?></div>

        <form method="post">
            <button type="submit" name="aksi" value="kurang">Kurang</button>
            <button type="submit" name="aksi" value="tambah">Tambah</button>
            <button type="submit" name="aksi" value="reset">Reset</button>
        </form>
    </div>
</body>
</html>