function openAddModal() {
    isEditMode = false;
    editingId = null;
  
    document.getElementById('dataModalLabel').textContent = 'Tambah Data';
    document.getElementById('dataForm').reset(); // Reset semua input
  
    const dataModal = new bootstrap.Modal(document.getElementById('dataModal'));
    dataModal.show();
  }
  
function saveData() {
    const no = document.getElementById('dataNo').value;
    const nama = document.getElementById('dataJudul').value;
    const jabatan = document.getElementById('dataKategori').value;
    const foto = document.getElementById('dataDokumen').files[0];
  
    if (!judul || !deskripsi) {
      alert('judul dan deskripsi harus diisi.');
      return;
    }
  
    const reader = new FileReader();
    reader.onload = function (e) {
      const fotoUrl = foto ? e.target.result : '';
  
      if (isEditMode) {
        // Update baris tabel yang ada
        const row = document.querySelector(`#table-perangkat-desa tbody tr:nth-child(${editingId})`);
        row.children[1].innerHTML = fotoUrl ? `<img src="${fotoUrl}" class="card-img-top" alt="Foto">` : row.children[1].innerHTML;
        row.children[2].textContent = nama;
        row.children[3].textContent = deskripsi;
        row.children[4].textContent = jabatan;
      } else {
        // Tambahkan data baru ke tabel
        const tableBody = document.querySelector('#table-perangkat-desa tbody');
        const newRow = `
          <tr>
            <td>${nomo || tableBody.children.length + 1}</td>
            <td>${fotoUrl ? `<img src="${fotoUrl}" class="card-img-top" alt="Foto">` : ''}</td>
            <td>${nama}</td>
            <td>${jabatan}</td>
            <td>
              <button class="btn btn-light" onclick="openEditModal(${tableBody.children.length + 1})">Edit</button>
              <button class="btn btn-danger" onclick="openDeleteModal(${tableBody.children.length + 1})">Hapus</button>
            </td>
          </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', newRow);
      }
  
      // Tutup modal
      const dataModal = bootstrap.Modal.getInstance(document.getElementById('dataModal'));
      dataModal.hide();
    };
  }

function openEditModal(id) {
    isEditMode = true;
    editingId = id;
  
    document.getElementById('dataModalLabel').textContent = 'Edit Data';
    document.getElementById('dataNo').value = id; // Bisa ambil data berdasarkan ID jika ada
    document.getElementById('dataJudul').value = ''; // Reset file input
    document.getElementById('dataKategori').value = ''; // Reset file input
    document.getElementById('dataDokumen').value = ''; // Reset file input
    const dataModal = new bootstrap.Modal(document.getElementById('dataModal'));
    dataModal.show();
}

function openDeleteModal(id) {
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
  }

  document.getElementById('searchInput').addEventListener('input', function () {
    const searchValue = this.value.toLowerCase();
    const tableRows = document.querySelectorAll('#table-transparansi tbody tr');
    let hasVisibleRow = false;

    tableRows.forEach(row => {
        const judul = row.children[1].textContent.toLowerCase();
        const kategori = row.children[2].textContent.toLowerCase();

        if (judul.includes(searchValue) || kategori.includes(searchValue)) {
            row.style.display = '';
            hasVisibleRow = true;
        } else {
            row.style.display = 'none';
        }
    });

    // Tampilkan pesan jika tidak ada hasil
    const noDataMessage = document.getElementById('noDataMessage');
    if (!hasVisibleRow) {
        if (!noDataMessage) {
            const newMessage = document.createElement('tr');
            newMessage.id = 'noDataMessage';
            newMessage.innerHTML = `<td colspan="5" class="text-center">Tidak ada data</td>`;
            document.querySelector('#table-transparansi tbody').appendChild(newMessage);
        }
    } else {
        if (noDataMessage) {
            noDataMessage.remove();
        }
    }
});