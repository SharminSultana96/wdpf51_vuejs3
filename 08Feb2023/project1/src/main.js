import { createApp } from 'vue';
import App from './App.vue'
import Abc from './MyApp1.vue'

// import './assets/main.css'
// createApp({
//     data() {
//       return {
//         count: 0
//       }
//     }
//   }).mount('#app')
createApp(Abc).mount("#show");
createApp(App).mount("#app");

  