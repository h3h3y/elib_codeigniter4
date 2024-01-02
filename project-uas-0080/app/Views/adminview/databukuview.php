<?= $this->extend('adminview/mainview') ?>

<?= $this->section('judul') ?>
Data Buku
<?= $this->endSection('judul') ?>


<?= $this->section('subjudul') ?>
<ol class="breadcrumb bg-white mb-0">
    <li class="breadcrumb-item"><a href="<?=base_url('/admin/home') ?>">Home</a></li>
    <li class="breadcrumb-item active">Data Buku</li>
</ol>
<?= $this->endSection('subjudul') ?>

<?= $this->section('isi') ?>
<!-- data tables -->
<button class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i><a class="text-white" href="<?=base_url('/admin/databuku/tambah') ?>">Tambah Data Buku</a></button>
<table id="example1_buku" class="table table-bordered table-striped">
    <!-- Alert Data berhasil Di input -->
    <?php if (session()->getFlashdata('inputbukuberhasil')) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '<?= session()->getFlashdata("inputbukuberhasil") ?>',
                });
            });
        </script>
    <?php endif; ?>
    <!-- Alert Data berhasil Di edit -->
    <?php if (session()->getFlashdata('editberhasil')) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '<?= session()->getFlashdata("editberhasil") ?>',
                });
            });
        </script>
    <?php endif; ?>
    <!-- Alert Data Gagal Di input Karena Duplikat -->
    <?php if (session()->getFlashdata('duplikatkodebuku')) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '<?= session()->getFlashdata("duplikatkodebuku") ?>',
                });
            });
        </script>
    <?php endif; ?>
    <!-- Alert Data Gagal Di edit -->
    <?php if (session()->getFlashdata('editgagal')) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '<?= session()->getFlashdata("editgagal") ?>',
                });
            });
        </script>
    <?php endif; ?>
    <!-- Alert Data berhasil DiHapus -->
    <?php if (session()->getFlashdata('hapusberhasil')) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '<?= session()->getFlashdata("hapusberhasil") ?>',
                });
            });
        </script>
    <?php endif; ?>
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>JUDUL BUKU</th>
            <th>KODE BUKU</th>
            <th>PENGARANG</th>
            <th>TAHUN TERBIT</th>
            <th>KATEGORI</th>
            <th>JUMLAH BUKU</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($databuku)) : ?>
        <tr class="odd">
            <td colspan="8" class="text-center">Data Kosong</td>
        </tr>
        <?php else : ?>
        <?php
        $no = 1;
        foreach ($databuku as $row) :
        ?>
            <tr class="odd text-center">
                <td class="text-center"><?= $no++; ?></td>
                <td><?= $row['judul_buku'] ?></td>
                <td><?= $row['kode_buku'] ?></td>
                <td><?= $row['pengarang'] ?></td>
                <td><?= $row['tahun_terbit'] ?></td>
                <td><?= $row['kategori'] ?></td>
                <td><?= $row['jumlah_buku'] ?></td>
                <td class="text-center">
                    <form method="POST" action="/admin/databuku/edit/<?= $row['kode_buku'] ?>" style="display:inline" onsubmit="return edit()">
                        <input type="hidden" value="EDIT" name="_method">
                        <button class="btn btn-warning text-white" type="submit" title="Edit">Edit</button>
                    </form>
                    <form method="POST" action="/admin/databuku/detail/<?= $row['kode_buku'] ?>" style="display:inline" onsubmit="return detail()">
                        <input type="hidden" value="DETAIL" name="_method">
                        <button class="btn btn-success" type="submit" title="Detail">Detail</button>
                    </form>
                    <form id="hapusForm" method="POST" action="/admin/databuku/hapus/<?= $row['kode_buku'] ?>" style="display:inline">
                        <input type="hidden" value="DELETE" name="_method">
                        <button class="btn btn-danger" type="button" title="Hapus Data" onclick="konfirmasiHapus()">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
        <?php endif; ?>
    </tbody>
</table>
<script>
    function edit(){
        return true;
    }
    function detail(){
        return true;
    }
    function konfirmasiHapus() {
        Swal.fire({
            title: 'Mengapus Data Buku Ini Juga Akan Menghapus Data Yang Ada Dalam Data Peminjam, Yakin Ingin Menghapus Buku Ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('hapusForm').submit();
            }else{
                return false;
            }
        });
    }
</script>

<?= $this->endSection('isi') ?>
