function condisional(){
  let nilai = 78;

if (nilai >= 90) {
  swal({
    text: `Predikat A dengan nilai ${nilai}`,
  });
} else if (nilai >= 80) {
  swal({
    text: `Predikat B dengan nilai ${nilai}`,
  });
} else if (nilai >= 70) {
  swal({
    text: `Predikat C dengan nilai ${nilai}`,
  });
} else if (nilai >= 60) {
  swal({
    text: `Predikat D dengan nilai ${nilai}`,
  });
} else {
  swal({
    text: `Predikat E dengan nilai ${nilai}`,
  });
}
}


