const size = 300;

const contentEl = document.querySelector("#content");
const qrCodeEl = document.querySelector("#qrcode");
const qrcode_url = document.querySelector("#qrcode_url");
const downloadBtn = document.querySelector("#download");

var qrType = document.querySelector("#qrType");

contentEl.addEventListener("input", (e) => {
  const value = e.target.value;

  window.history.pushState({}, "", `?${value}`);

  generateQRCode(value);

  return true;
});

document
.getElementById("download")
.addEventListener("click", function () {
  const qrImage = document.querySelector("#qrcode img");

  if (qrImage) {
    const link = document.createElement("a");
    link.href = qrImage.src;

    link.download = "qrcode.png"; 

    document.body.appendChild(link);

    link.click();

    document.body.removeChild(link);
  } else {
    alert("Image du QR Code non trouvée.");
  }

  return true;
});


const urlParams = window.location.search;
const content = urlParams.split("?")[1];

if (content) {
  contentEl.value = content;
  generateQRCode(content);
}

function generateQRCode(value = null) {

  if (!value) {
    value = contentEl.value;
  }

  qrCodeEl.innerHTML = "";
  const qr = new QRCode(qrCodeEl, {
    text: value,
    width: size,
    height: size,
  });

  qrcode_url.innerHTML = BASE_URL + value;
  qrcode_url.href = BASE_URL + value;
}
