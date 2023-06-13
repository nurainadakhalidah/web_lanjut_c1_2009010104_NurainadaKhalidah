<div class="row">
            <div class="col-sm-8">

                <p id="notif"></p>

                <h4>Data Produk</h4>
                <table class="table table-dark" id="tabel_produk">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                            <th>Jenis Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>1</td>
                            <td>BRG0001</td>
                            <td>Iphone 14</td>
                            <td>Handphone</td>
                            <td>Rp 20.000</td>
                            <td>1 PCS</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>BRG0002</td>
                            <td>Iphone 11</td>
                            <td>Handphone</td>
                            <td>Rp 15.000</td>
                            <td>1 PCS</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>BRG0003</td>
                            <td>Iphone 10</td>
                            <td>Handphone</td>
                            <td>Rp 11.000</td>
                            <td>1 PCS</td>
                        </tr> -->
                    </tbody>
                </table>

            </div>
            <div class="col-sm-4">
                <h4>Input Data Produk</h4>
                <div class="form-group">
                    <label>No</label>
                    <input id="no" type="number" placeholder="Input no" class="form-control">
                    <p id="lihat_no" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Kode Produk</label>
                    <input id="kode_produk" type="text" placeholder="Input kode produk" class="form-control">
                    <p id="lihat_kode_produk" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" id="nama_produk" placeholder="Input nama produk" class="form-control">
                    <p id="lihat_nama_produk" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Jenis Produk</label>
                    <select class="form-control" id="jenis_produk">
                        <option value="" selected>Pilih Jenis Produk</option>
                        <option>Handphone</option>
                        <option>Pakaian</option>
                        <option>Kesehatan</option>
                    </select>
                    <p id="lihat_jenis_produk" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Harga Produk</label>
                    <input id="harga_produk" type="number" placeholder="Input harga produk" class="form-control">
                    <p id="lihat_harga_produk" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Stok Produk</label>
                    <input id="stok_produk" type="number" placeholder="Input stok produk" class="form-control">
                    <p id="lihat_stok" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <button id="simpan" class="btn btn-success">Simpan</button>
                    <button class="btn btn-warning">Batal</button>
                </div>

            </div>
        </div>

<script>
    $("#simpan").click(function(){
    var kode_produk = $("#kode_produk").val()
    if (kode_produk == "") {
        $("#lihat_kode_produk").text("Kode Produk masih kosong!")
    }else{
        $("#lihat_kode_produk").text("")
    }

    var nama_produk = $("#nama_produk").val()
    if (nama_produk == "") {
        $("#lihat_nama_produk").text("Nama Produk masih kosong!")
    }else{
        $("#lihat_nama_produk").text("")
    }

    var jenis_produk = $("#jenis_produk").val()
    if (jenis_produk == "") {
        $("#lihat_jenis_produk").text("Jenis Produk belum dipilih!")
    }else{
        $("#lihat_jenis_produk").text("")
    }

    var harga_produk = $("#harga_produk").val()
    if (harga_produk == "") {
        $("#lihat_harga_produk").text("Harga produk masih kosong!")
    }else{
        $("#lihat_harga_produk").text("")
    }

    var stok = $("#stok_produk").val()
    if (stok == "") {
        $("#lihat_stok").text("Stok produk masih kosong!")
    }else{
        $("#lihat_stok").text("")
    }

    var no = $("#no").val()
    if (no == "") {
        $("#lihat_no").text("No produk masih kosong!")
    }else{
        $("#lihat_no").text("")
    }

    if (kode_produk != "" && nama_produk != "" && jenis_produk != "" && harga_produk != "" && stok != "" && no != "") {
        $("#notif").html(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Add Successfully!</strong> Data berhasil ditambahkan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `)

        var tabel_produk = document.getElementById("tabel_produk")
        var baris = tabel_produk.insertRow(1)

        var kolom_no = baris.insertCell(0)
        var kolom_kode_produk = baris.insertCell(1)
        var kolom_nama_produk = baris.insertCell(2)
        var kolom_jenis_produk = baris.insertCell(3)
        var kolom_harga = baris.insertCell(4)
        var kolom_stok = baris.insertCell(5)

        kolom_no.innerHTML = no
        kolom_kode_produk.innerHTML = kode_produk
        kolom_nama_produk.innerHTML = nama_produk
        kolom_jenis_produk.innerHTML = jenis_produk
        kolom_harga.innerHTML = harga_produk
        kolom_stok.innerHTML = stok

    }

})
</script>