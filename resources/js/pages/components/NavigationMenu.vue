<script setup lang="ts">
import {
    NavigationMenu,
    NavigationMenuContent,
    NavigationMenuItem,
    NavigationMenuLink,
    NavigationMenuList,
    NavigationMenuTrigger,
} from "@/components/ui/navigation-menu";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Navigation Menu">
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
                <h1 class="text-3xl font-bold tracking-tight">Navigation Menu</h1>
                <p class="mt-2 text-muted-foreground">
                    A collection of links for navigating websites
                </p>
            </div>

            <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Navigation</CardTitle>
                        <CardDescription>Menu with dropdown items</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <NavigationMenu>
                            <NavigationMenuList>
                                <NavigationMenuItem>
                                    <NavigationMenuTrigger>Getting Started</NavigationMenuTrigger>
                                    <NavigationMenuContent>
                                        <ul class="grid gap-3 p-6 md:w-[400px]">
                                            <li>
                                                <NavigationMenuLink class="block p-3 hover:bg-accent rounded">
                                                    <div class="font-medium">Introduction</div>
                                                    <p class="text-sm text-muted-foreground">
                                                        Re-usable components built with Reka UI
                                                    </p>
                                                </NavigationMenuLink>
                                            </li>
                                            <li>
                                                <NavigationMenuLink class="block p-3 hover:bg-accent rounded">
                                                    <div class="font-medium">Installation</div>
                                                    <p class="text-sm text-muted-foreground">
                                                        How to install dependencies
                                                    </p>
                                                </NavigationMenuLink>
                                            </li>
                                        </ul>
                                    </NavigationMenuContent>
                                </NavigationMenuItem>
                                <NavigationMenuItem>
                                    <NavigationMenuTrigger>Components</NavigationMenuTrigger>
                                    <NavigationMenuContent>
                                        <ul class="grid gap-3 p-6 md:w-[400px]">
                                            <li>
                                                <NavigationMenuLink class="block p-3 hover:bg-accent rounded">
                                                    Button
                                                </NavigationMenuLink>
                                            </li>
                                            <li>
                                                <NavigationMenuLink class="block p-3 hover:bg-accent rounded">
                                                    Card
                                                </NavigationMenuLink>
                                            </li>
                                        </ul>
                                    </NavigationMenuContent>
                                </NavigationMenuItem>
                                <NavigationMenuItem>
                                    <NavigationMenuLink class="px-4 py-2 hover:bg-accent rounded">
                                        Docs
                                    </NavigationMenuLink>
                                </NavigationMenuItem>
                            </NavigationMenuList>
                        </NavigationMenu>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
