<script setup>
import { ref, onMounted } from 'vue';

const users = ref({})

const createUser = async () => {
  await fetch("/api/users", {
    method: "POST"
  });

  await getUsers()
}

const getUsers = async () => {
  const response = await fetch("/api/users", {
    method: "GET"
  });

  users.value = await response.json();
}

onMounted(async () => {
  await getUsers();
})
</script>
<template>
	<div>
    <button @click="createUser">Добавить запись</button>
	</div>

  <div v-for="user in users" :key="user.name">
    <p>{{user.name}}</p>
    <p>{{user.email}}</p>
  </div>
</template>
<style></style>
