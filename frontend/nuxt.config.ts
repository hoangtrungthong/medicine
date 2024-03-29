// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    [
      '@nuxtjs/eslint-module',
      {
        /* module options */
      },
    ],
  ],
  components: [
    {
      path: '~/components',
      // pathPrefix: false,
    },
  ],
  pages: true,
})
