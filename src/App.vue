<script setup>

</script>

<template>
  <nav>
    <div class="links">
      <router-link to="/">Accueil</router-link>
      |
      <router-link to="/about">A propos</router-link>
      |
      <router-link to="/pays">Pays</router-link>
    </div>
  </nav>

  <router-view></router-view>
</template>

<style>
  nav {
    width: 100%;
    background-color: aqua;
  }

  .links {
    padding: 0 50px;
    display: flex;
    align-items: center;
    gap: 20px;
    height: 75px;
    overflow: hidden;
  }

  .links a {
    color: black;
    text-decoration: none;
    transition: all 0.3s;
  }

  .links a:hover {
    color: red;
  }
</style>

