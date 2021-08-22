<template lang="pug">
.bg-gray-darkest.w-screen.h-screen.grid.auto-cols-auto.grid-rows-1
  .flex
    Sidebar
    .overflow-auto.overflow-x-hidden.w-full
      slot
  .flex
    Player
</template>

<script>
import Player from '@/Components/Player'
import Sidebar from '@/Components/Sidebar'

export default {
  components: {
    Player,
    Sidebar
  },
}
</script>
