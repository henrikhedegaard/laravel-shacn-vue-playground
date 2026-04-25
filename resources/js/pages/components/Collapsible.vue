<script setup lang="ts">
import { ref } from "vue";
import { Collapsible, CollapsibleContent, CollapsibleTrigger } from "@/components/ui/collapsible";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";

const isOpen = ref(false);
</script>

<template>
    <Head title="Collapsible">
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
                <h1 class="text-3xl font-bold tracking-tight">Collapsible</h1>
                <p class="mt-2 text-muted-foreground">
                    An interactive component which expands/collapses a panel
                </p>
            </div>

            <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Collapsible</CardTitle>
                        <CardDescription>Toggle content visibility</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Collapsible v-model:open="isOpen" class="w-full space-y-2">
                            <div class="flex items-center justify-between space-x-4">
                                <h4 class="text-sm font-semibold">
                                    @peduarte starred 3 repositories
                                </h4>
                                <CollapsibleTrigger as-child>
                                    <Button variant="ghost" size="sm">
                                        <span>{{ isOpen ? "Hide" : "Show" }}</span>
                                    </Button>
                                </CollapsibleTrigger>
                            </div>
                            <div class="rounded-md border px-4 py-3 font-mono text-sm">
                                @radix-ui/primitives
                            </div>
                            <CollapsibleContent class="space-y-2">
                                <div class="rounded-md border px-4 py-3 font-mono text-sm">
                                    @radix-ui/colors
                                </div>
                                <div class="rounded-md border px-4 py-3 font-mono text-sm">
                                    @stitches/react
                                </div>
                            </CollapsibleContent>
                        </Collapsible>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
