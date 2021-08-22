<template lang="pug">
article.overflow-hidden.rounded-lg.shadow-lg.bg-gray-dark.p-4.w-48.h-full
  img.block.h-40.w-40.rounded-lg(:alt="`${info.name} cover`" :src="info.image")

  header.flex.items-center.justify-between.leading-tight.mt-4.mb-2
    h1.text-xl
      span.no-underline.no-underline.font-bold(href="#") {{ info.name }}

  footer.flex.items-center.justify-between.leading-none
    p.flex.items-center.no-underline.no-underline(href="#")
      span.text-sm.break-words.line-clamp-2 {{ info.description }}
</template>

<script>
export default {
  props: {
    info: Object,
  }
}
</script>