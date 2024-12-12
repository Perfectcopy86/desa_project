<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Desa Tangsimekar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

</head>

<body>
  <button class="toggle-btn" id="toggleSidebar">
    <i class="fas fa-bars"></i>
  </button>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-2 sidebar" id="sidebar">
        <div class="logo-section">
          <img src="{{ asset('assets/images/logodesa.png') }}" alt="Logo Desa">
          <h5>Dashboard Desa Tangsimekar</h5>
        </div>
        <hr>
        <nav class="nav flex-column">
          <a href="/admin/dashboard" class="nav-link"><i class="fas fa-home"></i> Home</a>
          <!-- Billing Menu with Arrow Icon -->
          <div class="nav-item">
            <a href="#" class="nav-link active" onclick="toggleSubMenu(event, 'profileSubMenu')">
              <i class="fas fa-user-circle"></i> Profile
              <span class="arrow"><i class="fas fa-chevron-down"></i></span>
            </a>
            <ul class="sub-menu" id="profileSubMenu">
              <li><a href="/admin/kades" class="nav-link"><i class="fa fa-user"></i>Kepala Desa</a></li>
              <li><a href="/admin/perangkat-desa" class="nav-link"> <i class="fa fa-users"></i>Perangkat Desa</a></li>
              <li><a href="/admin/struktur" class="nav-link active"><i class="fas fa-sitemap"></i>Struktur Desa</a></li>
            </ul>
          </div>
          <a href="/admin/pemerintahan" class="nav-link"><i class="fas fa-building"></i> Pemerintahan</a>
          <div class="nav-item">
            <a href="#" class="nav-link" onclick="toggleSubMenu(event, 'informasiPublikSubMenu')">
              <i class="fas fa-info-circle"></i> Informasi Publik
              <span class="arrow"><i class="fas fa-chevron-down"></i></span>
            </a>
            <ul class="sub-menu" id="informasiPublikSubMenu">
              <li><a href="/admin/agenda" class="nav-link"><i class="fas fa-calendar"></i>Agenda</a></li>
              <li><a href="/admin/produk-hukum" class="nav-link"> <i class="fas fa-book"></i>Produk Hukum</a></li>
              <li><a href="/admin/transparansi" class="nav-link"><i class="fas fa-file-invoice-dollar"></i>Transparansi Anggaran</a></li>
            </ul>
          </div>
          <a href="/admin/monografi" class="nav-link"><i class="fa fa-line-chart"></i> Monografi</a>
          <hr>
          <h6>Account Pages</h6>
          <a href="#" class="nav-link"><i class="fas fa-sign-in-alt"></i> Log Out</a>
        </nav>
      </div>


      <div class="col-md-9 col-lg-9 main-content">
        <div class="d-flex justify-content-between align-items-center">
          <div class="breadcrumb">Pages / Struktur Desa</div>
          <input type="text" class="form-control w-25" placeholder="Search..." id="searchInput">
        </div>
        <h5 class="mb-4">Struktur Desa</h5>
        <div class="card">
          <div class="table-header d-flex justify-content-between align-items-center">
            <span>Tabel Struktur Desa</span>
            <button class="btn btn-tambah" onclick="openAddModal()">
              <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
            </button>
          </div>
          <div class="table-responsive">
            <table id="table-struktur-desa" class="table align-middle">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="table-body">
                <tr>
                  <td>1</td>
                  <td><img src="https://storage.googleapis.com/a1aa/image/r7Z2x1HMBsqjN50SFfoGVMFMYkZW45RL4fW1SdOaeIeWkHIPB.jpg" class="card-img-top" alt="Berita 1"></td>
                  <td>Didi Supendi</td>
                  <td>Kepala SUku</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><img src="https://storage.googleapis.com/a1aa/image/r7Z2x1HMBsqjN50SFfoGVMFMYkZW45RL4fW1SdOaeIeWkHIPB.jpg" class="card-img-top" alt="Berita 1"></td>
                  <td>Didi Supendi</td>
                  <td>Ketua BPD</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><img src="https://storage.googleapis.com/a1aa/image/r7Z2x1HMBsqjN50SFfoGVMFMYkZW45RL4fW1SdOaeIeWkHIPB.jpg" class="card-img-top" alt="Berita 1"></td>
                  <td>Didi Supendi</td>
                  <td>Kepala Desa</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><img src="https://storage.googleapis.com/a1aa/image/r7Z2x1HMBsqjN50SFfoGVMFMYkZW45RL4fW1SdOaeIeWkHIPB.jpg" class="card-img-top" alt="Berita 1"></td>
                  <td>Didi Supendi</td>
                  <td>Kepala Desa</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <ul id="pagination-table-struktur-desa" class="pagination">
            <li><a href="#">&laquo; Previous</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
          </ul>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
  <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dataModalLabel">Edit Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="dataForm">
            <div class="mb-3">
              <label for="dataNo" class="form-label">No</label>
              <input type="text" class="form-control" id="dataNo" readonly>
            </div>
            <div class="mb-3">
              <label for="dataFoto" class="form-label">Foto</label>
              <input type="file" class="form-control" id="dataFoto" accept="image/*">
            </div>
            <div class="mb-3">
              <label for="dataNama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="dataNama">
            </div>
            <div class="mb-3">
              <label for="dataJabatan" class="form-label">Jabatan</label>
              <input type="text" class="form-control" id="dataJabatan">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-light" id="saveButton" onclick="saveData()">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body confirmation">
          <i class="fas fa-exclamation-triangle icon-warning"></i>
          <p>Apakah Anda yakin ingin menghapus data ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/Admin/script.js"></script>
  <script src="../assets/js/Admin/struktur-desa.js"></script>

</body>

</html>