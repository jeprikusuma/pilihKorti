window.setTimeout("waktu()", 0);
function waktu() {
  const date = new Date();
  setTimeout("waktu()", 1000);
  const jam = date.getHours();
  let waktu;
  if (jam <= 10) {
    waktu = "Pagi";
  } else if (jam > 10 && jam <= 14) {
    waktu = "Siang";
  } else if (jam > 14 && jam <= 18) {
    waktu = "Sore";
  } else {
    waktu = "Malam";
  }
  return waktu;
}
let wt = waktu();
let typed = new Typed(".typed-words", {
  strings: ["", wt, " Memilih", " Datang"],
  typeSpeed: 80,
  backSpeed: 80,
  backDelay: 4000,
  startDelay: 1000,
  loop: true,
  showCursor: true
});
