<div class="container-fluid">
   <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url() ?>presiden/tambah" class="btn btn-info mb-2">Tambah Presiden</a>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama Lengkap</th>
                        <th>Asal</th>
                        <th>Partai Pendukung</th>
                        <th>Riwayat Pekerjaan</th>
                        <th>Umur</th>
                       

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($presiden as $us) : ?>
                    <tr>
                        <td><?= $i; ?>.</td>
                        <td><?= $us['nik']; ?></td>
                        <td><?= $us['nama_lengkap']; ?></td>
                        <td><?= $us['asal']; ?></td>
                        <td><?= $us['partai_pendukung']; ?></td>
                        <td><?= $us['riwayat_pekerjaan']; ?></td>
                        <td><?= $us['umur']; ?></td>
                        <td>
                            <a href="<?= base_url('Presiden/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                            <a href="<?= base_url('Presiden/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('Presiden/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
