const size = 300;

const contentEl = document.querySelector("#content");
const qrCodeEl = document.querySelector("#qrcode");

var qrType = document.querySelector("#qrType");

// var qr;

contentEl.addEventListener("input", (e) => {
  const value = e.target.value;
  
  // qrCodeEl.innerHTML = "";
  // const qr = new QRCode(qrCodeEl, {
  //   text: value,
  //   width: size,
  //   height: size,
  // });

  generateQRCode(value);

});

function generateQRCode(value) {
  qrCodeEl.innerHTML = "";
  console.log(value);
  const qr = new QRCode(qrCodeEl, {
    text: value,
    width: size,
    height: size,
  });
}

function generateTextForQRCode() {
  const type = qrType.value ? qrType.value : "text";

  let value = contentEl.value;

  switch (type) {
    // case "text":

    //   generateQRCode(value);
      
    //   break;
    
    case "url":

      console.log(value.startsWith("https"));
      
      if (!value.startsWith("https")) {
        value = "https://" + value;
      }
      
      generateQRCode(value);
      break;
  
    default:
      break;
  }

  // generateQRCode(value);
}

// new QRCode(document.querySelector("#qrcode"), {
// text: href,
// width: size,
// height: size,

// // colorDark: "#000014",
// // colorLight: "#0099ff"
// });
