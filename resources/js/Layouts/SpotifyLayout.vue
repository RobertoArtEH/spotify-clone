<template lang="pug">
.bg-gray-darkest.w-screen.h-screen.grid.auto-cols-auto.grid-rows-1
  .flex
    Sidebar
    Carousel
  .flex
    Player
</template>

<script>
import Player from '@/Components/Player'
import Sidebar from '@/Components/Sidebar'
import Carousel from '@/Components/Carousel'

export default {
  components: {
    Player,
    Sidebar,
    Carousel
  }
}
</script>
