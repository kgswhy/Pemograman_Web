var namaSiswa = prompt("Masukkan nama anda");
while(!namaSiswa){
    alert('Harap memasukkan nama terlebih dahulu');
    var namaSiswa = prompt("Masukkan nama anda");
};
document.getElementById('name').innerHTML = namaSiswa;


var a = prompt("Masukkan Mata Pelajaran :");
while (!a) {
  alert('Mata Pelajaran harus diisi');
  a = prompt("Masukkan Mata Pelajaran :");
}
document.getElementById("mataPelajaran").innerHTML = a;

var b=prompt("Masukkan Nilai ulangan");
while (!b) {
    alert('Nilai Ulangan harus diisi!');
    var b=prompt("Masukkan Nilai ulangan");
  }if(b >= 100){
    b = 100;
  }
document.getElementById("nilaiUlangan").innerHTML = b;


var predikat = document.getElementById("predikatIndex");
if(b >= 90){
    predikat.innerHTML = "A";
}else if(b >= 80){
    predikat.innerHTML = "B";
}else if(b >= 70){
    predikat.innerHTML = "C"
}else if(b >= 60){
    predikat.innerHTML = "D";
}else{
    predikat.innerHTML = "E";
}
