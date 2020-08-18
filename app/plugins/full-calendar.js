// import Vue from 'vue'
// // import Calendar from '~/components/calendar'

// // Vue.component('calendar', Calendar)
// import FullCalendar from 'vue-full-calendar'
// Vue.use(FullCalendar)

import Vue from 'vue'

if (process.browser) {
  window.onNuxtReady(() => {
    const VueFullCalendar = require('vue-full-calendar')
    Vue.use(VueFullCalendar)
  })
}