<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> materi pemrograman PHP </title>
</head>
<body>
    <h1>Materi Pemrograman PHP</h1>
    <form action=" " method="post">
        <label> Pilih Materi : </label>
        <select name="materi">
            <option value="1">[1] Penggunaan IF</option>
            <option value="2">[2] Penggunaan SWITCH CASE</option>
            <option value="3">[3] Penggunaan LOOPING</option>
            <option value="4">[4] Penggunaan ARRAY</option>
        </select>
        <br><br>
        <input type="submit" value="Kirim">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $materi = $_POST["materi"];
        switch ($materi) {
            case 1:
                echo "<h2> Anda memilih: [1] Penggunaan IF </h2>";
                break;
            case 2:
                echo "<h2> Anda memilih: [2] Penggunaan SWITCH CASE </h2>";
                break;
            case 3:
                echo "<h2> Anda memilih: [3] Penggunaan LOOPING </h2>";
                break;
            case 4:
                echo "<h2> Anda memilih: [4] Penggunaan ARRAY </h2>";
                break;
            default:
                echo "<h2> Anda memilih salah satu opsi yang tidak valid. </h2>";
        }
    }
    ?>
</body>
</html>