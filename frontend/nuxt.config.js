export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'ARMV',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
      { rel: 'StyleSheet', type: 'text/css', href: '/css/bootstrap.min.css' },
      { rel: 'StyleSheet', type: 'text/css', href: '//unpkg.com/bootstrap/dist/css/bootstrap.min.css' },
      { rel: 'StyleSheet', type: 'text/css', href: '//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css' },
      { rel:'Stylesheet',
        href:'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400;600&display=swap'
      },
      {
        rel: 'Stylesheet',
        href: 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'
      },
      {
        rel: 'Stylesheet',
        href: 'https://unpkg.com/swiper/swiper-bundle.min.css'
      },
      

    ],
    script:[
      {
        src:"https://unpkg.com/ionicons@5.4.0/dist/ionicons.js",
        body: true,
      },
//      {
//        src: "https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js",
//        body: true,
//      },
//      {
//        src: "https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js",
//        body: true,
//      },
      {
        src:"https://unpkg.com/swiper/swiper-bundle.min.js",
        body:true,

      },

    ]
  },


  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    'bootstrap-vue/nuxt',
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    // https://go.nuxtjs.dev/pwa
    '@nuxtjs/pwa',
  ],
  bootstrapVue: {
    // Install the `IconsPlugin` plugin (in addition to `BootstrapVue` plugin)
    icons: true
  },
  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {},

  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    manifest: {
      lang: 'en'
    }
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
