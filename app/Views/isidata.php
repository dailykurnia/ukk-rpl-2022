<?= $this->extend("template/dashboard") ?>

<?= $this->section("content") ?>
<?=$this->include("include/alert")?>
<div class="card shadow mb-4" style="max-width:500px;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Isi Data Perjalanan</h6>
    </div>
    <div class="card-body">
        <form method="post" action="/isidata/simpan">
<!--
        <div class="mb-4">
                <p>Konfirmasi Vaksin</p>
                <select name="vaksin">
                    <option value="">Pilih</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">Booster</option>
                </select>
            </div>-->
            <div class="mb-4">
                <p>Tanggal</p>
                <input name="tanggal" type="date" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="mb-4">
                <p>Jam</p>
                <input name="waktu" type="time" class="form-control bg-light border-0 small"  aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="mb-4">
                <p>Lokasi yang dikunjungi</p>
                <input name="lokasi" type="text" class="form-control bg-light border-0 small"  aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <div class="mb-4">
                <p>Suhu Tubuh</p>
                <input name="suhu" type="number" class="form-control bg-light border-0 small" aria-label="Search" aria-describedby="basic-addon2">
            </div>
            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                </span>
                <span class="text">Simpan</span>
</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>