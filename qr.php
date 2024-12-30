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
        <form action="create_link" method="POST" class="space-y-6">
            <div>
                <label for="original_url" class="block text-sm font-medium text-gray-700">URL du QRCode :</label>
                <input type="url" id="content" name="content" required placeholder="https://exemple.com"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- <?php if (isset($_SESSION['user_id'])): ?>
                <div>
                    <label for="custom_slug" class="block text-sm font-medium text-gray-700">Slug personnalisé (facultatif) :</label>
                    <input type="text" id="custom_slug" name="custom_slug" pattern="[a-zA-Z0-9_-]{3,30}"
                           title="3 à 30 caractères alphanumériques, -, _"
                           placeholder="exemple-slug"
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="expires_at" class="block text-sm font-medium text-gray-700">Expiration :</label>
                    <input type="datetime-local" id="expires_at" name="expires_at"
                           class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="is_public" name="is_public" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_public" class="ml-2 block text-sm text-gray-700">Rendre public</label>
                </div>
            <?php endif; ?> -->

            <!-- Resultat: image qrcode -->
            <div class="flex justify-center">
                <div id="qrcode" class="mt-6"></div>
            </div>

            <div class="text-center">
                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Raccourcir
                </button>
            </div>
        </form>

        <?php if (isset($_SESSION['short_url'])): ?>
            <div class="mt-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                <p>URL raccourcie : <a href="<?= htmlspecialchars($_SESSION['short_url']) ?>" class="text-blue-600 underline"><?= htmlspecialchars($_SESSION['short_url']) ?></a></p>
            </div>
            <?php unset($_SESSION['short_url']); ?>
        <?php endif; ?>
    </div>

</main>

<footer class="bg-white shadow mt-10">
    <div class="container mx-auto px-4 py-6 text-center text-gray-500">
    <?= date('Y') ?> Urls Kéwan.fr - Développé par <a href="https://kewan.fr" target="_blank" class="text-blue-600 hover:text-blue-500">Kéwan B</a>
    </div>
</footer>

  <script src="src/vendor/qrcode.js"></script>
  <script src="src/js/script.js"></script>
</body>
</html>