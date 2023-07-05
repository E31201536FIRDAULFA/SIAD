<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div class="card-header pb-0 justify-content-between align-items-center mb-3">
              <h6>List Pengajuan</h6>
              <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Buat Surat
              </button>
              <button type="button" class="btn btn-lg btn-warning btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#eksporpdf">
                Ekspor PDF
              </button>
            </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Surat Permintaan Pembayaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                      <!--POP UP TAMBAH PENGAJUAN-->
                        <div class="modal-body">
                            <form action="#" id="form">
                              <input type="text" name="id" id="id" hidden>
                             
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                </div>

                              

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Uraian</label>
                                  <input id="uraian" type="text" class="form-control" name="uraian">
                                </div>


                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Anggaran Pagu</label>
                                  <input id="anggaran" type="number" class="form-control" name="anggaran">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pencairan S/D Yg lalu</label>
                                  <input id="pencairan" type="number" class="form-control" name="pencairan">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Permintaan Sekarang</label>
                                  <input id="permintaan" type="number" class="form-control" name="permintaan">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Jml Sampai Saat Ini</label>
                                  <input id="jml" type="number" class="form-control" name="jml">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Sisa Dana</label>
                                  <input id="sisa" type="number" class="form-control" name="sisa">
                                </div>

                              

                                <div class="mt-3">
                                  <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" onclick="savespp()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                </div>

              


                <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-4">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead>
                    <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Anggaran Pagu</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pencairan S/D Sekarang</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Permintaan S/D Sekarang</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah S/D Saat Ini</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sisa Dana</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opsi</th>

                        </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($content as $data): ?>
                  <tr>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['tgl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['anggaran'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['pencairan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['permintaan'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['jml'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['sisa'] ?></span></td>
                  
                    <td class="align-middle text-center">

                      <button onclick="buttonEdit(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-info mb-0">
                        Edit
                      </button>
                      <button onclick="buttonDelete(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-danger mb-0">
                        Delete
                      </button>
                    </td>
                  </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/KEUANGAN/getapbd.js') ?>"></script>
<script src="<?= base_url('js/KEUANGAN/savespp.js') ?>"></script>
<script>
 

function buttonDelete(id) {
  Swal.fire({
    title: "Anda yakin?",
    text: "Aksi ini tidak dapat dipulihkan!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, Hapus!",
  }).then(function (respond) {
    if (respond.value) {
      var base_url = "http://localhost:8080/";
      $.ajax({
        url: base_url + "dashboard/spp/delete/" + id,
        type: "GET",
        dataType: "JSON",
        success: function (respond) {
          swal
            .fire({
              position: "top-end",
              icon: "success",
              title: "Surat berhasil dihapus!",
              showConfirmButton: false,
              timer: 2000,
            })
            .then(function () {
              location.reload();
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
          swal.fire(
            thrownError,
            "Ada yang salah! coba lagi beberapa saat.",
            "error"
          );
        },
      });
    }
  });
  var modal = document.getElementById("exampleModal");
  modal.addEventListener("hidden.bs.modal", function (event) {
    location.reload();
  });
}

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/apbd/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $('[name="id"]').val(respond.data.id);
      $('[name="tgl"]').val(respond.data.tgl);
      $('[name="anggaran"]').val(respond.data.anggaran);
      $('[name="pencairan"]').val(respond.data.pencairan);
      $('[name="permintaan"]').val(respond.data.permintaan);
      $('[name="jml"]').val(respond.data.jml);
      $('[name="sisa"]').val(respond.data.sisa);
      

      $("#exampleModal").modal("show");
      $(".modal-title").text("Edit");
    
     
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(jqXHR);
      swal.fire({
        icon: "error",
        title: errorThrown,
        text: "Error get data from ajax.",
      });
    },
  });
  $("#exampleModal").on("hidden.bs.modal", function () {
    location.reload();
  });
}


</script>
<?= $this->endSection() ?>