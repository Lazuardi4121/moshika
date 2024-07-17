<?php
if (isset($_POST['simpan'])) {
    $email_website = $_POST['email_website'];
    $tlp_website = $_POST['tlp_website'];
    $alamat_website = $_POST['alamat_website'];
    $facbook_link = $_POST['fb'];
    $instagram_link = $_POST['ig'];
    $twiter_link = $_POST['twiter'];
    $linked_link = $_POST['linkedin'];

    $querySetting = mysqli_query($koneksi, "SELECT * FROM setting ORDER BY id DESC");
    if (mysqli_num_rows($querySetting) > 0) {
        //updated
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO setting (email_website, tlp_website, alamat_website, fb, ig, twiter, linkedin) 
        VALUES ('$email_website', '$tlp_website', '$alamat_website', '$facbook_link', '$instagram_link', '$twiter_link', '$linked_link')");
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="">Email Website : </label>
        <input type="text" class="form-control" name="email_website" placeholder="Masukkan Email" require>
    </div>
    <div class="mb-3">
        <label for="">Telepon Email : </label>
        <input type="text" class="form-control" name="tlp_website" placeholder="Masukkan Telepon Email" require>
    </div>
    <div class="mb-3">
        <label for="">Alamat : </label>
        <textarea name="alamat_website" id="" class="form-control" placeholder="Masukkan Alamat" require></textarea>
    </div>
    <div class="mb-3">
        <label for="">Facebook Link :</label>
        <input type="url" class="form-control" name="fb" placeholder="Facebook Link" require>
    </div>
    <div class="mb-3">
        <label for="">Instagram : </label>
        <input type="text" class="form-control" name="ig" placeholder="Username Instagram" require>
    </div>
    <div class="mb-3">
        <label for="">Twiter Link :</label>
        <input type="url" class="form-control" name="twiter" placeholder="Masukkan Twiter" require>
    </div>
    <div class="mb-3">
        <label for="">Linkedin : </label>
        <input type="text" class="form-control" name="linkedin" placeholder="Masukkan Linkedin">
    </div>
    <div class="mb-3">
        <label for="">Logo : </label>
        <input type="file" name="logo">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
    </div>
</form>