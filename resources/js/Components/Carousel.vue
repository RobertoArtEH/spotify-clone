<template lang="pug">
.container.ml-8.text-white
    .my-4
        h3.text-2xl.font-bold Welcome
    .my-4
        h3.text-2xl.font-bold Your playlists
    .flex.flex-wrap.space-x-6
        .my-1.px-1.w-25(v-for="playlist in playlists.user" :key="playlist.id")
            Card(:info="playlist")

    .my-4
        h3.text-2xl.font-bold Made for you
    .flex.flex-wrap.space-x-6
        .my-1.px-1.w-25(v-for="i in playlists.public" :key="i.id")
            article.overflow-hidden.rounded-lg.shadow-lg.bg-gray-dark.p-4.w-48
                a(href="#")
                    img.block.h-40.w-40.rounded-lg(alt="Placeholder" :src="i.image")

                header.flex.items-center.justify-between.leading-tight.mt-4.mb-2
                    h1.text-xl
                        a.no-underline.no-underline.font-bold(href="#") {{ i.name }}

                footer.flex.items-center.justify-between.leading-none
                    a.flex.items-center.no-underline.no-underline(href="#")
                        p.text-sm.break-words.line-clamp-2 {{ i.description }}

    .my-4
        h3.text-2xl.font-bold Made for you
    .flex.flex-wrap.space-x-6.mb-8
        .my-1.px-1.w-25(v-for="i in playlists.public" :key="i.id")
            article.overflow-hidden.rounded-lg.shadow-lg.bg-gray-dark.p-4.w-48
                a(href="#")
                    img.block.h-40.w-40.rounded-lg(alt="Placeholder" :src="i.image")

                header.flex.items-center.justify-between.leading-tight.mt-4.mb-2
                    h1.text-xl
                        a.no-underline.no-underline.font-bold(href="#") {{ i.name }}

                footer.flex.items-center.justify-between.leading-none
                    a.flex.items-center.no-underline.no-underline(href="#")
                        p.text-sm.break-words.line-clamp-2 {{ i.description }}
</template>

<script>
import Card from '@/Components/Card'

export default {
    components: { Card },
    props: {
        playlists: Object,
    },
}
</script>