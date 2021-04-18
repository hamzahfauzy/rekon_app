const flashdata = $('.flashdata-success').data('flashdata');
const flashdatafail = $('.flashdata-fail').data('flashdata');


if (flashdata) {
    Swal.fire(
        'Berhasil!',
        'Data berhasil disimpan!',
        'success'
      )
}
if (flashdatafail) {
    Swal.fire(
        'Gagal!',
        'Data tidak ditemukan!',
        'error'
      )
}