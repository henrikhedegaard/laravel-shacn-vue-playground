<script setup lang="ts">
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Card">
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
                <h1 class="text-3xl font-bold tracking-tight">Card</h1>
                <p class="mt-2 text-muted-foreground">
                    Displays a card with header, content, and footer
                </p>
            </div>

            <div class="space-y-8">
                <!-- Basic -->
                <Card>
                    <CardHeader>
                        <CardTitle>Card Title</CardTitle>
                        <CardDescription>Card description goes here</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <p>Card content goes here. This is the main body of the card.</p>
                    </CardContent>
                    <CardFooter>
                        <Button>Action</Button>
                    </CardFooter>
                </Card>

                <!-- Minimal -->
                <Card>
                    <CardContent class="pt-6">
                        <p>Minimal card without header or footer</p>
                    </CardContent>
                </Card>

                <!-- With Image -->
                <Card>
                    <div class="h-48 bg-muted" />
                    <CardHeader>
                        <CardTitle>Card with Image</CardTitle>
                        <CardDescription>Card with an image area</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <p>This card includes an image area above the header.</p>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
