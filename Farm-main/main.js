var percent = document.querySelector('.percent');
var progress = document.querySelector('.progress');
var count = 4;
var per = 16;
var loading = setInterval(animate, 50);

function animate() {
  if (count == 100 && per >= 294) {
    clearInterval(loading);
  } else {
    per = per + 3;
    count = count + 1;
    if (per > 294) {
      per = 294;
    }
    progress.style.width = per + 'px';
    percent.textContent = count + '%';
  }
}