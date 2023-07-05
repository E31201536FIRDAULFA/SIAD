function saveApbd() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const penyelenggara = $("#penyelenggara").val();
    const jenis = $("#jenis").val();
    const anggaran = $("#anggaran").val();
    const sumberdana = $("#sumberdana").val();
    const tgl_pembahasan = $("#tgl_pembahasan").val();
    const uraian = $("#uraian").val();
    const jml = $("#jml").val();
    const satuan = $("#satuan").val();
    const harga = $("#harga").val();
    const anggarankeluar = $("#anggarankeluar").val();
    const ket = $("#ket").val();

    if (id) {
        url = base_url + 'dashboard/apbd/update/' + id;
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (penyelenggara.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Penyelenggara harus diisi!'
            });
        } else if (jenis.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Jenis harus diisi!'
            });
        } else if (anggaran.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Anggaran harus diisi!'
            });
        } else if (sumberdana.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Sumber Dana harus diisi!'
            });
        } else if (tgl_pembahasan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Tanggal Pembahasan harus diisi!'
            });
        } else if (uraian.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'uraian harus diisi!'
            });
        } else if (jml.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Sumber Dana harus diisi!'
            });
        } else if (satuan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'satuan Pembahasan harus diisi!'
            });
        } else if (harga.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'harga harus diisi!'
            });
        } else if (anggarankeluar.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'anggarankeluar Pembahasan harus diisi!'
            });
        } else if (ket.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ket Pembahasan harus diisi!'
            });
        } else {
            $.ajax({ //tembak data ke db
                url: url,
                type: 'POST',
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function (respond) {
                    if (respond.status == true) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        }).then(function () {
                            location.reload();
                        });
                    } else if (respond.status == false) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.fire({
                        icon: 'error',
                        title: 'Terjadi error!',
                        text: 'Silahkan coba lagi.'
                    })
                }
            });
        }
    } else {
        url = base_url + 'dashboard/apbd';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (penyelenggara.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Penyelenggara harus diisi!'
            });
        } else if (jenis.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Jenis harus diisi!'
            });
        } else if (anggaran.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Anggaran harus diisi!'
            });
        } else if (sumberdana.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Sumber Dana harus diisi!'
            });
        } else if (tgl_pembahasan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Tanggal Pembahasan harus diisi!'
            });
        } else if (uraian.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'uraian harus diisi!'
            });
        } else if (jml.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Sumber Dana harus diisi!'
            });
        } else if (satuan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'satuan Pembahasan harus diisi!'
            });
        } else if (harga.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'harga harus diisi!'
            });
        } else if (anggarankeluar.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'anggarankeluar Pembahasan harus diisi!'
            });
        } else if (ket.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ket Pembahasan harus diisi!'
            });
        } else {
            $.ajax({
                url: url,
                type: 'POST',
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function (respond) {
                    if (respond.status == true) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        }).then(function () {
                            location.reload();
                        });
                    } else if (respond.status == false) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.fire({
                        icon: 'error',
                        title: 'Terjadi error!',
                        text: 'Silahkan coba lagi.'
                    })
                }
            });
        }
    }
}