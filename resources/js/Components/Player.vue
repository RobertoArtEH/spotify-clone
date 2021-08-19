<template>
  <footer class="flex items-center bg-gray-700 p-3">
    <!-- Song -->
    <div class="flex gap-6 flex-1">
      <div>
        <img class="hidden md:block h-full" src="https://gcdn.emol.cl/los-90/files/2018/12/Nirvana-cover1.jpg" alt="" width="56">
      </div>
      <div class="flex gap-6 items-center">
        <div>
          <a href="#" class="no-underline text-white block">Smells Like Teen Spirit</a>
          <a href="#" class="no-underline text-white">Nirvana</a>
        </div>
        <div>
          <button class="border-none bg-none text-white" role="switch" aria-label="Guardar en biblioteca">♥</button>
        </div>
      </div>
    </div>

    <!-- Player -->
    <div class="flex-1">
      <div class="flex flex-col gap-1">
        <!-- Buttons -->
        <div class="flex gap-4 justify-center">
          <button class="border-none bg-transparent text-white rounded">⏮</button>
          <button class="border-none bg-transparent text-white rounded">▶</button>
          <button class="border-none bg-transparent text-white rounded">⏭</button>
        </div>

        <!-- Progress bar -->
        <div class="flex items-center gap-2">
          <span class="relative top-px leading-none">0:00</span>
          <div class="bg-gray-800 w-full h-2 rounded relative">
            <div class="bg-gray-400 rounded h-full inline-block absolute w-6/12"></div>
          </div>
          <span class="relative top-px leading-none">5:01</span>
        </div>
      </div>
    </div>

    <!-- Actions -->
    <div class="flex-1"></div>
  </footer>
</template>

<script>
export default {
  
}
</script>