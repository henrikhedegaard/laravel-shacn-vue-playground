<script setup lang="ts">
import { Progress } from "@/components/ui/progress";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Progress">
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
                <h1 class="text-3xl font-bold tracking-tight">Progress</h1>
                <p class="mt-2 text-muted-foreground">
                    Displays an indicator showing the completion progress of a task
                </p>
            </div>

            <div class="space-y-8">
                <!-- Basic -->
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Progress</CardTitle>
                        <CardDescription>Simple progress indicator</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-4">
                            <Progress :model-value="0" />
                            <Progress :model-value="25" />
                            <Progress :model-value="50" />
                            <Progress :model-value="75" />
                            <Progress :model-value="100" />
                        </div>
                    </CardContent>
                </Card>

                <!-- With Label -->
                <Card>
                    <CardHeader>
                        <CardTitle>With Labels</CardTitle>
                        <CardDescription>Progress with percentage labels</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span>Uploading...</span>
                                    <span>25%</span>
                                </div>
                                <Progress :model-value="25" />
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span>Processing...</span>
                                    <span>75%</span>
                                </div>
                                <Progress :model-value="75" />
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
