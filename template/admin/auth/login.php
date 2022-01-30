<?php require_once "../_config/config.php"; 
if (isset($_SESSION['admin'])) {
    header("location: ../dashboard");
    } else { 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | RTLH</title>
        <!-- ikon -->
        <link rel="icon" href="../_assets/Bantul.png" type="image/gif" sizes="16x16">
        <link href="<?=base_url('admin/_assets/dist/css/styles.css')?>" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-lg-12 text-center mt-5">
                                <img class="rounded-circle img-thumbnail" src="../_assets/Bantul.png" alt="" width="100" height="100">
                            </div>
                            <div class="col-lg-8 offset-lg-2">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">
                                    <div class="card-header text-center bg-transparent">                                   
                                        <h3>APLIKASI BANTUAN RTLH</h3>

                                    </div>
                                    <div class="card-body">
                                        <form method="post">
                                              <div class="form-group row">
                                                <div class="col-sm-2"></div>
                                                <label for="staticuser_nama" class="col-sm-2 col-form-label">Username :</label>
                                                <div class="col-sm-6">
                                                  <input type="text" name="username" class="form-control" required autofocus>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <div class="col-sm-2"></div>
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Password :</label>
                                                <div class="col-sm-6">
                                                  <input type="password" name="password" class="form-control" id="inputPassword" required>
                                                </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-4"></div>

                                                  <div class="col-md-6">
                                                    <div class="form-group d-flex align-items-center justify-content-center mt-3 mb-0">
                                                        <button class="btn btn-lg btn-primary btn-block" name="login">Login</button>
                                                    </div>
                                                    </br>
                                                        
                                                  </div>
                                              </div>
                                              
                                        </form>
                                        
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);
    
    $sql = "SELECT * FROM tb_user WHERE username ='$username' AND password ='$password'";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
    $yangcocok = mysqli_num_rows($result);
    if ($yangcocok > 0) {
            $_SESSION['admin'] = $data;
            echo    "<script>
                alert('Anda Berhasil Login');
                location='../dashboard';
            </script>";
    }else { ?>
    </br>
    <div class="alert alert-danger alert-dismissable" role="alert">
        <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <strong>Login gagal</strong> user_nama atau Password salah. 
    </div>
    <?php
    }
}
?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-transparent mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-center small">
                            <!-- <div class="text-dark"><strong>Copyright &copy; 2021</strong></div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url('admin/_assets/dist/js/scripts.js')?>"></script>
    </body>
</html>

<?php 
}
?>