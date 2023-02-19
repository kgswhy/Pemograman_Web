function condisional(){
let bil1 = parseInt(prompt("Masukkan bilangan pertama:"));
if (bil1 > 100) {
  bil1 = 100;
}

let bil2 = parseInt(prompt("Masukkan bilangan kedua:"));
if (bil2 > 100) {
  bil2 = 100;
}

let bil3 = parseInt(prompt("Masukkan bilangan ketiga:"));
if (bil3 > 100) {
  bil3 = 100;
}

const rataRata = (bil1 + bil2 + bil3) / 3;
const hasil = rataRata.toFixed(2)

if (rataRata >= 90) {
    swal({
        text: `Predikat A dengan nilai ${hasil}`,
      });
} else if (rataRata >= 80) {
    swal({
        text: `Predikat B dengan nilai ${hasil}`,
      });
} else if (rataRata >= 70) {
    swal({
        text: `Predikat C dengan nilai ${hasil}`,
      });
} else if (rataRata >= 60) {
    swal({
        text: `Predikat D dengan nilai ${hasil}`,
      });
} else {
    swal({
        text: `Predikat E dengan nilai ${rataRata}`,
      });
}

}