
function condisional(){
  let nama = prompt('Masukan Nama?')
  let umur = prompt('Masukan Umur?');
  if(nama == "" && umur == ""){
    swal({
      text: 'Diharapkan untuk mengisi nama dan umur terlebih dahulu',
      icon: 'warning'
    })
  } else if(nama != "" && umur <= 5){
    swal({
      text: `${nama} adalah balita`,
      icon: 'success',
    })
  } else if(nama != "" && umur > 5 && umur <= 13){
    swal({
      text: `${nama} adalah Anak-anak`,
      icon: 'success',
    })
  } else if(nama != "" && umur > 13 && umur <= 17){
    swal({
      text: `${nama} adalah Remaja`,
      icon: 'success',
    })
  } else if(nama != "" && umur > 17 && umur <= 50){
    swal({
      text: `${nama} adalah Dewasa`,
      icon: 'success',
    })
  } else if(nama != "" && umur > 50 ){
    swal({
      text: `${nama} adalah Lansia`,
      icon: 'success',
    })
  }
} 
