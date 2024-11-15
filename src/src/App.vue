<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
    <div class="te">
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
      </nav>
    </div>
  <RouterView />
</template>