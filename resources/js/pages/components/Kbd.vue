<script setup lang="ts">
import { Kbd } from "@/components/ui/kbd";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Kbd">
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
                <h1 class="text-3xl font-bold tracking-tight">Kbd</h1>
                <p class="mt-2 text-muted-foreground">
                    Displays a keyboard shortcut or key
                </p>
            </div>

            <div class="space-y-8">
                <!-- Basic Example -->
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Kbd</CardTitle>
                        <CardDescription>Simple keyboard key display</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-2">
                            <Kbd>⌘</Kbd>
                            <span>+</span>
                            <Kbd>K</Kbd>
                        </div>
                    </CardContent>
                </Card>

                <!-- Different Keys -->
                <Card>
                    <CardHeader>
                        <CardTitle>Common Keys</CardTitle>
                        <CardDescription>Various keyboard shortcuts</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="flex items-center gap-2">
                                <Kbd>⌘</Kbd>
                                <Kbd>C</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>⌘</Kbd>
                                <Kbd>V</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>⌘</Kbd>
                                <Kbd>⇧</Kbd>
                                <Kbd>Z</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>⌫</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>↵</Kbd>
                            </div>
                            <div class="flex items-center gap-2">
                                <Kbd>⇥</Kbd>
                            </div>
                        </div>
                    </CardContent>
                </Card>

                <!-- With Text -->
                <Card>
                    <CardHeader>
                        <CardTitle>In Context</CardTitle>
                        <CardDescription>Used in UI hints</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between rounded border bg-white p-3 dark:bg-neutral-900">
                                <span class="text-sm">Press</span>
                                <div class="flex items-center gap-2">
                                    <Kbd>⌘</Kbd>
                                    <Kbd>K</Kbd>
                                </div>
                            </div>
                            <div class="flex items-center justify-between rounded border bg-white p-3 dark:bg-neutral-900">
                                <span class="text-sm">to search</span>
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
