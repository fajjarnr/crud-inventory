const keyword = document.getElementById("keyword");
const search = document.getElementById("btn-search");
const container = document.getElementById("container");

keyword.addEventListener("keyup", function () {
  // objek ajax
  let xhr = new XMLHttpRequest();

  // cek ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      console.log("ajax ok");
      container.innerHTML = xhr.responseText;
    }
  };

  // get data
  xhr.open("GET", "/ajax/barang.php?keyword" + keyword.value, true);
  xhr.send();
});
