<script setup>
import { ref, onMounted } from 'vue'
import { useAuthStore } from "../stores/auth"
import axios from 'axios'
const authStore = useAuthStore();

onMounted(async () => {
    await authStore.getUser();
    await authStore.test();
});

</script>

<template>
    <div>
        <div v-if="authStore.user">
            <h1>{{ authStore.user.name }}</h1>
            <p>{{ authStore.user.email }}</p>
        </div>
        <div v-else>
            <h1>Go and login</h1>
        </div>
    </div>
</template>