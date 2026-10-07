<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tambah Barang</title>
</head>

<body>
    <div class="page-container">
        <div class="mb-4">
            <div class="page-title">Tambah Data Barang</div>
            <div class="page-desc">Tambahkan informasi barang baru ke dalam sistem inventaris gudang.</div>
        </div>
        <div class="form-card">
                <div class="section-title">Informasi Barang</div>
                        <div class="section-desc">Isi informasi yang diperlukan untuk menyimpan data barang.</div>
                        <form action="simpan.php" method="POST">
                            <!-- Kode Barang -->
                            <div class="mb-3">
                                <label class="form-label">
                                    Kode Barang
                                </label>

                                <input
                                    type="text"
                                    name="kode_barang"
                                    class="form-control"
                                    placeholder="Contoh: BRG001"
                                    required>
                            </div>

                            <!-- Nama Barang -->
                            <div class="mb-3">
                                <label class="form-label">
                                    Nama Barang
                                </label>

                                <input
                                    type="text"
                                    name="nama_barang"
                                    class="form-control"
                                    placeholder="Masukkan nama barang"
                                    required>
                            </div>

                            <!-- Kategori -->
                            <div class="mb-3">
                                <label class="form-label">
                                    Kategori
                                </label>

                                <select
                                    name="kategori"
                                    class="form-select"
                                    required>

                                    <option value=""> -- Pilih Kategori -- </option>
                                    <option value="Elektronik"> Elektronik </option>
                                    <option value="Peralatan"> Peralatan </option>
                                    <option value="ATK"> ATK </option>
                                    <option value="Logistik"> Logistik </option>
                                </select>
                            </div>

                            <!-- Spesifikasi -->
                            <div class="mb-3">
                                <label class="form-label">
                                    Spesifikasi Teknis
                                </label>
                                <textarea
                                    name="spesifikasi"
                                    class="form-control"
                                    rows="3"
                                    placeholder="Masukkan spesifikasi barang"
                                    required></textarea>
                            </div>

                            <!-- Satuan -->
                            <div class="mb-3">
                                <label class="form-label">
                                    Satuan
                                </label>

                                <select
                                    name="satuan"
                                    class="form-select"
                                    required>

                                    <option value=""> -- Pilih Satuan -- </option>
                                    <option value="Unit"> Unit </option>
                                    <option value="Pcs"> Pcs </option>
                                    <option value="Meter"> Meter </option>
                                    <option value="Box"> Box </option>
                                </select>
                            </div>

                            <!-- Stok -->
                            <div class="mb-3">
                                <label class="form-label">
                                    Stok
                                </label>

                                <input
                                    type="number"
                                    name="stok"
                                    class="form-control"
                                    min="0"
                                    required>
                            </div>

                            <!-- Keterangan -->
                            <div class="mb-3">
                                <label class="form-label">
                                    Keterangan
                                </label>

                                <textarea
                                    name="keterangan"
                                    class="form-control"
                                    rows="2"
                                    placeholder="Keterangan tambahan"></textarea>
                            </div>

                            <!-- Tombol -->
                            <div class="d-flex gap-2">
                                <button
                                    type="submit"
                                    class="btn btn-save">
                                    Simpan
                                </button>

                                <a
                                    href="index.php"
                                    class="btn btn-back">
                                    Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>