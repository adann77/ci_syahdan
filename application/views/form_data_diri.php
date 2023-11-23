<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 0;
            background: #4caf50;
            color: #ffffff;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Data Diri</h2>

    <form action="<?php echo base_url('FormController/simpan_data');?>" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda"><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" placeholder="Masukkan Alamat Anda"></textarea><br>

        <label for="umur">Umur:</label><br>
        <input type="text" id="umur" name="umur" placeholder="Masukkan Umur Anda"><br>

        <input type="submit" value="Simpan Data">
    </form>
</div>

</body>
</html>
