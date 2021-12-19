<?php
session_start();
require("../config.php");

    if ($_POST) {
    $PostUsername = $conn->real_escape_string(filter(trim($_POST['username'])));

    $cek_username = $conn->query("SELECT * FROM users WHERE username = '$PostUsername'");
    $user = $cek_username->fetch_assoc();
    
    $PostEmail = $conn->real_escape_string(filter(trim($_POST['email'])));

    $cek_email = $conn->query("SELECT * FROM users WHERE email = '$PostEmail'");
    $email = $cek_email->fetch_assoc();
    
    if (!$PostUsername || !$PostEmail) {
            $_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Harap Mengisi pada semua form ');
    } else if ($cek_username->num_rows == 0) {
            $_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Username <strong>'.$username.' </strong> Tidak Di Temukan'); 
                      
    } else if ($cek_email->num_rows == 0) {
            $_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Email <strong>'.$email.' </strong> Tidak Di Temukan'); 
    } else {
    
    $acakin_password = acak(10).acak_nomor(10);
    $hash_pass = password_hash($acakin_password, PASSWORD_DEFAULT);
    $tujuan = $user['email'];
    $pesannya = "
                 <center><p>Hai ".$user['username']."</p></center>
                 <p>Anda telah melakukan permohonan reset password untuk akun ".$user['email']."</p>     
                 <p>Untuk melakukan reset ulang password anda,
                 <br />silahkan salin KODE Unik dibawah ini,
                 <br /><br /><b>$acakin_password</b><br /> 
                 <br />untuk password sementara dan anda bisa mengubah password di website.
                 <br /> ".'<a href="https://grace-panel.com/auth/login" class="btn-loading">'." https://grace-panel.com/auth/login </a>
                 </p>
                 <br />
                 <br />                                 
                ";
    $subjek = "Reset Password";
    $header = "From:Grace-Panel cs@grace-panel.com \r\n";
    $header .= "Cc:cs@grace-panel.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $send = mail ($tujuan, $subjek, $pesannya, $header);
    if ($conn->query("UPDATE users SET password = '$hash_pass', random_kode = '$acakin_password' WHERE username = '".$user['username']."'") == true) {
            $_SESSION['hasil'] = array('alert' => 'success', 'judul' => 'Reset Password Berhasil!', 'pesan' => 'Silahkan Cek Email Anda Untuk Mengetahui Password Baru Anda');
        } else {
            $_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Gagal');    
            }
        }
    }
require '../lib/header.php';
?>  
                <div class="row">
                    <div class="offset-md-2 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="panel-title text-uppercase"><i class="mdi mdi-account-key"></i>    Lupa Password</h4>
                                <br />
                                <form class="form-horizontal" role="form" method="POST">
                                    <input type="hidden" name="csrf_token" value="<?php echo $config['csrf_token'] ?>">
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-danger btn-block waves-effect waves-light"> Reset Password</button>
                                            
                                        </div>                                     
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->       
<?php
require '../lib/footer.php';
?>