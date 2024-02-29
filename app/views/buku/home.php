<?php include '../app/views/templates/header.php';
$no = 1; ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <a href="<?= urlTo('/buku/cetakbuku'); ?>" class="btn btn-success float-left">Cetak Laporan</a>
          <a href="<?= urlTo('/buku/create'); ?>" class="btn btn-primary float-right">Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $buku) : ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $buku['NamaKategori']; ?></td>
                  <td><?= $buku['Judul']; ?></td>
                  <td><?= $buku['Penulis']; ?></td>
                  <td><?= $buku['Penerbit']; ?></td>
                  <td><?= $buku['TahunTerbit']; ?></td>
                  <td>
                    <a href="<?= urlTo('/buku/' . $buku['BukuID'] . '/edit') ?>" class="btn btn-warning
                          "> 
                        <i class="nav-icon fas fa-edit"></i>
                    </a>
                    <a href="<?= urlTo('/buku/' . $buku['BukuID'] . '/delete') ?>" class="btn btn-danger
                          ">
                        <i class="nav-icon fas fa-trash"></i>
                    </a>
                    <a href="<?= urlTo('/buku/' . $buku['BukuID'] . '/ulasan') ?>" class="btn btn-success
                          ">
                        <i class="nav-icon fas fa-comment-dots"></i>
                    </a>
                  </td>
                </tr>
                <?php $no++; ?>
              <?php endforeach ?>
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<?php include '../app/views/templates/footer.php'; ?>