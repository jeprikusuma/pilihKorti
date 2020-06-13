const btn = document.querySelector(".btntmpl"),
  hit = document.querySelector(".hit h1"),
  hasil = document.querySelector(".hasil");

btn.addEventListener("click", () => {
  btn.style.opacity = "0";
  btn.style.pointerEvents = "none";
  hit.style.opacity = "1";
  let num = 3;
  let run = setInterval(() => {
    num = num - 1;
    hit.innerHTML = num;
  }, 1000);

  setTimeout(() => {
    hit.style.opacity = "0";
    hasil.style.opacity = "1";
    clearInterval(run);
  }, 3000);
});
