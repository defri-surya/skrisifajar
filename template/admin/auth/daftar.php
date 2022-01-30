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
        <title>Daftar | PPDM</title>
        <!-- ikon -->
        <link rel="icon" href="../_assets/bener.jpg" type="image/gif" sizes="16x16">
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
                                <img class="rounded-circle img-thumbnail" src="../_assets/bener.jpg" alt="" width="100" height="100">
                            </div>
                            <div class="col-lg-8 offset-lg-2">
                                <div class="card shadow-lg border-0 rounded-lg mt-4">
                                    <div class="card-header text-center bg-transparent">                                   
                                        <h3>Pelayanan Pertanahan Desa Mandiri</h3>

                                    </div>
                                    <div class="card-body">
                                        <form method="post">
                                              <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <label for="staticuser_nama" class="col-sm-3 col-form-label">Nama :</label>
                                                <div class="col-sm-6">
                                                  <input type="text" name="nama" class="form-control" required autofocus>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <label for="staticuser_nama" class="col-sm-3 col-form-label">User :</label>
                                                <div class="col-sm-6">
                                                  <input type="text" name="user_nama" class="form-control" required>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <label for="inputPassword" class="col-sm-3 col-form-label">Password :</label>
                                                <div class="col-sm-6">
                                                  <input type="password" name="password" class="form-control" id="inputPassword" required>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <label for="inputPassword" class="col-sm-3 col-form-label">Desa :</label>
                                                <div class="col-sm-6">
                                                    <select name="id_desa" class="form-control" required>
                                                        <?php 
                                                            $datadesa = array();
                                                            $sql = mysqli_query($koneksi, "SELECT * FROM desa");
                                                            while ($desa = mysqli_fetch_assoc($sql)) {
                                                                $datadesa[] = $desa;
                                                            }

                                                        ?>
                                                        <option disabled selected value="">-Pilih Desa-</option>
                                                        <?php foreach ($datadesa as $key => $value):?>
                                                        <option value="<?= $value["id_desa"] ?>"><?= $value["nama_desa"] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <div class="col-sm-1"></div>
                                                <label for="inputPassword" class="col-sm-3 col-form-label">Nama Proyek :</label>
                                                <div class="col-sm-6">
                                                    <select name="id_proyek" class="form-control" required>
                                                        <?php 
                                                            $dataproyek = array();
                                                            $sql = mysqli_query($koneksi, "SELECT * FROM proyek");
                                                            while ($proyek = mysqli_fetch_assoc($sql)) {
                                                                $dataproyek[] = $proyek;
                                                            }
                                                        ?>
                                                        <option disabled selected value="">-Pilih Proyek-</option>
                                                        <?php foreach ($dataproyek as $key => $value):?>
                                                        <option value="<?= $value["id_proyek"] ?>"><?= $value["nama_proyek"] ?> / <?= $value["tahun_proyek"] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-md-4"></div>

                                                  <div class="col-md-6">
                                                    <div class="form-group d-flex align-items-center justify-content-center mt-3 mb-0">
                                                        <button class="btn btn-lg btn-success btn-block" name="daftar">Daftar</button>
                                                    </div>
                                                    </br>
                                                        <p class="text-center">Sudah memiliki akun? <a href="login.php" class="text-primary">Login</a> sekarang.</p>
                                                  </div>
                                              </div>
                                              <div class="row">
                                        </form>
                    <?php
                        if (isset($_POST["daftar"])) {
                            $nama = $_POST["nama"];
                            $user = $_POST["user_nama"];
                            $password = $_POST["password"];
                            $id_desa = $_POST["id_desa"];
                            $id_proyek = $_POST["id_proyek"];

                            // validasi usernama

                            $sql = mysqli_query($koneksi, "SELECT * FROM user
                                WHERE user_nama = '$user'");
                            
                            $cocok = mysqli_num_rows($sql);
                            if ($cocok == 1) {
                                echo "<script>alert('Anda Gagal Mendaftar User Nama telah digunakan');</script>";
                                echo "<script>location='daftar.php';</script>";
                            } else {
                                
                                $sql = mysqli_query($koneksi, "INSERT user
                                (nama_user,user_nama,password,id_desa,id_level,id_proyek)
                                VALUES('$nama','$user','$password','$id_desa','4','$id_proyek')");

                                echo "<script>alert('Anda Berhasil Mendaftar, silahkan login');</script>";
                                echo "<script>location='login.php';</script>";
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