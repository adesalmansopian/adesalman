<?php
//logic
//cek apakah tombol submit udah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek username atau password
    if ($_POST["username"] == "ades" && $_POST["password"] == "123") {
        //jika benar masuk ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        //jika salah tampilkan pesan kesalahan
        $error = true;
    }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>halaman login admin</h1>
    <?php if (isset($error)) : ?>
        <p style="color : red; font-style: italic">username dan password salah</p>
    <?php endif ?>
    <form method="post">
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">masuk</button>
        </li>
    </form>
</body>

</html>