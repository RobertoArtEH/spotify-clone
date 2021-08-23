<template lang="pug">
.container.ml-8.text-white.my-24
    h3.text-2xl.font-bold Welcome
    .my-4
        h3.text-2xl.font-bold Your playlists
    .flex.flex-wrap.space-x-6
        .my-1.px-1.w-25(v-for="playlist in playlists.user" :key="playlist.id")
            Link(:href="`/playlist/${playlist.id}`")
                Card(:info="playlist")

    .my-4
        h3.text-2xl.font-bold Made for you
    .flex.flex-wrap.space-x-6
        .my-1.px-1.w-25(v-for="playlist in playlists.public" :key="playlist.id")
            Link(:href="`/playlist/${playlist.id}`")
                Card(:info="playlist")

    .my-4
        h3.text-2xl.font-bold Your top mixes
    .flex.flex-wrap.space-x-6
        .my-1.px-1.w-25(v-for="playlist in playlists.public" :key="playlist.id")
            Link(:href="`/playlist/${playlist.id}`")
                Card(:info="playlist")
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Card from '@/Components/Card'

export default {
    components: { Link, Card },
    props: {
        playlists: Object,
    },
}
</script>