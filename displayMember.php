<!DOCTYPE html>
<html>

<head>
    <title>Display Member</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("https://images6.alphacoders.com/114/1146947.jpg");
        }

        * {
            font-family: 'Montserrat', sans-serif;
            box-sizing: border-box;
        }

        .judul {
            text-align: center;
            margin-top: 30px;
            color: white;
            font-family: 'Montserrat', sans-serif;
        }

        tr {
            font-weight: bold;
            background-color: grey;
            color: white;
        }

        table{
            text-align: center;
        }

        td > a{
            text-decoration: 0;
            background-color: black;
            color: whitesmoke;
            border-radius: 4px;
            padding: 4px;
        }

        .back{
            background-color: grey;
            color: whitesmoke;
            border-color: white;
            font-weight: bold;
            margin-left: 20px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <h1 class="judul">Member of NF Fanpage</h1>
    <br>
    <div class="card-body">
        <div class="table responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Religion</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('koneksi.php');

                    $qry1 = mysqli_query($koneksi, "select *from member");
                    while ($row = mysqli_fetch_array($qry1)) {
                    ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['notelp']; ?></td>
                            <td><?php echo $row['jk']; ?></td>
                            <td><?php echo $row['agama']; ?></td>
                            <td>
                                <a class="edit-form" href="editForm.php?id=<?php echo $row['id']; ?>">Edit</a>
                                <a class="delete" href="hapus.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>

    <a href="beranda.html">
    <button class="back">Back to Homepage</button>
    </a>


</body>

</html>