<?php
session_start();
require("../config.php");
if (isset($_SESSION['user'])) {
    header("Location: ".$config['web']['url']);
} else {
    if (isset($_POST['daftar'])) {

        if (daftar($_POST) > 0) {
            $_SESSION['hasil'] = array('alert' => 'success', 'judul' => 'Pendaftaran Berhasil!', 'pesan' => 'Pengguna Baru Berhasil Ditambahkan!');
        } else {
            echo mysqli_error($conn);
        }
    }
}
require '../lib/header.php';
?>  
                <div class="row">
                    <div class="offset-md-2 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="panel-title text-uppercase"><i class="mdi mdi-account-plus"></i>    Daftar</h4>
                                <br />
                                <form class="form-horizontal" method="POST">
                                    <input type="hidden" name="csrf_token" value="<?php echo $config['csrf_token'] ?>">
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="nama" class="form-control" name="nama" placeholder="Nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        </div>
                                    </div>                                                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>                                    
                                    <div class="form-group row">
                                        <label  class="col-sm-3 control-label">Konfirmasi Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password">
                                        </div>
                                    </div>
                                        <div class="form-group mb-3">
                                    <label for="S&K">Saya Setuju Dengan S&K</label>
                                    <select class="form-control" name="ya" id="ya">
                                        <option value="">Pilih salah satu...</option>
                                        <option value="ya">Ya</option>                                        
                                    </select>
                                </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-success btn-block waves-effect waves-light" name="daftar">  Daftar</button>
                                            
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