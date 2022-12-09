<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("https://images5.alphacoders.com/114/1146945.jpg");
        }

        * {
            box-sizing: border-box;
            font-family: Montserrat;
            font-family: 'Montserrat', sans-serif;
        }

        .register {
            text-align: center;
            color: whitesmoke;
        }

        .input-container {
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
            opacity: 90%;
        }

        .input-container-religion{
            background-color: black;
            padding: 10px;
            margin: 15px ;
            text-align: center;
            font-weight: bold;
            border-radius: 10px;
        }

        .form-select{
            width: 100%;
            padding: 10px;
            outline: none;
            opacity: 70%;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
            
        }
    </style>
</head>

<body>
    <form style="max-height: 500px; margin: auto; width: 500px" method="post" action="formRegister.php">
        <h2 class="register">Register</h2>
        <div class="input-container">
            <input class="input-field" type="number" name="id" placeholder="Input your ID">
        </div>
        <div class="input-container">
            <input class="input-field" type="text" name="nama" placeholder="Input your name">
        </div>
        <div class="input-container">
            <input class="input-field" type="text" name="alamat" placeholder="Input your address">
        </div>
        <div class="input-container">
            <input class="input-field" type="number" name="notelp" placeholder="Input your phone number">
        </div>
        <div class="input-container-religion">
            <label style="color: white;">Input your gender: </label>
            <label style="color: white;" for="jk">Male</label>
            <input type="radio" name="jk" value="Male">
            <label style="color: white;" for="jk">Female</label>
            <input type="radio" name="jk" value="Female">
        </div>
        <div class="input-container">
            <select class="form-select" name="agama" id="floatingSelect">
                <option selected>Select your religion</option>
                <option value="Islam">Islam</option>
                <option value="Catholic">Catholic</option>
                <option value="Christian">Christian</option>
                <option value="Buddhism">Buddhaism</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>

        <input type="submit" class="input-field" value="Input" align="middle">
    </form>
</body>

</html>