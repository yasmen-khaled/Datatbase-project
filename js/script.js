let popup = document.getElementById("popup");

function openPopup() {
  popup.classList.add("open-popup");
}

function closePopup() {
  popup.classList.remove("open-popup");
}

window.addEventListener('load', function() {
  // يتم إخفاء صفحة الانتظار وإظهار المحتوى الرئيسي بعد تحميل الصفحة بالكامل
  document.getElementById("loading").style.display = "none";
  document.getElementById("content").style.display = "block";
});