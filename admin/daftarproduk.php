<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");

    }

?>
<html>
<head>
	<title>Daftar Produk</title>
	<?php include 'head.php';?>
</head>
	<?php 
	include 'sidebar.php'; 
	include 'header.php';
	?>
                    <div class="container-fluid">
                      <div class="col-12">
                        <div class="card shadow mb-4">
                          <div class="card-header py-3">
                            <a href="tambahproduk.php" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Tambah Produk</a>
                            <h6 class="m-0 font-weight-bold text-primary mt-2">Daftar Produk</h6>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                      <tr>
                                        <th width="1%">No.</th>
                                        <th width="20%">Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th width="17%">Tindakan</th>
                                      </tr>
                                    </thead>
                                      <?php
                                          $i=1;

                                          $sql=mysqli_query($connect,"SELECT * FROM produk");
                                          while ($data = mysqli_fetch_array($sql)) {
                                      ?>
                                      <tr>
                                        <td align="center"><?php echo $i ?></td>
                                        <td><?php echo $data['nama'] ?></td>
                                        <td><?php echo $data['kategoriproduk'] ?></td>
                                        <td><?php echo substr($data['deskripsi'],0,60) ?>...</td>
                                        <td>Rp <?php echo $data['harga'] ?> per <?php echo $data['satuan'] ?></td>
                                        <td align="center"><a href="editproduk.php?id=<?php echo $data['id']?>" class="btn btn-sm btn-success mt-1"><i class="fas fa-edit"></i> Edit</a> &nbsp;<a onclick="return confirm('Apa Anda Yakin?')"
                        href="hapusproduk.php?id=<?php echo $data['id']?>" class="btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i> Hapus</a></td>
                                      </tr>
                                    <?php $i++;}?>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
	<?php include 'footer.php'; 
        include 'script.php';
  ?>
</body>
</html>