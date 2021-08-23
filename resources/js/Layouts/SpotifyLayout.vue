<template lang="pug">
.bg-gray-darkest.w-screen.h-screen.grid.auto-cols-auto.grid-rows-1
  Head(title="Spotify")
  .flex
    Sidebar
    .overflow-auto.overflow-x-hidden.w-full
      slot
  .flex
    Player
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Player from '@/Components/Player'
import Sidebar from '@/Components/Sidebar'

export default {
  components: {
    Head,
    Player,
    Sidebar
  },
}
</script>
