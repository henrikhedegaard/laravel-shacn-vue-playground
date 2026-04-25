<script setup lang="ts">
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Button">
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
                <h1 class="text-3xl font-bold tracking-tight">Button</h1>
                <p class="mt-2 text-muted-foreground">
                    Displays a button or a component that looks like a button
                </p>
            </div>

            <div class="space-y-8">
                <!-- Variants -->
                <Card>
                    <CardHeader>
                        <CardTitle>Variants</CardTitle>
                        <CardDescription>Different button styles</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <Button>Default</Button>
                            <Button variant="secondary">Secondary</Button>
                            <Button variant="destructive">Destructive</Button>
                            <Button variant="outline">Outline</Button>
                            <Button variant="ghost">Ghost</Button>
                            <Button variant="link">Link</Button>
                        </div>
                    </CardContent>
                </Card>

                <!-- Sizes -->
                <Card>
                    <CardHeader>
                        <CardTitle>Sizes</CardTitle>
                        <CardDescription>Different button sizes</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <Button size="default">Default</Button>
                            <Button size="sm">Small</Button>
                            <Button size="lg">Large</Button>
                            <Button size="icon">
                                <span>+</span>
                            </Button>
                        </div>
                    </CardContent>
                </Card>

                <!-- With Icon -->
                <Card>
                    <CardHeader>
                        <CardTitle>With Icons</CardTitle>
                        <CardDescription>Buttons with icons</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <Button>
                                <span class="mr-2">→</span>
                                Continue
                            </Button>
                            <Button variant="outline">
                                <span class="mr-2">✕</span>
                                Cancel
                            </Button>
                        </div>
                    </CardContent>
                </Card>

                <!-- States -->
                <Card>
                    <CardHeader>
                        <CardTitle>States</CardTitle>
                        <CardDescription>Different button states</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap items-center gap-4">
                            <Button>Default</Button>
                            <Button disabled>Disabled</Button>
                            <Button loading>Loading</Button>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
