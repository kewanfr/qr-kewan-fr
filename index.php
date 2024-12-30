<!DOCTYPE html>
<html>
<head>
  <title>QR Code Generator</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./src/css/style.css">
</head>
<body  class="bg-gray-100 min-h-screen flex flex-col">
  <header class="bg-white shadow">
      <div class="container mx-auto px-4 py-6">
          <h1 class="text-3xl font-bold text-center text-blue-600">QRCode Générator</h1>
      </div>
  </header>


  <main class="flex-grow container mx-auto px-4 py-8">

    <div class="bg-white shadow-md rounded-lg p-6">
        <form  method="POST" class="space-y-6" 
        onsubmit="event.preventDefault();">

            <div>
                <label for="original_url" class="block text-sm font-medium text-gray-700">Texte ou URL du QRCode :</label>
                <input type="text" id="content" name="content" placeholder="https://exemple.com ou texte"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>


            <div class="flex justify-center flex-col items-center">
                <div id="qrcode" class="mt-6"></div>

                <button
                  id="download"
                  class="mt-11 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                >
                  Télécharger
                </button>
            </div>

            <!-- <div class="text-center">
                <button type="submit" onclick="generateQRCode()"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Génerer
                </button>
            </div> -->
        </form>

          <div class="mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
              <p>URL du QRCode : <a id="qrcode_url" href="" target="_blank" class="text-blue-600 underline"></a></p>
          </div>
    </div>

</main>

<footer class="bg-white shadow mt-10">
    <div class="container mx-auto px-4 py-6 text-center text-gray-500">
    <?= date('Y') ?> Urls Kéwan.fr - Développé par <a href="https://kewan.fr" target="_blank" class="text-blue-600 hover:text-blue-500">Kéwan B</a>
    </div>
</footer>

  <script src="src/vendor/qrcode.js"></script>
  <script src="src/js/base_url.js"></script>
  <script src="src/js/script.js"></script>
</body>
</html>