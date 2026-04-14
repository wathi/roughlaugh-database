@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en" data-theme="wireframe">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ラフｘラフデータベース - rough x laugh database -unoffical fans site-</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>

  <body>
    <x-nav />
    <main class="mx-auto p-8 min-h-screen">
      {{ $slot }}
    </main>
    <x-footer />
  </body>

</html>