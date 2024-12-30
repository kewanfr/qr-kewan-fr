<!DOCTYPE html>
<html>
  <head>
    <title>QR Code Generator</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./src/css/style.css" />
  </head>
  <body
    class="justify-center items-center flex flex-col"
  >

  <h1 class="text-3xl font-bold text-center text-blue-600">
      Voici le QR Code de :
    </h1>
    <h2 class="text-2xl font-bold text-center mb-7" id="qrContent"></h2>

    <div id="qrcode"></div>

    <button
      id="download"
      class="mt-11 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
    >
      Télécharger
    </button>

    <script src="src/vendor/qrcode.js"></script>
    <script>
      const urlParams = window.location.search;

      const content = urlParams.split("?")[1];

      const downloadBtn = document.querySelector("#download");
      const qrContentText = document.querySelector("#qrContent");

      qrContentText.innerHTML = content;

      const qr = new QRCode(document.querySelector("#qrcode"), {
        text: content,
        width: 300,
        height: 300,
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
        });
    </script>
  </body>
</html>
