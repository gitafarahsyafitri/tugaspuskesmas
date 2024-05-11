<!DOCTYPE html>
<html>
<head>
    <title>Form Penjualan Makeup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="nomer"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Penjualan Makeup</h1>
        <form action="proses.php" method="post">
            <label for="jenis">Jenis Makeup:</label><br>
            <input type="text" id="jenis" name="jenis"><br>

            <label for="merk">Merk Makeup:</label><br>
            <input type="text" id="merk" name="merk"><br>

            <label for="harga">Harga Makeup:</label><br>
            <input type="text" id="harga" name="harga"><br>

            <label for="nama">Nama Penjual:</label><br>
            <input type="text" id="nama" name="nama"><br>

            <label for="nomer">Nomer Penjual:</label><br>
            <input type="nomer" id="nomer" name="nomer"><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>