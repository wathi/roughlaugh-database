@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en" data-theme="wireframe">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ラフラフの非公式ファンサイトです。過去出演、インターフュー、ライブ、関連情報を記載しています。
    rough x laugh unofficial fans site. List media appearances, interviews, live performances, and related information.">
    <title>ラフｘラフデータベース - rough x laugh database -unofficial fans site-</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script async src="https://platform.twitter.com/widgets.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XR5F6K51BL"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XR5F6K51BL');
    </script>
  </head>

  <body>
    <x-nav />
    <main class="mx-auto p-8 min-h-screen">
      {{ $slot }}
    </main>
    <x-footer />
  </body>

</html>