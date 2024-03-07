<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latian Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row py-5 g-3">
            <div class="col-md-6 first_col">
                <h5 class="text-center display-6 mt-3">Investor PT Cilox Cilix</h5>
                <form class="p-4 mt-2">
                    <div class="mb-3">
                        <label class="form-label">Masukin Nama</label>
                        <input type="text" name="ipNama" class="form-control" placeholder="Namamu Siapa ?">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Tanggal Lahir</label>
                        <input type="date" name="ipTglLahir" class="form-control" placeholder="Kapan Lahir?">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Kota Asal</label>
                        <input type="text" name="ipKotaAsal" class="form-control" placeholder="Kota asal mana?">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label"><b>Divisi</b></label> <br>
                        <input type="radio" name="ipDivisi"  value="1"/> Pemasaran <br>
                        <input type="radio" name="ipDivisi"  value="2"/> Transportasi <br>
                        <input type="radio" name="ipDivisi"  value="3"/> Media <br>
                        <input type="radio" name="ipDivisi"  value="4"/> Branding <br>
                            
                    </div>
                    <div class="mb-3">
                        <label  class="form-label"> <b>Jenis Saham</b></label> <br>
                        <input type="radio" name="ipSaham"  value="1"/> Tepung Terigu <br>
                        <input type="radio" name="ipSaham"  value="2"/> Tepung Kanji <br>
                        <input type="radio" name="ipSaham"  value="3"/> Bensin <br>
                        <input type="radio" name="ipSaham"  value="4"/> Mobil <br>
                        <input type="radio" name="ipSaham"  value="5"/> Tenda <br>
                            
                    </div>
                    
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-danger"></input>
                    </div>

                </form>

            </div>

            <div class="col-md-6">
                <img src="gbr.jpg" class="img-fluid">
            </div>

        </div>

        <!-- <div class="last_row">
            <div class="row row-cols-1 row-cols-3 p-3 text-light">
                <div class="col">
                    <h4>Call Us</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus non, atque quasi possimus velit consectetur?</p>
                </div>
                <div class="col">
                    <h4>Call Us</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus non, atque quasi possimus velit consectetur?</p>
                </div>
                <div class="col">
                    <h4>Call Us</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus non, atque quasi possimus velit consectetur?</p>
                </div>
            </div>
        </div> -->
    </div>
    

    <?php
        $con = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($con, "investor");

        $q = "SELECT data_investor.* FROM data_investor";
        $query = mysqli_query($con,$q);
    ?>

    <div class="container-md kotak">
        <h2 class="display-6 text-center">List Anggota Investor PT. Cilox CIlix</h2><br>

    <table class="table table-warning rounded">
        <tr class="table-danger">
            <th>id</th>
            <th>Nama Investor</th>
            <th>Tanggal Lahir</th>
            <th>Kota Asal</th>
            <th>Divisi</th>
            <th>Jenis Saham</th>
            <th>Date Input</th>
            <th>User Input</th>
        </tr>
        <?php
        while($data = mysqli_fetch_array($query)){
        
        echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['nama_investor']."</td>";
            echo "<td>".$data['tanggal_lahir']."</td>";
            echo "<td>".$data['kota_asal']."</td>";
            echo "<td>".$data['divisi']."</td>";
            echo "<td>".$data['saham']."</td>";
            echo "<td>".$data['date_input']."</td>";
            echo "<td>".$data['user_input']."</td>";
            echo "</tr>";
        } 
        echo "</table>";
        
           
        ?>

    
        </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
    


<svg class="scg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#c1b699" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,208C384,203,480,149,576,138.7C672,128,768,160,864,192C960,224,1056,256,1152,234.7C1248,213,1344,139,1392,101.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

</body>
</html>