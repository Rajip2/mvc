<div class="container mt-4">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
				  Tambah Data Mahasiswa
				</button>
		</div>
	</div>
	

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group ">
			  <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
			  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
			</div>

			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<h2>Daftar Mahasiswa</h2>
					<ul class="list-group">
    
						<?php foreach( $data['mhs'] as $mhs ) : ?>
						<li class="list-group-item ">
						<?= $mhs['nama']; ?>


						<a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end m-1">detail</a>

						
						<a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end m-1" onclick="return confirm('yakin?');">hapus</a>

						<a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-dark float-end m-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>


					</li>
						<?php endforeach; ?>
					</ul>
				
		
		</div>
	</div>

</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       

      	<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      		<input type="hidden" name="id" id="id">
      		<div class="form-group">
			  <label for="nama">Nama</label>
			  <input type="text" class="form-control" id="nama" name="nama">
			</div>

			<div class="form-group">
			  <label for="nim">NIM</label>
			  <input type="number" class="form-control" id="nim" name="nim">
			</div>

			<div class="form-group">
			  <label for="email">Email</label>
			  <input type="text" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
				<label for="jurusan">Jurusan</label>
				<select class="form-control" id="jurusan" name="jurusan">
					<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak </option>
					<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
					<option value="Teknik Sepedah Motor">Teknik Sepeda Motor</option>
					<option value="Akutansi">Akutansi</option>
				</select>
			</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
      </div>
    </div>
  </div>
</div>