$(document).ready(function () {
    $.ajax({
        url: base_url + "dashboard/skck/data",
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
                let ttl = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].ttl);
                let jk = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].jk);
                let agama = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].agama);
                let kewarganegaraan = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].kewarganegaraan);
                let perkawinan = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].perkawinan);
                let pekerjaan = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].pekerjaan);
                let alamat = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].alamat);
                let status = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].status);
                let surat = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].surat);
                let buttonEdit = $('<button type="button" class="btn bg-gradient-success mb-0"></button>').text('Edit').attr('id', respond[i].id);
                buttonEdit.click(function () {
                    $('#form')[0].reset();
                    var id = $(this).attr('id');
                    $.ajax({
                        url: base_url + 'dashboard/skck/update/' + id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (respond) {
                            console.log(respond.data);

                            $('[name="id"]').val(respond.data.id);
                            $('[name="tgl"]').val(respond.data.tgl);
                            $('[name="nama"]').val(respond.data.nama);
                            $('[name="nik"]').val(respond.data.nik);
                            $('[name="ttl"]').val(respond.data.ttl);
                            $('[name="jk"]').val(respond.data.jk);
                            $('[name="agama"]').val(respond.data.agama);
                            $('[name="kewarganegaraan"]').val(respond.data.kewarganegaraan);
                            $('[name="perkawinan"]').val(respond.data.perkawinan);
                            $('[name="pekerjaan"]').val(respond.data.pekerjaan);
                            $('[name="alamat"]').val(respond.data.alamat);
                            $('[name="status"]').val(respond.data.status);
                            $('[name="surat"]').val(respond.data.surat);


                            $('#exampleModal').modal('show');
                            $('.modal-title').text('Edit');
                            $('#pass').hide();
                            $('#pass2').hide();
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                            swal.fire({
                                icon: 'error',
                                title: errorThrown,
                                text: 'Error get data from ajax.'
                            })
                        }
                    });
                });
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
                                url: base_url + 'dashboard/skck/delete/' + id,
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
                row.append(no, tgl,
                    nama,
                    nik,
                    ttl,
                    jk,
                    agama,
                    kewarganegaraan,
                    perkawinan,
                    pekerjaan,
                    alamat,
                    status,
                    surat, buttonEdit, buttonDelete);
                tableBody.append(row);
            }
        }
    });
});