<script setup>
import { onMounted, ref } from 'vue'
import Cover from '@/components/Cover.vue'
import axios from 'axios'
// import CardPays from './Pays/CardPays.vue'

const data = ref()
const recherche = ref(' ')
const listComplete = ref('')

onMounted(async () => {
  const response = await axios.get('../countries.json')
  data.value = response.data
  listComplete.value = data.value
})

function filter() {
    data.value = listComplete.value.filter(function(pays){
      return pays.name.common.toLowerCase().includes(recherche.value.toLowerCase())
    })
}

</script>

<template>
    <Cover :title="'Recherche'"></Cover>

    <section class="recherche">
        <div class="form">
            <input list="countrieslist" type="text" v-model="recherche" id="recherche" @input="filter()">
            <datalist id="countrieslist">
                <option v-for="pays in data" :value="pays.name.common">Pays plutôt stylé</option>
            </datalist>
        </div>
        <!-- <CardPays v-for="pays in data" :title="pays.name.common" :flag="pays.cca2" :capitale="pays.capital"></CardPays> -->
        <button v-if="recherche.value">
            <Router-Link :to="{name: 'fiche-pays', params: {id: recherche.value}}">Récupérer le pays</Router-Link>
        </button>
    </section>
</template>

<style>
.form {
    display: flex;
    justify-content: center;
    align-items: center;
}

#recherche {
    width: 50vw;
}
</style>