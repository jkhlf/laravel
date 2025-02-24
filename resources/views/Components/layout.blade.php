<!DOCTYPE html>
<html lang="en" class="antialiased h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
<div>
  <header>
    <nav class="flex items-center justify-around" aria-label="Global">
      <div class="flex">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.entoin.com%2Fimages%2Fac7.jpg&f=1&nofb=1&ipt=693839ed9ef641302f5757662c543159a66171b795ce39cf3fb2155a1b497bd5&ipo=images" alt="Logo" class="h-8 w-auto">
      </div>
      <div class="lg:flex lg:gap-x-12">
        <x-nav-link href="/" :active="request()->is('/')">Home </x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')" >About </x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact </x-nav-link>
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
