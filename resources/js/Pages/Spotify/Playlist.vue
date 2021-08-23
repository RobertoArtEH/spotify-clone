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

      TableSongs(v-if="playlist.songs.length" :playlist="playlist")
</template>

<script>
  import SpotifyLayout from '@/Layouts/SpotifyLayout'
  import TableSongs from '@/Components/TableSongs'

  export default {
    components: {
      SpotifyLayout,
      TableSongs,
    },
    props: {
      playlist: Object,
    },
  }
</script>
