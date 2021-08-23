<template lang="pug">
Carousel(:playlists="playlists" v-if="playlists")
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
      playlists: Object,
    },
  }
</script>
