<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/tailwind.css')

  <!-- Raleway -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100&family=Raleway:ital,wght@0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DShape</title>
</head>


<body class="overflow-hidden bg-fixed bg-center mx-20 font-raleway w-screen h-screen bg-gradient-to-tl from-[#000000] to-[#13101B] bg-cover bg-no-repeat">

  <!-- logo -->
  <header class="
    flex
    mb-8
    h-40
    max-h-40
    items-center
    justify-start
    gap-8">

    <p class="text-zinc-100 text-3xl">logo de milhõe$$</p>
  </header>

  <!-- <svg class="z-10 overflow-hidden flex w-auto fixed md:hidden sm:hidden" viewBox="0 250 610 1080" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 1280L550.835 0H782V1080H0Z" fill="#B04AFF" />
    <path d="M194 1080L600.909 0H893V1080H194Z" fill="#8F47EA" />
    <path d="M400 900L616.791 0H910V1080H400Z" fill="#8441DA" />
  </svg> -->

  <main class="z-20  flex flex-col justify-start w-auto h-auto">
    <!-- título e subtítulo -->
    <div class="">
      <h2 class="
        text-8xl
        text-transparent
        bg-clip-text
        font-black
        uppercase
        bg-gradient-to-tl
        from-purple-700
        to-purple-500">
        DShape
      </h2>

      <h3 class="
        text-6xl
        uppercase
        italic
        tracking-[0.3em]
        text-transparent
        bg-clip-text
        font-black
        bg-gradient-to-r
        from-emerald-400
        to-violet-500">
        Fala por mim
      </h3>
    </div>

    <!-- frase motivacional -->
    <div class="mt-24 text-zinc-100 leading-[134.9%] text-[2rem]">
      <p>O maior prazer na vida é fazer o que as</p>
      <p>pessoas falam que você não consegue.</p>
    </div>

    <!-- formulário de cadastro -->
      <div class="flex text-zinc-100">
        <p class="mt-14 text-3xl">Conquiste isso com o <span class="font-extrabold text-purple-700">Dshape</span></p>
      </div>

      <!-- input -->
      <form name="singup" action="">
        <div class="flex flex-col font-gothic font-semibold pt-8">
          <input class="
          p-5
          max-w-xl
          max-h-14
          rounded-sm
          text-lg
          placeholder:text-lg
          placeholder:text-zinc-700" type="email" placeholder="Email">

          <input class="
          mt-3
          p-5
          max-w-xl
          h-14
          rounded-sm
          text-lg
          placeholder:text-lg
          placeholder:text-zinc-700" type="password" placeholder="Senha">

          <button type="submit" class="
          mt-8
          uppercase
          text-xl
          backdrop-blur-sm
          border-opacity-70
          border-[0.2rem]
          border-zinc-900
          bg-opacity-10
          tracking-widest
          text-zinc-100
          rounded-sm
          bg-gradient-to-t
          from-purple-700
          to-purple-500
          font-regular
          w-fit
          h-fit
          py-4
          px-12">
            Virar uma lenda!</button>
        </div>


    </form>


  </main>

  <!-- seta para descer -->
  <footer>

  </footer>


</body>

</html>