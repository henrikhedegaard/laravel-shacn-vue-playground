<script setup lang="ts">
import { Skeleton } from "@/components/ui/skeleton";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Skeleton">
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
                <h1 class="text-3xl font-bold tracking-tight">Skeleton</h1>
                <p class="mt-2 text-muted-foreground">
                    Use to show a placeholder while content is loading
                </p>
            </div>

            <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Skeleton</CardTitle>
                        <CardDescription>Simple loading placeholder</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center space-x-4">
                            <Skeleton class="h-12 w-12 rounded-full" />
                            <div class="space-y-2">
                                <Skeleton class="h-4 w-[250px]" />
                                <Skeleton class="h-4 w-[200px]" />
                            </div>
                        </div>
                    </CardContent>
                </Card>

                <Card>
                    <CardHeader>
                        <CardTitle>Card Skeleton</CardTitle>
                        <CardDescription>Skeleton for a card layout</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-col space-y-3">
                            <Skeleton class="h-[125px] w-full rounded-xl" />
                            <div class="space-y-2">
                                <Skeleton class="h-4 w-full" />
                                <Skeleton class="h-4 w-3/4" />
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
