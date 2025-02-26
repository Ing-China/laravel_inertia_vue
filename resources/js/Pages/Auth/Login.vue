<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextIput.vue";

const form = useForm({
    email: null,
    password: null,
    remember: null,
});

const submit = () => {
    form.post("/login", {
        onError: () => form.reset("password", "remember"),
    });
};
</script>

<template>
    <Head title="| Login" />

    <h1 class="title">Login to your account</h1>

    <div class="w-2/4 mx-auto">
        <form @submit.prevent="submit">
            <TextInput
                name="Email"
                v-model="form.email"
                type="email"
                :message="form.errors.email"
            />

            <TextInput
                name="Password"
                v-model="form.password"
                type="password"
                :message="form.errors.password"
            />

            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2 mb-2">
                    <label>Remember me</label>
                    <input
                        type="checkbox"
                        v-model="form.remember"
                        id="remember"
                    />
                </div>
                <p class="text-slate-600 mb-2">
                    Need an account?
                    <a :href="route('register')" class="text-link">Register</a>
                </p>
            </div>

            <button class="primary-btn" :disabled="form.processing">
                Login
            </button>
        </form>
    </div>
</template>
