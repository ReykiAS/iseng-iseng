<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Input Tiket Film</h2>
    <form action="simpan-barang.php" method="post">
        <div class="form-group">
            <label>Id film:</label>
            <input type="text" name="id_film" class="form-control" placeholder="Masukan id film" />
        </div>
        <div class="form-group">
            <label>Nama film:</label>
            <input type="text" name="nama_film" class="form-control" placeholder="Masukan nama film" />
        </div>
     <div class="form-group">
            <label>Sipnosis:</label>
            <input type="text" name="Sipnosis" class="form-control" placeholder="Masukan Sipnosis" />
        </div>

    <div class="form-group">
            <label>Rating:</label>
            <input type="number" name="Rating" class="form-control" placeholder="Masukan Rating" />
        </div>
    <div class="form-group">
         <?php
                        $conn=mysqli_connect("localhost","root","123456") or die ("GAGAL");
                        mysqli_select_db($conn,"nobar_xxi1");
                        $hasil = mysqli_query($conn,"select * from Genre limit 1");
                            while ($data=mysqli_fetch_array($hasil)) {
                            
                        ?>
            <label>Genre</label>
                 <?php echo $data['id_genre']; ?> <input type="number" name="id_genre"  class="form-control" placeholder="Masukan genre" />
                                   
                                <?php } ?>
        </div>
    <div class="form-group">
         <?php
                        $conn=mysqli_connect("localhost","root","123456") or die ("GAGAL");
                        mysqli_select_db($conn,"nobar_xxi1");
                        $hasil = mysqli_query($conn,"select * from batasan_usia limit 1");
                            while ($data=mysqli_fetch_array($hasil)) {
                            
                        ?>
            <label>batasan usia</label>
                 <?php echo $data['id_batasan']; ?> <input type="number" name="id_batasan"  class="form-control" placeholder="Masukan batasan" />
                                   
                                <?php } ?>
        </div>

     <div class="form-group">
            <label>Tahun:</label>
            <input type="number" name="Tahun" class="form-control" placeholder="Masukan Tahun" />
        </div>
    <div class="form-group">
            <label>writers:</label>
            <input type="text" name="writers" class="form-control" placeholder="Masukan writers" />
        </div>
    <div class="form-group">
            <label>directors:</label>
            <input type="text" name="directors" class="form-control" placeholder="Masukan directors" />
        </div>
     <div class="form-group">
            <label>pemeran:</label>
            <input type="text" name="pemeran" class="form-control" placeholder="Masukan pemeran" />
        </div>
     <div class="form-group">
         <?php
                        $conn=mysqli_connect("localhost","root","123456") or die ("GAGAL");
                        mysqli_select_db($conn,"nobar_xxi1");
                        $hasil = mysqli_query($conn,"select * from studio limit 1");
                            while ($data=mysqli_fetch_array($hasil)) {
                            
                        ?>
            <label>nama studio</label>
                 <?php echo $data['id_studio']; ?> <input type="number" name="id_studio"  class="form-control" placeholder="Masukan studio" />
                                   
         <?php } ?>
        </div>
    <div class="form-group">
         <?php
                        $conn=mysqli_connect("localhost","root","123456") or die ("GAGAL");
                        mysqli_select_db($conn,"nobar_xxi1");
                        $hasil = mysqli_query($conn,"select * from jadwal limit 1");
                            while ($data=mysqli_fetch_array($hasil)) {
                            
                        ?>
            <label>jadwal</label>
                 <?php echo $data['id_jadwal']; ?> <input type="number" name="id_jadwal"  class="form-control" placeholder="Masukan jadwal" />
                                   
         <?php } ?>
        </div>
    <div class="form-group">
         <?php
                        $conn=mysqli_connect("localhost","root","123456") or die ("GAGAL");
                        mysqli_select_db($conn,"nobar_xxi1");
                        $hasil = mysqli_query($conn,"select * from kategori limit 1");
                            while ($data=mysqli_fetch_array($hasil)) {
                            
                        ?>
            <label>kategori</label>
                 <?php echo $data['id_kategori']; ?> <input type="number" name="id_kategori"  class="form-control" placeholder="Masukan kategori" />
                                   
         <?php } ?>
        </div>
    <div class="form-group">
            <label>Harga:</label>
            <input type="text" name="Harga" class="form-control" placeholder="Masukan Harga" />
        </div>
    <div class="form-group">
            <label>Image:</label>
            <input type="file"
                id="id_film" name="image"
                accept="image/png, image/jpeg"> 

        </div>





        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
         <a href="preview.php" class="btn btn-primary">preview</a>

        

    </form>
</div>
</body>
</html>


                                  