<template>
  <v-layout row wrap>
    <v-flex offset-sm1 sm1>
      <v-toolbar v-if="$route.path !== '/'" color="#FF9439" style="max-height: 64px; border-radius: 10px" dark>
        <v-spacer />

        <v-btn text height="100%" class="subtitle-1 bold" to="/"><v-icon>mdi-chevron-right</v-icon>Accueil</v-btn>

        <v-spacer />
      </v-toolbar>
    </v-flex>

    <v-flex offset-sm1 sm6>
      <v-toolbar color="#FF9439" style="max-height: 64px" dark>
        <v-spacer />

        <v-btn text height="100%" class="subtitle-1 bold" to="/discover">Découvrir l'application</v-btn>
        <v-btn text height="100%" class="subtitle-1 bold" to="/who">Qui sommes nous ?</v-btn>
        <v-btn text height="100%" class="subtitle-1 bold" to="/contact">Nous contacter</v-btn>

        <v-spacer />
      </v-toolbar>
    </v-flex>

    <v-flex offset-sm2 sm1 class="text-center">
      <v-card
        v-if="language === 'french'"
        v-on:click="language = 'english'"
        flat
        width="27"
        height="20"
        :img="require('../static/Drapeau_France.jpg')"
        class="mx-auto"
        style="top: 21px"
      />
      <v-card
        v-else
        v-on:click="language = 'french'"
        flat
        width="27"
        height="20"
        :img="require('../static/Drapeau_RU.png')"
        class="mx-auto"
        style="top: 21px"
      />
    </v-flex>

  </v-layout>
</template>

<script>
export default {
  data () {
    return {
      language: 'french'
    }
  }
}
</script>
