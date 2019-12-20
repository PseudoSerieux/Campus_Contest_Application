<template>
  <v-app>
    <Menu style="z-index: 1" />
    <v-layout row wrap style="margin-top: 200px; z-index: 0">
      <v-flex offset-sm10 sm1>
        <v-layout row wrap>
          <v-flex>
            <v-img
              width="36"
              height="36"
              :src="require('../static/logo_twitter.jpg')"
            />
          </v-flex>
          <v-flex>
            <v-img
              width="37"
              height="36"
              :src="require('../static/logo-insta.png')"
            />
          </v-flex>
          <v-flex>
            <v-img
              width="36"
              height="36"
              :src="require('../static/logo_Facebook.png')"
            />
          </v-flex>
        </v-layout>
      </v-flex>
    </v-layout>
  </v-app>
</template>

<script>
import Menu from '../components/Menu'

export default {
  components: {
    Menu
  },
  data () {
    return {
    }
  }
}
</script>
