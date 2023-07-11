<!DOCTYPE html>
<html>
<head>
    <title> APLIKASI KASIR BAROKAH </title>
    <link rel="stylesheet" type="text/css" href="assets1/css/bootstrap.css">
    <script type="text/javascript" src="assets1/js/jquery.js"></script>
    <script type="text/javascript" src="assets1/js/bootstrap.js"></script>
</head>
<body style="background: #00FFFF">
    <br/>
    <br/>
    <center>
        <h1> APLIKASI KASIR BAROKAH </h1>
    </center>
    <br/>
    <br/>

    <div class="container">
        <div class="col-md-5 col-md-offset-3">
            <?php
            session_start();
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal!!"){
                    echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
                }else if($_GET['pesan'] == "logout!!"){
                    echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
                }else if($_GET['pesan'] == "belum_login!!"){
                    echo "<div class='alert alert-danger'>Anda harus login untuk mengakses halaman admin</div>";
                }
            }
            ?> 

            <form action="login.php" method="post">
                <div class="panel">
                    <br/>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="USERNAME">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="PASSWORD">
                        </div> 
                        <input type="submit" class="btn btn-primary" value="Log_In"> 
                    </div>
                    <br/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
