<script setup lang="ts">
import ComponentCard from "@/components/demo/ComponentCard.vue";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Components">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <CommandPalette />

    <div
        class="flex min-h-screen flex-col items-center bg-neutral-50 px-6 text-neutral-800 lg:justify-center lg:px-8 dark:bg-neutral-800"
    >
        <header class="mb-6 w-full max-w-6xl border-b py-4">
            <nav class="flex items-center justify-between">
                <Link
                    :href="home()"
                    class="flex items-center gap-2 text-sm text-muted-foreground hover:text-neutral-800 dark:hover:text-neutral-200"
                >
                    ← Back to Welcome
                </Link>
                <div class="text-sm text-muted-foreground">Component Demo</div>
            </nav>
        </header>

        <div class="w-full max-w-6xl">
            <div class="mb-8">
                <h1 class="text-3xl font-bold tracking-tight">Components</h1>
                <p class="mt-2 text-muted-foreground">Browse and explore shadcn component demos</p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <ComponentCard
                    title="Avatar"
                    description="An image element with a fallback for representing the user"
                    href="/components/avatar"
                />
                <ComponentCard
                    title="Item"
                    description="A versatile component for displaying content with media, title, and description"
                    href="/components/item"
                />
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
