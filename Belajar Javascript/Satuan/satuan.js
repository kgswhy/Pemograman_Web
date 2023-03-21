function condisional(){
  const hargaPerUnit = prompt("Masukkan harga per unit:");
  const hargaPerUnitNumber = parseFloat(hargaPerUnit);
  
  if (hargaPerUnitNumber >= 0) {
    const jumlahUnit = prompt("Masukkan jumlah unit:");
    const jumlahUnitNumber = parseFloat(jumlahUnit);
  
    if (jumlahUnitNumber >= 0) {
      const totalHarga = hargaPerUnitNumber * jumlahUnitNumber;
      swal({
          text: `Total harga: ${totalHarga} rupiah`,
          icon: 'success',
        })
    } else {
      swal({
          text: 'Jumlah unit tidak valid',
          icon: 'warning'
        });
    }
  } else {
      swal({
          text: 'Jumlah harga tidak valid',
          icon: 'warning'
        });;
  }
  
  }