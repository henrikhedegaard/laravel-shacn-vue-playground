<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from "@/components/ui/avatar";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Avatar">
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
                <h1 class="text-3xl font-bold tracking-tight">Avatar</h1>
                <p class="mt-2 text-muted-foreground">
                    An image element with a fallback for representing the user
                </p>
            </div>

            <div class="space-y-8">
                <!-- Basic Example -->
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Avatar</CardTitle>
                        <CardDescription>Simple avatar with image and fallback</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <Avatar>
                                <AvatarImage src="https://github.com/shadcn.png" alt="@shadcn" />
                                <AvatarFallback>CN</AvatarFallback>
                            </Avatar>
                            <Avatar>
                                <AvatarFallback>JD</AvatarFallback>
                            </Avatar>
                        </div>
                    </CardContent>
                </Card>

                <!-- Size Variants -->
                <Card>
                    <CardHeader>
                        <CardTitle>Size Variants</CardTitle>
                        <CardDescription>Different avatar sizes</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <Avatar class="size-8">
                                <AvatarFallback>SM</AvatarFallback>
                            </Avatar>
                            <Avatar class="size-10">
                                <AvatarFallback>MD</AvatarFallback>
                            </Avatar>
                            <Avatar class="size-12">
                                <AvatarFallback>LG</AvatarFallback>
                            </Avatar>
                            <Avatar class="size-16">
                                <AvatarFallback>XL</AvatarFallback>
                            </Avatar>
                        </div>
                    </CardContent>
                </Card>

                <!-- With Badge -->
                <Card>
                    <CardHeader>
                        <CardTitle>Avatar with Badge</CardTitle>
                        <CardDescription>Avatar combined with status indicator</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <Avatar>
                                    <AvatarImage
                                        src="https://github.com/shadcn.png"
                                        alt="@shadcn"
                                    />
                                    <AvatarFallback>CN</AvatarFallback>
                                </Avatar>
                                <div
                                    class="absolute bottom-0 right-0 size-3 rounded-full border-2 border-white bg-green-500"
                                />
                            </div>
                        </div>
                    </CardContent>
                </Card>
            </div>
        </div>
        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
