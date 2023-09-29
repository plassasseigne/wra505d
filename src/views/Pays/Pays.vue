<script setup>
import CardPays from '../Pays/CardPays.vue'
import { onMounted, ref } from 'vue'
import axios from 'axios'

const data = ref()
const recherche = ref('')
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
    <h1>Liste des pays</h1>
    <label for="recherche">Recherche : </label><br />
    <input type="text" v-model.trim="recherche" id="recherche" @input="filter()">

    <div v-if="data" class="list-pays">
        <CardPays v-for="pays in data" :title="pays.name.common" :flag="pays.cca2" :capitale="pays.capital"></CardPays>
    </div>
    <div v-else class="chargement">
        <span>Chargement des données...</span>
    </div>
</template>

<style>
    .list-pays {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .pays {
        width: 100px;
    }

    .chargement {
        width: 100%;
        height: 60vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>