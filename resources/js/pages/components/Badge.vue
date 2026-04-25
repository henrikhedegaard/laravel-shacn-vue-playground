<script setup lang="ts">
import { Badge } from "@/components/ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Badge">
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
                <h1 class="text-3xl font-bold tracking-tight">Badge</h1>
                <p class="mt-2 text-muted-foreground">
                    Displays a badge or a component that looks like a badge
                </p>
            </div>

            <div class="space-y-8">
                <!-- Variants -->
                <Card>
                    <CardHeader>
                        <CardTitle>Variants</CardTitle>
                        <CardDescription>Different badge styles</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <Badge>Default</Badge>
                            <Badge variant="secondary">Secondary</Badge>
                            <Badge variant="destructive">Destructive</Badge>
                            <Badge variant="outline">Outline</Badge>
                        </div>
                    </CardContent>
                </Card>

                <!-- With Text -->
                <Card>
                    <CardHeader>
                        <CardTitle>Status Badges</CardTitle>
                        <CardDescription>Common status indicators</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <Badge>New</Badge>
                            <Badge variant="secondary">Updated</Badge>
                            <Badge variant="outline">Archived</Badge>
                            <Badge variant="destructive">Deleted</Badge>
                        </div>
                    </CardContent>
                </Card>

                <!-- With Icons -->
                <Card>
                    <CardHeader>
                        <CardTitle>With Icons</CardTitle>
                        <CardDescription>Badges with icons</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <Badge>
                                <span class="mr-2">✓</span>
                                Verified
                            </Badge>
                            <Badge variant="secondary">
                                <span class="mr-2">⚡</span>
                                Pro
                            </Badge>
                            <Badge variant="outline">
                                <span class="mr-2">★</span>
                                Featured
                            </Badge>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
