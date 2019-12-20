<template>
  <v-app>
    <Header style="z-index: 2; max-height: 100px;" />
    <Nuxt />
    <v-footer
      :fixed="fixed"
      app
    >
      <span>&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
import Header from '../components/Header'

export default {
  components: {
    Header
  },
  data () {
    return {
      clipped: false,
      fixed: false
    }
  }
}
</script>
