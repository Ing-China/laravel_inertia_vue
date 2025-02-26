<script setup></script>
<template>
    <Head>
        <meta
            head-key="desctiption"
            name="desctiption"
            content="My App description"
        />
    </Head>
    <div>
        <header>
            <nav>
                <div>
                    <Link :href="route('home')" class="nav-link">Home</Link>
                </div>
                <div>
                    <Link :href="route('register')" class="nav-link"
                        >Register</Link
                    >
                    <Link :href="route('login')" class="nav-link">Login</Link>
                </div>
            </nav>
        </header>
        <main class="p-4">
            <slot></slot>
        </main>
    </div>
</template>
