<script setup>
  import Moyenne from '@/components/Moyenne.vue'
  import { ref } from 'vue'

  const symfony = 18
  const integration = 16
  const reseau = 13

  const notes = [
    12, 15, 16, 9, 6, 19, 17, 3, 14, 10
  ]

  const awesome = ref(true)
</script>

<template>
    <h1>Home</h1>

    <main>
    <div class="notes">
      <h2>Relevé de note :</h2>
      <ul>
        <li>Note sur Symfony : {{ symfony }}</li>
        <li>Note en intégration : {{ integration }}</li>
        <li>Note en réseau : {{ reseau }}</li>
      </ul>

      <div class="button-awesome">
        <button @click="awesome = !awesome">Basculer</button>

        <span v-if="awesome">Vue est magnifique!</span>
        <span v-else>Oh non 😢</span>
      </div>

      <Moyenne></Moyenne>

      <h2>Liste des notes :</h2>
      <div v-for="note in notes" class="notes">
        <li style="color: green;" v-if="note >= 10">{{ note }}</li>
        <li style="color: red;" v-else="note < 10">{{ note }}</li>
      </div>
    </div>
  </main>
</template>

<style>
.button-awesome {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.button-awesome button {
    margin-bottom: 10px;
}
</style>