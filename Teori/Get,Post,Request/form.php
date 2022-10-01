<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">    
    <title>Document</title>
</head>

<body>
    <form action="form_proses.php" method="POST">

        <?php include 'form_date.php'; ?>

        <div class="mb-3">
            <br><label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" name=email id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name=password id="exampleInputPassword1">
        </div>

        <select class="form-select" aria-label="Default select example" name="pilihan">
            <option selected>Kelas</option>
            <option value="TI2A">TI2A</option>
            <option value="TI2B">TI2B</option>
            <option value="TI2C">TI2C</option>
        </select>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="status_mhs" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Mahasiswa Aktif</label>
        </div>

        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</body>

</html>