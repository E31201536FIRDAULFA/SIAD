$(document).ready(function () {
    $.ajax({
        url: base_url + "dashboard/SPU/riwayatspu",
        type: "GET",
        dataType: "json",
        success: function (respond) {
            let tableBody = $('#table tbody');
            let number = 1;
            for (let i = 0; i < respond.length; i++) {
                let row = $('<tr></tr>');
                let no = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(number++);
                let tgl = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].tgl);
                let nama = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].nama);
                let nik = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].nik);
                let jk = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].jk);
                let ttl = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].ttl);
                let alamat = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].alamat);
                let nama_usaha = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].nama_usaha);
                let jenis_usaha = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].jenis_usaha);
                let alamat_usaha = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].alamat_usaha);
                let status = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].status);
                let suratspu = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].suratspu);

                let buttonDelete = $('<button type="button" class="btn bg-gradient-danger mb-0"></button>').text('Delete').attr('id', respond[i].id);
                buttonDelete.click(function () {
                    var id = $(this).attr('id');
                    Swal.fire({
                        title: 'Anda yakin?',
                        text: 'Aksi ini tidak dapat dipulihkan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!'
                    }).then(function (respond) {
                        if (respond.value) {
                            var base_url = 'http://localhost:8080/';
                            $.ajax({
                                url: base_url + 'dashboard/SPU/delete/' + userid,
                                type: 'GET',
                                dataType: 'JSON',
                                success: function (respond) {
                                    swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Surat berhasil dihapus!',
                                        showConfirmButton: false,
                                        timer: 2000
                                    })
                                        .then(function () {
                                            location.reload();
                                        });
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    swal.fire(thrownError, "Ada yang salah! coba lagi beberapa saat.", "error");
                                }
                            });
                        };
                    });
                    var modal = document.getElementById('exampleModal');
                    modal.addEventListener('hidden.bs.modal', function (event) {
                        location.reload();
                    })
                });
                row.append(no,
                    tgl,
                    nama,
                    nik,
                    jk,
                    ttl,
                    alamat,
                    nama_usaha,
                    jenis_usaha,
                    alamat_usaha,
                    status,
                    suratspu, buttonDelete);
                tableBody.append(row);
            }
        }
    });
});