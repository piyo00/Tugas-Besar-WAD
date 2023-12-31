<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="margin: 100px">
<header>
    <img class="logo" src="assets\images\healthub-logo-cropped-30.png" alt="logo">
</header>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Kategori Obat</th>
                <th>Harga</th>
            </tr>
        </thead>

        <tbody>
            <?php

            $server = "localhost";
            $user = "root";
            $password = "";
            $db = "swiss_collection";

            $conn = mysqli_connect($server, $user, $password, $db);

            if (!$conn) {
                die("Connection Failed:" . mysqli_connect_error());
            }

            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die("Error: " . $sql . "<br>" . mysqli_error($conn));
            }

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['product_id'] . "</td>
                        <td><img src='assets/images/" . $row['product_image'] . "' alt='Product Image'></td>
                        <td>" . $row['product_name'] . "</td>
                        <td>" . $row['product_desc'] . "</td>
                        <td>" . $row['category_id'] . "</td>
                        <td>" . $row['price'] . "</td>
                        <td>
                            <a class=\"btn btn-primary btn-sm\" href=\"update\">Add to cart</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
        </tbody>
    </table>
</body>
</html>