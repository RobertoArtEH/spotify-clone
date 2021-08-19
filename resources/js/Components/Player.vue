<template lang="pug">
footer.flex.flex-1.items-center.bg-gray-dark.p-3
  //- Song info
  .flex.gap-6.flex-1
    div
      img.hidden.md_block.h-full(src="https://gcdn.emol.cl/los-90/files/2018/12/Nirvana-cover1.jpg" alt="" width="56")
    .flex.gap-6.items-center
      div
        a(href="#").no-underline.text-white.block Smells Like Teen Spirit
        a(href="#").no-underline.text-white Nirvana
      div
        button.border-none.bg-none.text-white(role="switch" aria-label="Guardar en biblioteca") ♥

  //- Player
  .flex-1
    .flex.flex-col.gap-1
      //- Buttons
      .flex.gap-4.justify-center
        button.border-none.bg-transparent.text-white.rounded ⏮
        button.border-none.bg-transparent.text-white.rounded ▶
        button.border-none.bg-transparent.text-white.rounded ⏭

      //- Progress bar
      .flex.items-center.gap-2.text-white
        span.relative.top-px.leading-none 0:00
        .bg-gray-ligth.w-full.h-1.rounded.relative
          .bg-gray-ligthest.rounded.h-full.inline-block.absolute.w-full
        span.relative.top-px.leading-none 5:01

  //- Actions
  .flex-1
</template>

<script>
export default {
  
}
</script>
