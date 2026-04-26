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
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout
        title="Navigation Menu"
        description="A collection of links for navigating websites"
        show-back-link
    >
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
                                            <NavigationMenuLink
                                                class="block p-3 hover:bg-accent rounded"
                                            >
                                                <div class="font-medium">Introduction</div>
                                                <p class="text-sm text-muted-foreground">
                                                    Re-usable components built with Reka UI
                                                </p>
                                            </NavigationMenuLink>
                                        </li>
                                        <li>
                                            <NavigationMenuLink
                                                class="block p-3 hover:bg-accent rounded"
                                            >
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
                                            <NavigationMenuLink
                                                class="block p-3 hover:bg-accent rounded"
                                            >
                                                Button
                                            </NavigationMenuLink>
                                        </li>
                                        <li>
                                            <NavigationMenuLink
                                                class="block p-3 hover:bg-accent rounded"
                                            >
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
    </PageLayout>
</template>
