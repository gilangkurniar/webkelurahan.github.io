<?php
session_start();
include '../include/koneksi.php';

if (!isset($_SESSION["loginadminid"])) {

    header("Location: index.php");

    }

?>
<html>
<head>
	<title>Daftar Kategori</title>
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
                            <h6 class="m-0 font-weight-bold text-primary mt-2">Profil Kelurahan</h6>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                      <tr>
                                        <th>Terakhir Diupdate</th>
                                        <th class="text-center">Teks</th>
                                        <th width="17%">Tindakan</th>
                                      </tr>
                                    </thead>
                                      <?php
                                          $i=1;

                                          $sql=mysqli_query($connect,"SELECT * FROM profil");
                                          while ($data = mysqli_fetch_array($sql)) {
                                      ?>
                                      <tr>
                                        <td align="center"><?php echo $data['tanggal']?></td>
                                        <td><?php echo substr($data['isi'],0,90) ?>...</td>
                                        <td width="10%" align="center"><a href="editprofil.php?id=<?php echo $data['id']?>" class="btn btn-sm btn-success mt-1"><i class="fas fa-edit"></i> Edit</a><!--  &nbsp;<a onclick="return confirm('Apa Anda Yakin?')"
                        href="hapuskategori.php?id=<?php echo $data['id']?>" class="btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i> Hapus</a> --></td>
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