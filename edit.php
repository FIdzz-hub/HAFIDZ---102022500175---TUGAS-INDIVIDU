<?php

// koneksi database
require 'koneksi.php';

//mekanik edit
$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM barang WHERE id='$id'"
);

$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="page-container">
        <div>
                <div class="form-card">
                    <div>
                        <div class="page-title">Edit Data Barang</div>
                        <div class="page-desc">
                            Perbarui informasi barang yang tersimpan dalam sistem inventaris.
                        </div>
                        <div class="section-title">Informasi Barang</div>
                        <div class="section-desc">
                            Ubah data yang diperlukan, kemudian simpan perubahan.
                        </div>

                        <form action="update.php" method="POST">
                            <input
                                type="hidden"
                                name="id"
                                value="<?= $data['id']; ?>">

                            <div class="mb-3">
                                <label class="form-label">
                                    Kode Barang
                                </label>
                                <input
                                    type="text"
                                    name="kode_barang"
                                    class="form-control"
                                    value="<?= $data['kode_barang']; ?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Nama Barang
                                </label>
                                <input
                                    type="text"
                                    name="nama_barang"
                                    class="form-control"
                                    value="<?= $data['nama_barang']; ?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Kategori
                                </label>
                                <select
                                    name="kategori"
                                    class="form-select">
                                    <option
                                        value="Elektronik"
                                        <?= $data['kategori'] == 'Elektronik' ? 'selected' : '' ?>>
                                        Elektronik
                                    </option>
                                    <option
                                        value="Peralatan"
                                        <?= $data['kategori'] == 'Peralatan' ? 'selected' : '' ?>>
                                        Peralatan
                                    </option>
                                    <option
                                        value="ATK"
                                        <?= $data['kategori'] == 'ATK' ? 'selected' : '' ?>>
                                        ATK
                                    </option>
                                    <option
                                        value="Logistik"
                                        <?= $data['kategori'] == 'Logistik' ? 'selected' : '' ?>>
                                        Logistik
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Spesifikasi
                                </label>
                                <textarea
                                    name="spesifikasi"
                                    class="form-control"
                                    rows="3"
                                    required><?= $data['spesifikasi']; ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Satuan
                                </label>
                                <select
                                    name="satuan"
                                    class="form-select">
                                    <option value="Unit">
                                        Unit
                                    </option>
                                    <option value="Pcs">
                                        Pcs
                                    </option>
                                    <option value="Meter">
                                        Meter
                                    </option>
                                    <option value="Box">
                                        Box
                                    </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Stok
                                </label>
                                <input
                                    type="number"
                                    name="stok"
                                    class="form-control"
                                    value="<?= $data['stok']; ?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Keterangan
                                </label>
                                <textarea
                                    name="keterangan"
                                    class="form-control"
                                    rows="2"><?= $data['keterangan']; ?></textarea>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-update">
                                Update
                            </button>

                            <a
                                href="index.php"
                                class="btn btn-back">
                                Kembali
                            </a>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>