<html>

<head>
    <title>Edit Data</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        body {
            background-image: url('https://images6.alphacoders.com/114/1146947.jpg');
            width: 100%;
            height: 100pv;
            background-size: cover;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
        }

    </style>
</head>

<body>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM member where id = '$id'";
    $result = mysqli_query($koneksi, $query);
    ?>
    <form action="prosesEdit.php" method="GET">
        <table>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td> Id: </td>
                    <td> <input type="number" name="id" value="<?php echo $row['id']; ?>" readonly> </td>
                </tr>
                <tr>
                    <td> Nama: </td>
                    <td> <input type="text" name="nama" value="<?php echo $row['nama']; ?>"> </td>
                </tr>
                <tr>
                    <td> Alamat: </td>
                    <td> <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td> Nomor Telepon: </td>
                    <td> <input type="tel" name="notelp" value="<?php echo $row['notelp']; ?>"></td>
                </tr>
                <tr>
                    <td> Jenis Kelamin: </td>
                    <?php
                    if ($row['jk'] == 'Pria') {
                    ?>
                        <td> <label class="container"> Laki-laki
                                <input id="jk1" type="radio" name="jk" value="Pria" checked>
                                <span class="checkmark"></span>
                            </label>

                            <label class="container"> Perempuan
                                <input id="jk2" type="radio" name="jk" value="Perempuan">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    <?php
                    } else {
                    ?>
                        <td> <label class="container"> Laki-laki
                                <input id="jk1" type="radio" name="jk" value="Pria">
                                <span class="checkmark"></span>
                            </label>

                            <label class="container"> Perempuan
                                <input id="jk2" type="radio" name="jk" value="Perempuan" checked>
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    <?php }
                    ?>
                </tr>
                <tr>
                    <td>Agama: </td>
                    <td><select id="agama1" name="agama" required>
                            <option selected>Pilih agama terbaru</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="konghucu">Konghucu</option>
                        </select></td>
                </tr>
                <br>
                <tr>
                    <td>
                    <input style="text-align: center;" type="submit" name="simpan" value="Simpan"></td>
                    </td>
                </tr>

            <?php
            }
            ?>
    </form>
    </table>
</body>

</html>