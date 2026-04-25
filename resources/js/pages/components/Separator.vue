<script setup lang="ts">
import { Separator } from "@/components/ui/separator";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Separator">
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
                <h1 class="text-3xl font-bold tracking-tight">Separator</h1>
                <p class="mt-2 text-muted-foreground">
                    Visually separates content
                </p>
            </div>

            <div class="space-y-8">
                <!-- Horizontal -->
                <Card>
                    <CardHeader>
                        <CardTitle>Horizontal</CardTitle>
                        <CardDescription>Horizontal separator</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-4">
                            <div>
                                <p class="text-sm">Section 1</p>
                                <Separator />
                                <p class="text-sm">Section 2</p>
                            </div>
                        </div>
                    </CardContent>
                </Card>

                <!-- Vertical -->
                <Card>
                    <CardHeader>
                        <CardTitle>Vertical</CardTitle>
                        <CardDescription>Vertical separator</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <span class="text-sm">Item 1</span>
                            <Separator orientation="vertical" />
                            <span class="text-sm">Item 2</span>
                            <Separator orientation="vertical" />
                            <span class="text-sm">Item 3</span>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
