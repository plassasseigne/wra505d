<script setup>
  import { computed } from 'vue'

  const note1 = 12
  const note2 = 15
  const note3 = 16
  const note4 = 9
  const note5 = 6

  const moyenne = computed(() => {
    return (note1 + note2 + note3 + note4 + note5) / 5
  })
</script>

<template>
  <h3>Relevé de note :</h3>
  <ul>
    <li>Note 1 : {{ note1 }} <span v-if="note1 > 10">La note est supérieure à 10</span> <span v-else>La note est inférieure à 10</span> </li>
    <li>Note 2 : {{ note2 }} <span v-if="note2 > 10">La note est supérieure à 10</span> <span v-else>La note est inférieure à 10</span> </li>
    <li>Note 3 : {{ note3 }} <span v-if="note3 > 10">La note est supérieure à 10</span> <span v-else>La note est inférieure à 10</span> </li>
    <li>Note 4 : {{ note4 }} <span v-if="note4 > 10">La note est supérieure à 10</span> <span v-else>La note est inférieure à 10</span> </li>
    <li>Note 5 : {{ note5 }} <span v-if="note5 > 10">La note est supérieure à 10</span> <span v-else>La note est inférieure à 10</span> </li>
  </ul>

  <p>Ma moyenne : {{ moyenne }}</p>
</template>