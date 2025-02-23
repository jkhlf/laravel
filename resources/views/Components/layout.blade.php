<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
<div class="bg-white">
  <header>
    <nav class="flex items-center justify-around" aria-label="Global">
      <div class="flex">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.entoin.com%2Fimages%2Fac7.jpg&f=1&nofb=1&ipt=693839ed9ef641302f5757662c543159a66171b795ce39cf3fb2155a1b497bd5&ipo=images" alt="Logo" class="h-8 w-auto">
      </div>
      <div class="lg:flex lg:gap-x-12">
        <a href="/" class="text-sm font-semibold text-gray-900">Home</a>
        <a href="/about" class="text-sm font-semibold text-gray-900">About</a>
        <a href="/contact" class="text-sm font-semibold text-gray-900">Contact</a>
      </div>
    </nav>   
  </header>

  <div class="relative isolate px-6 pt-14 lg:px-8">
    <main class="max-w-3xl mx-auto">
      <h2 class="text-2xl font-bold text-gray-900 mb-6"> {{ $namesection }}</h2>
      {{ $slot }}
    </main>
  </div>
</div>

</body>
</html>
