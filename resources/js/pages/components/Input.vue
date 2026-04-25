<script setup lang="ts">
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Input">
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
                <h1 class="text-3xl font-bold tracking-tight">Input</h1>
                <p class="mt-2 text-muted-foreground">
                    Displays a form input field
                </p>
            </div>

            <div class="space-y-8">
                <!-- Basic -->
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Input</CardTitle>
                        <CardDescription>Simple text input</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <Label for="email">Email</Label>
                            <Input id="email" type="email" placeholder="m@example.com" />
                        </div>
                    </CardContent>
                </Card>

                <!-- With Label -->
                <Card>
                    <CardHeader>
                        <CardTitle>With Label</CardTitle>
                        <CardDescription>Input with associated label</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <Label for="name">Name</Label>
                            <Input id="name" placeholder="Enter your name" />
                        </div>
                    </CardContent>
                </Card>

                <!-- Disabled -->
                <Card>
                    <CardHeader>
                        <CardTitle>Disabled Input</CardTitle>
                        <CardDescription>Input in disabled state</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <Label for="disabled">Disabled</Label>
                            <Input id="disabled" disabled placeholder="Disabled input" />
                        </div>
                    </CardContent>
                </Card>

                <!-- File Input -->
                <Card>
                    <CardHeader>
                        <CardTitle>File Input</CardTitle>
                        <CardDescription>File upload input</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-2">
                            <Label for="file">File</Label>
                            <Input id="file" type="file" />
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
