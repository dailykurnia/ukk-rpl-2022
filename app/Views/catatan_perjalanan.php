<?=$this->extend("template/dashboard")?>

<?=$this->section("content")?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Catatan Perjalanan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mb-4">
            <p>Urutkan berdasarkan <span><select id="urutkan" class="mx-2 rounded p-2 border small">
                <option value="0">Tanggal</option>
                <option value="1">Waktu</option>
                <option value="2">Lokasi</option>
                <option value="3">Suhu Tubuh</option>
            </select><button id="btnUrutkan" class="btn btn-primary">Urutkan</button></span></p>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($catatan_perjalanan as $catatan): ?>
                        <tr>
                            <td><?= $catatan["tanggal"] ?></td>
                            <td><?= $catatan["waktu"] ?></td>
                            <td><?= $catatan["lokasi"] ?></td>
                            <td><?= $catatan["suhu"] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <a href="/isidata" class="btn btn-primary  float-right">
            <span class="text">Isi Catatan Perjalanan</span>
        </a>
        <script>
            $("#dataTable").DataTable().order([document.getElementById("urutkan").value, 'desc']).draw();
            document.getElementById("btnUrutkan").onclick = ()=>{
                $("#dataTable").DataTable().order([document.getElementById("urutkan").value, 'desc']).draw();
            }
        </script>
    </div>
</div>

<?= $this->endSection() ?>