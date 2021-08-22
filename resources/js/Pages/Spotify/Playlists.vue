<template lang="pug">
div
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
      view: String,
    },
  }
</script>
