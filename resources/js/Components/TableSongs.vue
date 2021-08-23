<template lang="pug">
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
    tr.hover_cursor-pointer.hover_bg-gray-light(v-for="(song, index) in playlist.songs" :key="song.id")
      td.p-3(@click="playSong(index)")
        svg.h-6.fill-current.text-white(height="32" role="img" width="32" viewBox="0 0 24 24")
          polygon(points="21.57 12 5.98 3 5.98 21 21.57 12")
      td {{ song.name }}
      td {{ song.artist }}
      td {{ song.algum }}
      td May 25, 2021
      td {{ song.duration }}
</template>

<script>
export default {
  props: {
    playlist: Array,
  },
  methods: {
    playSong(index) {
      emitter.emit('play', { playlist: this.playlist, index: index })
    }
  }
}
</script>
