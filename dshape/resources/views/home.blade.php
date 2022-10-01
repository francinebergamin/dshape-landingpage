<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/tailwind.css')

  <!-- FA Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <!-- Raleway -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100&family=Raleway:ital,wght@0,400;0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>DShape</title>
</head>

<body class="font-raleway max-h-screen max-w-screen bg-cover dark:bg-stone-900 bg-zinc-200">
  <header class="z-50 flex justify-center top-0 sm:px-8 py-8 fixed w-full h-auto bg-stone-900 bg-opacity-95 backdrop-blur-sm">
    <nav id="menu">
      <ul class="inline-flex gap-8 sm:gap-14 tracking-wider uppercase dark:text-zinc-100 text-neutral-900 text-sm sm:text-2xl">
        <li class=" w-fit m-0 p-0"><a href="#" class="hover:text-green-400">Início</a></li>
        <li class=" w-fit m-0 p-0"><a href="#" class="hover:text-green-400">Como funciona</a></li>
        <li class=" w-fit m-0 p-0"><a href="#" class="hover:text-green-400">Recomendar</a></li>
      </ul>
    </nav>
  </header>

  <main>

    <section id="introductionWrapper" class="mt-28 sm:m-28 flex-col lg:flex-row flex items-center sm:gap-8">
      <section id="ad" class="flex-2 text-center w-full">

        <h1 class="text-6xl sm:text-8xl md:text-9xl  bg-clip-text text-transparent bg-gradient-to-b text-un from-lime-100 to-green-500 italic tracking-wide uppercase font-black mb-2">
          Dshape
        </h1>

        <blockquote class="w-auto mb-12 text-4xl text-slate-100 font-bold">
          O que não te mata, te faz mais
          <span class="text-center mt-2 sm:text-start before:block before:absolute before:-inset-0.5 before:-skew-y-2 px-2 before:bg-green-500 relative inline-block">
            <span class="relative dark:text-neutral-900 text-slate-100">forte!</span>
          </span>
        </blockquote>

        <p class="dark:text-zinc-100 text-neutral-900 text-md 2xl:text-2xl">
          Lorem ipsum dolor sit amet. Ad veritatis molestias voluptas
          tempore et voluptatibus suscipit qui reiciendis beatae.
          Quo voluptatem enim qui modi totam quo voluptas impedit
          et quia harum aut animi vero et sapiente galisum.
          Et pariatur repellendus id consectetur vero et dolores lorem
          voluptas et repellendus dolorem in molestiae veniam.
        </p>
      </section>

      <div id="rightImg" class="flex-2 m-0">
        <img class="dark:invert w-full h-full object-cover hidden lg:block" src="{{ asset('img/monstro.svg') }}">
      </div>
    </section>

    <section id="explanationWrapper" class="flex flex-col bg-stone-800 p-12">

      <section id="explanation" class="flex-2">
        <p class="dark:text-zinc-100 text-neutral-900 font-bold text-4xl text-center">
          Cadastre-se ou entre agora!
        </p>

        <div class="mt-10 flex gap-10 justify-center flex-1 ">
         
        <button class="text-2xl shadow-neutral-900 hover:shadow-black shadow uppercase ring-green-500 rounded-md border-2 transition-colors border-green-400 border-b-green-900 tracking-wide p-4 text-green-400 ring-opacity-80 bg-opacity-5 bg-stone-900 hover:bg-green-500 hover:border-t-green-300 hover:border-transparent hover:text-white hover:border-b-green-900 hover:ring-inset hover:border-b-4 hover:border-l-0 hover:border-r-0 w-48">Cadastrar</button>
          <button class="text-2xl shadow-neutral-900 hover:shadow-black shadow uppercase ring-green-500 rounded-md border-2 transition-colors border-green-400 border-b-green-900 tracking-wide p-4 text-green-400 ring-opacity-80 bg-opacity-5 bg-stone-900 hover:bg-green-500 hover:border-t-green-300 hover:border-transparent hover:text-white hover:border-b-green-900 hover:ring-inset hover:border-b-4 hover:border-l-0 hover:border-r-0 w-48">Entrar</button>
        </div>

      </section>

    </section>

    <section id="cadastro"></section>
  </main>

  <footer></footer>

  <script src="{{ asset('js/app.js') }}"></script>
</body>


</html>