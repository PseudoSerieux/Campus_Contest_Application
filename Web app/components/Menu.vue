<template>
      <v-card flat max-height="200" class="text-center" style="margin-top: -64px">

    <v-img
      :src="require('../static/nature_home.jpeg')"
      height="300"
      class="grey darken-4"
    />

    <v-spacer/>

    <v-btn
      color="#FF9439"
      elevation="0"
      height="90"
      class="title bold"
      dark
      style="margin-top: -45px"
    >
      Téléchargement
    </v-btn>

    <v-spacer/>
  </v-card>
</template>

<style>
.v-card > *:first-child:not(.v-btn):not(.v-chip), .v-card > .v-card__progress + *:not(.v-btn):not(.v-chip)
{
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
