import { createRouter, createWebHistory } from 'vue-router'

import Home from '../views/Home.vue'
import About from '../views/About.vue'
import Pays from '../views/Pays/Pays.vue'
import Recherche from '../views/Recherche.vue'
import Fichepays from '../views/Pays/FichePays.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      component: Home
    },
    {
      path: '/about',
      component: About
    },
    {
      path: '/pays',
      component: Pays
    },
    {
      path: '/recherche',
      component: Recherche
    },
    {
      path: '/fiche-pays/:id',
      name: 'fiche-pays',
      component: Fichepays
    },
  ]
})

export default router