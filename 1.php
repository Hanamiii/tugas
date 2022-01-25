<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>    
<body>
    <h1>Selamat Datang Di Yogyakarta</h1>
    <form action="2.php" method="post">
        <h3>Pilih Destinasi :</h3>
        <table>
            <tr>
                <td>1. Bukit Bintang</td>
                <td>:</td>
                <td>Rp. 10.000</td>
            </tr>
            <tr>
                <td>2. Pantai Sadranan</td>
                <td>:</td>
                <td>Rp. 15.000</td>
            </tr>
            <tr>
                <td>3. Candi Borobudur</td>
                <td>:</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>4. Candi Prambanan</td>
                <td>:</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>5. Keraton Yogyakarta</td>
                <td>:</td>
                <td>Rp. 5.000</td>
            </tr>
            <tr>
                <td>6. Malioboro</td>
                <td>:</td>
                <td>Rp. 5.000</td>
            </tr>
            <tr>
                <td>7. Pendopo Lawas</td>
                <td>&raquo;</td>
                <td>Cafe</td>
            </tr>
            <tr>
                <td>8. Goa Pindul</td>
                <td>:</td>
                <td>Rp. 100.000</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>
                    <select name="destinasi">
                        <option value="1">Bukit Bintang</option>
                        <option value="2">Pantai Sadranan</option>
                        <option value="3">Candi Borobudur</option>
                        <option value="4">Candi Prambanan</option>
                        <option value="5">Keraton Yogyakarta</option>
                        <option value="6">Malioboro</option>
                        <option value="7">Pendopo Lawas</option>
                        <option value="8">Goa Pindul</option>
                    </select>
                </td>
                <td></td>
                <td><button type="submit" name="">Kirim</button></td>
            </tr>
        </table>
    </form>
</body>
