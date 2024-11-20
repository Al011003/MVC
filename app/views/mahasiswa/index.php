<style>
body {
            background-color: #343a40;
            color: #ffffff;
            font-family: 'Roboto', sans-serif;
        }
    </style>
<div class="container mt-5">
    <div class="row mb-3 d-flex justify-content-center">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3 d-flex justify-content-center" style="gap: 3px;">
    <!-- Kolom pertama: Tombol Tambah Data Mahasiswa -->
    <div class="col-lg-auto p-0">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
    </div>
    
    <!-- Kolom kedua: Form Pencarian -->
    <div class="col-lg-auto p-0">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-1">
                <input type="text" class="form-control" placeholder="Cari nama.." name="keyword" id="keyword" autocomplete>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row mb-3 d-flex justify-content-center">
    <div class="col-lg-6">
    <h3 class="text-white text-center">Anggota</h3>

        <?php foreach ($data['mhs'] as $mhs ): ?>

            <ul class="list-group">
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin???');"> hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'];?>" class=" badge badge-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'] ?>"> ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>" class=" badge badge-primary float-right ml-2"> detail</a>

                </li>
            </ul>

        <?php endforeach; ?>
    </div>
</div>

</div>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
<input type="hidden" name="id" id="id">    
<div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>

    <div class="form-group">
        <label for="Na">Na</label>
        <input type="text" class="form-control" id="na" name="na">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

            <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknologi Informasi">Teknologi Informasi</option>
            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Design Komunikasi visual">Design Komunikasi visual</option>
            </select>
        </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>