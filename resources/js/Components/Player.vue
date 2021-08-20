<template lang="pug">
footer.flex.flex-1.items-center.bg-gray-dark.p-3
  //- Song info
  .flex.gap-6.flex-1
    div
      img.hidden.md_block.h-full(src="https://gcdn.emol.cl/los-90/files/2018/12/Nirvana-cover1.jpg" alt="Song image" width="56")
    .flex.gap-6.items-center
      div
        a(href="#").no-underline.text-white.block Smells Like Teen Spirit
        a(href="#").no-underline.text-gray-lightest.text-sm Nirvana
      div
        button.border-none.bg-none(role="switch" aria-label="Guardar en biblioteca")
          svg.fill-current.text-white(role="img" height="16" width="16" viewBox="0 0 16 16")
            path(d="M13.764 2.727a4.057 4.057 0 00-5.488-.253.558.558 0 01-.31.112.531.531 0 01-.311-.112 4.054 4.054 0 00-5.487.253A4.05 4.05 0 00.974 5.61c0 1.089.424 2.113 1.168 2.855l4.462 5.223a1.791 1.791 0 002.726 0l4.435-5.195A4.052 4.052 0 0014.96 5.61a4.057 4.057 0 00-1.196-2.883zm-.722 5.098L8.58 13.048c-.307.36-.921.36-1.228 0L2.864 7.797a3.072 3.072 0 01-.905-2.187c0-.826.321-1.603.905-2.187a3.091 3.091 0 012.191-.913 3.05 3.05 0 011.957.709c.041.036.408.351.954.351.531 0 .906-.31.94-.34a3.075 3.075 0 014.161.192 3.1 3.1 0 01-.025 4.403z")
            //- path(d="M13.797 2.727a4.057 4.057 0 00-5.488-.253.558.558 0 01-.31.112.531.531 0 01-.311-.112 4.054 4.054 0 00-5.487.253c-.77.77-1.194 1.794-1.194 2.883s.424 2.113 1.168 2.855l4.462 5.223a1.791 1.791 0 002.726 0l4.435-5.195a4.052 4.052 0 001.195-2.883 4.057 4.057 0 00-1.196-2.883z")

  //- Player
  .flex-1
    .flex.flex-col.gap-1
      //- Buttons
      .flex.gap-4.justify-center
        button.border-none.bg-transparent
          svg.fill-current.text-gray-lightest(role="img" height="16" width="16" viewBox="0 0 16 16")
            path(d="M13 2.5L5 7.119V3H3v10h2V8.881l8 4.619z")
        button.border-white.rounded-full.bg-white.p-2
          svg.fill-current.text-gray-dark(role="img" height="16" width="16" viewBox="0 0 16 16")
            path(d="M3 2h3v12H3zm7 0h3v12h-3z")
            //- path(d="M4.018 14L14.41 8 4.018 2z")
        button.border-none.bg-transparent
          svg.fill-current.text-gray-lightest(role="img" height="16" width="16" viewBox="0 0 16 16")
            path(d="M11 3v4.119L3 2.5v11l8-4.619V13h2V3z")

      //- Progress bar
      .flex.items-center.gap-2.text-white
        span.relative.top-px.leading-none 0:00
        .bg-gray-light.w-full.h-1.rounded.relative
          .bg-gray-lightest.rounded.h-full.inline-block.absolute.w-full
        span.relative.top-px.leading-none 5:01

  //- Actions
  .flex-1
</template>

<script>
export default {
  
}
</script>
