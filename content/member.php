<?php
// print_r($_SESSION);
// die;
if (isset($_POST['simpan'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = ($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM member WHERE user.email = '$email'");

    if (mysqli_num_rows($query) > 0) {

        $dataUser = mysqli_fetch_assoc($query);
        if ($dataUser['password'] == $password) {
            $_SESSION['id_member'] = $dataUser['id'];
            $_SESSION['id_session'] = session_start();
            header('Location: index.php');
        }
    }
}
?>
<div class="untree_co-section">
    <div class="container">
        <div class="block">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8 pb-4">
                    <form method="post">
                        <div class="form-group">
                            <label class="text-black" for="">Nama Lengkap :</label>
                            <input name="nama_lengkap" type="text" class="form-control" id="lname">
                        </div>

                        <div class="form-group">
                            <label class="text-black" for="lname">Email :</label>
                            <input name="email" type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label class="text-black" for="">Password :</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>

                        <div class="form-group">
                            <label class="text-black" for="">Alamat :</label>
                            <input type="alamat" class="form-control" name="alamat" id="">
                        </div> <br>
                        <!-- 
                        <div class="form-group mb-5">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                        </div> -->

                        <button type="submit" name="simpan" class="btn btn-primary-hover-outline">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>