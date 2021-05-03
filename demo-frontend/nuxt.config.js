export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'demo-frontend',
    htmlAttrs: {
      lang: 'en'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
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
    'nuxtjs-drupal-ce'
  ],

  // drupal-ce config: https://github.com/drunomics/nuxt-module-drupal-ce
  'nuxtjs-drupal-ce': {
    baseURL: process.env.DRUPAL_BASE_URL || 'http://lupus-nuxtjs-drupal-stack-example.ddev.site',
    menuEndpoint: 'api/menu_items/$$$NAME$$$',
    // For authenticated requests via domain lupus-nuxtjs-drupal-stack-example.ddev.site
    useProxy: false,
    axios: {
      withCredentials:true
    }
  },

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
  ],

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
