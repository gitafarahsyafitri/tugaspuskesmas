<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
        <form method="post">
            <h2>Form Belanja Online</h2>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="text" name="customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-4">
      <input id="text1" name="jumlah" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="submit" type="submit" class="btn btn-primary" style="background-color: #FFC0CB;">Submit</button>
    </div>
  </div>
</form>
		</div>
        <div class="col-md-4">
        <ul class="list-group">
                <li class="list-group-item active" style="background-color: pink;">Daftar Harga</li>
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">Kulkas: 3.100.000</li>
                <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                <li class="list-group-item active" style="background-color: pink;">Harga Dapat Berubah Setiap Saat</li>
            </ul>
		</div>
	</div>
</div>

<?php
error_reporting(0);
// tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// list harga produk
$harga = [
    'TV' => 4200000, 'KULKAS' => 3100000, 'MESIN CUCI' => 3800000
];

// menghitung total harga
$total = $jumlah * $harga [$produk];

// format harga
$total = number_format($total);

// tampilkan hasil form
echo "Nama Customer: $customer";
echo "<br> Pilihan Produk: $produk";
echo "<br> Jumlah Belanja: $jumlah";
echo "<br> Total Belanja: $total";