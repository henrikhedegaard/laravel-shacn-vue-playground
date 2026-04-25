<script setup lang="ts">
import { Checkbox } from "@/components/ui/checkbox";
import { Label } from "@/components/ui/label";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Checkbox">
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
                <h1 class="text-3xl font-bold tracking-tight">Checkbox</h1>
                <p class="mt-2 text-muted-foreground">
                    Displays a checkbox that can be checked or unchecked
                </p>
            </div>

            <div class="space-y-8">
                <!-- Basic -->
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Checkbox</CardTitle>
                        <CardDescription>Simple checkbox</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center space-x-2">
                            <Checkbox id="terms" />
                            <Label for="terms">Accept terms and conditions</Label>
                        </div>
                    </CardContent>
                </Card>

                <!-- Disabled -->
                <Card>
                    <CardHeader>
                        <CardTitle>Disabled Checkbox</CardTitle>
                        <CardDescription>Checkbox in disabled state</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center space-x-2">
                            <Checkbox id="disabled" disabled />
                            <Label for="disabled" class="text-muted-foreground">
                                Disabled option
                            </Label>
                        </div>
                    </CardContent>
                </Card>

                <!-- With Label -->
                <Card>
                    <CardHeader>
                        <CardTitle>With Label</CardTitle>
                        <CardDescription>Checkbox with associated label</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center space-x-2">
                            <Checkbox id="subscribe" />
                            <Label for="subscribe">Subscribe to newsletter</Label>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
