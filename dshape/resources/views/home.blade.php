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
  <header class="z-50 flex justify-center top-0 py-8 fixed w-full h-auto bg-stone-900 bg-opacity-95 backdrop-blur-sm">
    <nav id="menu">
      <ul class="inline-flex gap-28 tracking-wider uppercase dark:text-zinc-100 text-neutral-900 text-2xl">
        <li class="w-fit m-0 p-0"><a href="#" class="hover:text-green-500">Início</a></li>
        <li class="w-fit m-0 p-0"><a href="#" class="hover:text-green-500">Como funciona</a></li>
        <li class="w-fit m-0 p-0"><a href="#" class="hover:text-green-500">Recomendar</a></li>
      </ul>
    </nav>
  </header>

  <main class="mt-32 m-10 sm:m-32">

    <section id="introductionWrapper" class="flex-col lg:flex-row flex items-center sm:gap-8">
      <section id="ad" class="flex-2 text-center w-full">

          <h1 class="text-6xl sm:text-8xl  bg-clip-text text-transparent bg-gradient-to-b from-lime-400 to-green-500 italic tracking-wider uppercase font-black mb-2">
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

      <section id="rightImg" class="flex-2 m-0">
        <img class="dark:invert w-full h-full object-cover hidden lg:block" src="{{ asset('img/monstro.svg') }}">
      </section>
    </section>

    <section id="explanationWrapper" class="flex flex-col mt-28">

      <section id="explanation" class="flex-1">
        <p class="dark:text-zinc-100 text-neutral-900 font-normal text-2xl text-center">
          Lorem ipsum dolor sit amet. Ad veritatis molestias voluptas
          tempore et voluptatibus suscipit qui reiciendis beatae.
          Quo voluptatem enim qui modi totam quo voluptas impedit
          et quia harum aut animi vero et sapiente galisum.
          Et pariatur repellendus id consectetur vero et dolores lorem
          voluptas et repellendus dolorem in molestiae veniam.
        </p>
      </section>

    </section>

    <section id="cadastro"></section>
  </main>

  <footer></footer>

  <script src="{{ asset('js/app.js') }}"></script>
</body>


</html>