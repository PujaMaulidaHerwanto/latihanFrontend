<?php
include "config/connection.php";
include "library/controller.php";

$go = new controller();

$tabel = "login";
@$field = array('username'=>$_POST['user'], 'password'=>$_POST['pass']);
$redirect= 'index.php';

if(isset($_POST['simpan'])){ 
    $go->simpan($con, $tabel, $field, $redirect);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-image: url(foto/background2.jpg);">
    <div class="container">
        <div class="card border-success d-inline-flex p-5 position-absolute top-50 start-50 translate-middle">
            <div class="card-body">
                <h5 class="card-title text-center">Buat Akun</h5>
                    <form method="post">
                        <table align="center" >
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input class="form-control" type="text" name="user" required>
                            </div>
                            <div class="mb-3" >
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input class="form-control" type="text" name="pass" required>
                            </div>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input class="btn btn-outline-primary" type="submit" name="simpan" value="SIMPAN">
                                </td>
                            </tr>
                        </table>

                        <div class="mt-5 text-center">
                            <a href="index.php"> Sudah Punya Akun</a>
                        </div>
                    </form>
                </div>
             </div>
        </div>
    </div>
</body>
</html>