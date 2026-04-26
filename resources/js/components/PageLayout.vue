<script setup lang="ts">
import AppNavbar from "@/components/AppNavbar.vue";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head } from "@inertiajs/vue3";

interface Props {
    description?: string;
    showBackLink?: boolean;
    title: string;
}

withDefaults(defineProps<Props>(), {
    description: undefined,
    showBackLink: false,
});
</script>

<template>
    <Head :title="title">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <CommandPalette />

    <div
        class="flex min-h-screen flex-col bg-neutral-50 text-neutral-800 dark:bg-neutral-900 dark:text-neutral-100"
    >
        <AppNavbar :show-back-link="showBackLink" />

        <main class="flex-1 px-4 py-8">
            <div class="mx-auto w-full max-w-6xl">
                <div v-if="title || description" class="mb-8">
                    <h1 class="text-3xl font-bold tracking-tight">{{ title }}</h1>
                    <p v-if="description" class="mt-2 text-muted-foreground">
                        {{ description }}
                    </p>
                </div>

                <slot />
            </div>
        </main>
    </div>
</template>
