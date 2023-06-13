$("#simpan").click(function(){
    var kode_produk = $("#kode_produk").val()
    if (kode_produk == "") {
        $("#lihat_kode_produk").text("kode produk masih kosong")
    }else{
        $("#lihat_kode_produk").text("")
    }
    
    var nama_produk = $("#nama_produk").val()
    if (nama_produk == "") {
        $("#lihat_nama_produk").text("nama produk masih kosong")
    }else{
        $("#lihat_nama_produk").text("")
    }
    
    var jenis_produk = $("#jenis_produk").val()
    if (jenis_produk == "") {
        $("#lihat_jenis_produk").text("jenis produk masih belum dipilih")
    }else{
        $("#lihat_jenis_produk").text("")
    }
    
    var harga_produk = $("#harga_produk").val()
    if (harga_produk == "") {
        $("#lihat_harga_produk").text("harga produk masih kosong")
    }else{
        $("#lihat_harga_produk").text("")
    }
    var harga_produk = $("#harga_produk").val()
    if (harga_produk == "") {
        $("#lihat_harga_produk").text("harga produk masih kosong")
    }else{
        $("#lihat_harga_produk").text("")
    }
    var stok_produk = $("#stok_produk").val()
    if (stok_produk == "") {
        $("#lihat_stok_produk").text("stok produk tinggal dikit")
    }else{
        $("#lihat_stok_produk").text("")
    }

    if (kode_produk!=""&& nama_produk !="" && jenis_produk !=
    ""&& harga_produk !=""&& stok != "" ){
        $("notif").html(`
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
  <strong>add succesfully</strong> data berhasil ditambahkan
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        
        `)
    }


})
        


    