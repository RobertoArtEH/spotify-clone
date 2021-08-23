<template lang="pug">
.relative.h-80.bg-gradient-to-b.from-blue-600.to-gray-darkest
  template(v-if="playlist")
    .pl-8.text-white.py-24
      .flex.items-end
        img.w-60.h-60(:src="playlist.image")
        .ml-4
          h2.text-xl Playlist
          h1.text-8xl.font-bold.my-2 {{ playlist.name }}
          p(v-if="playlist.user") {{ playlist.user.name }} - 15 songs

      table.w-full.mt-12
        thead.border-collapse.border-b.border-gray-lightest.text-gray-lightest
          tr.text-left.uppercase.leading-9
            th.w-16
            th Title
            th Artist
            th Album
            th Date added
            th Duration
        tbody
          tr.hover_cursor-pointer.hover_bg-gray-light(v-for="song in playlist.songs" :key="song.id")
            td.p-3
              svg.h-6.fill-current.text-white(height="32" role="img" width="32" viewBox="0 0 24 24")
                polygon(points="21.57 12 5.98 3 5.98 21 21.57 12")
            td {{ song.name }}
            td {{ song.artist }}
            td {{ song.algum }}
            td May 25, 2021
            td {{ song.duration }}
</template>

<script>
  import SpotifyLayout from '@/Layouts/SpotifyLayout'
  import Carousel from '@/Components/Carousel'

  export default {
    components: {
      SpotifyLayout,
      Carousel
    },
    props: {
      playlist: Object,
    },
  }
</script>
