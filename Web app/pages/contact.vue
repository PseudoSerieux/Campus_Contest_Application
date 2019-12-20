<template>
  <v-layout row wrap>
    <v-flex offset-sm3 sm6>
      <v-card>
        <v-card-title class="text-center justify-center py-6">
          <h1>Formulaire de contact</h1>
        </v-card-title>
        <v-card-text>
          <v-form
            ref="form"
            v-model="valid"
            :lazy-validation="lazy"
          >
            <v-text-field
              class="py-6"
              v-model="name"
              label="Nom"
              required
            />

            <v-text-field
              class="py-6"
              v-model="email"
              label="E-mail"
              required
            />

            <v-text-field
              class="py-6"
              v-model="object"
              label="Objet"
              required
            />

            <v-textarea
              class="py-6"
              v-model="message"
              label="Message"
              required
            />

            <v-btn
              :disabled="!valid"
              color="success"
              @click="validate"
            >
              Soumettre
            </v-btn>
          </v-form>
        </v-card-text>
      </v-card>
    </v-flex>
  </v-layout>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    name: '',
    nameRules: [
      v => !!v || 'Un nom est Requis'
    ],
    email: '',
    emailRules: [
      v => !!v || 'Un E-mail est Requis',
      v => /.+@.+\..+/.test(v) || 'L\'E-mail doit être valide'
    ],
    object: '',
    objectRules: [
      v => !!v || 'Un objet est Requis'
    ],
    message: '',
    messageRules: [
      v => !!v || 'Un objet est Requis'
    ],
    select: null,
    checkbox: false,
    lazy: false
  }),

  methods: {
    validate () {
      if (this.$refs.form.validate()) {
        this.snackbar = true
      }
    },
    reset () {
      this.$refs.form.reset()
    },
    resetValidation () {
      this.$refs.form.resetValidation()
    }
  }
}
</script>
