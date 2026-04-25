<script setup lang="ts">
import { Spinner } from "@/components/ui/spinner";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Spinner">
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
                <h1 class="text-3xl font-bold tracking-tight">Spinner</h1>
                <p class="mt-2 text-muted-foreground">
                    Displays an animated loading indicator
                </p>
            </div>

            <div class="space-y-8">
                <!-- Sizes -->
                <Card>
                    <CardHeader>
                        <CardTitle>Sizes</CardTitle>
                        <CardDescription>Different spinner sizes</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <Spinner class="size-3" />
                            <Spinner class="size-4" />
                            <Spinner class="size-5" />
                            <Spinner class="size-6" />
                            <Spinner class="size-8" />
                        </div>
                    </CardContent>
                </Card>

                <!-- Colors -->
                <Card>
                    <CardHeader>
                        <CardTitle>Colors</CardTitle>
                        <CardDescription>Different spinner colors</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <Spinner class="size-6 text-red-500" />
                            <Spinner class="size-6 text-green-500" />
                            <Spinner class="size-6 text-blue-500" />
                            <Spinner class="size-6 text-yellow-500" />
                            <Spinner class="size-6 text-purple-500" />
                        </div>
                    </CardContent>
                </Card>

                <!-- In Badge -->
                <Card>
                    <CardHeader>
                        <CardTitle>In Badge</CardTitle>
                        <CardDescription>Spinner inside a badge</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-2">
                            <Badge>
                                <Spinner />
                                Syncing
                            </Badge>
                            <Badge variant="secondary">
                                <Spinner />
                                Updating
                            </Badge>
                            <Badge variant="outline">
                                <Spinner />
                                Processing
                            </Badge>
                        </div>
                    </CardContent>
                </Card>

                <!-- In Button -->
                <Card>
                    <CardHeader>
                        <CardTitle>In Button</CardTitle>
                        <CardDescription>Spinner inside a button</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-2">
                            <Button disabled>
                                <Spinner />
                                Processing booking
                            </Button>
                            <Button variant="outline" disabled>
                                <Spinner />
                                Saving...
                            </Button>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
