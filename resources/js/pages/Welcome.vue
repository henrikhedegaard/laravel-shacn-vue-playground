<script setup lang="ts">
import DemoCommand from "@/components/demo/DemoCommand.vue";
import { Button } from "@/components/ui/button";
import { Kbd } from "@/components/ui/kbd";
import { dashboard, login, register } from "@/routes";
import { Head, Link } from "@inertiajs/vue3";
import { CornerDownLeft } from "lucide-vue-next";
import { Spinner } from "@/components/ui/spinner";
import { Badge } from "@/components/ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import {
    Item,
    ItemActions,
    ItemContent,
    ItemDescription,
    ItemFooter,
    ItemMedia,
    ItemTitle,
} from "@/components/ui/item";
import { Progress } from "@/components/ui/progress";
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div
        class="flex min-h-screen flex-col items-center bg-neutral-50 px-6 text-neutral-800 lg:justify-center lg:px-8 dark:bg-neutral-800"
    >
        <header
            class="mb-6 w-full max-w-80 border-b py-4 text-sm not-has-[nav]:hidden lg:max-w-6xl"
        >
            <nav class="flex items-center justify-end gap-4">
                <Link
                    v-if="$page.props.auth.user"
                    :href="dashboard()"
                    class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-neutral-800 hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-neutral-500"
                >
                    Dashboard
                </Link>
                <template v-else>
                    <Link
                        :href="login()"
                        class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-neutral-800 hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                    >
                        Log in
                    </Link>
                    <Link
                        :href="register()"
                        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-neutral-800 hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-neutral-500"
                    >
                        Register
                    </Link>
                </template>
            </nav>
        </header>
        <div
            class="items-top flex w-full justify-center opacity-100 transition-opacity duration-750 lg:grow starting:opacity-0"
        >
            <section class="w-full max-w-6xl">
                <div class="grid grid-cols-4 gap-8">
                    <div class="rounded-lg border bg-white p-4 text-sm">
                        <div class="flex items-center gap-1 text-xs text-muted-foreground">
                            <Kbd class="border bg-muted/50"> <CornerDownLeft size="12" /> </Kbd>Go
                            to page
                        </div>
                    </div>
                    <div class="rounded-lg border bg-white p-4 text-sm">
                        <Button>Click me</Button>
                    </div>
                    <div class="rounded-lg border bg-white p-4 text-sm">asdasd</div>
                    <div class="rounded-lg border bg-white p-4 text-sm">asdasd</div>
                    <div class="col">
                        <DemoCommand />
                    </div>
                    <div class="col-span-2">
                        <Card class="shadow-none">
                            <CardHeader>
                                <CardTitle>Spinner</CardTitle>
                                <CardDescription
                                    >An indicator that can be used to show a loading state.
                                </CardDescription>
                            </CardHeader>
                            <CardContent class="space-y-4">
                                <div class="flex items-center gap-2">
                                    <Spinner class="size-3" />
                                    <Spinner class="size-4" />
                                    <Spinner class="size-5" />
                                    <Spinner class="size-6" />
                                </div>

                                <div class="flex items-center gap-2">
                                    <Spinner class="size-4 text-red-500" />
                                    <Spinner class="size-4 text-green-500" />
                                    <Spinner class="size-4 text-blue-500" />
                                    <Spinner class="size-4 text-yellow-500" />
                                    <Spinner class="size-4 text-purple-500" />
                                </div>

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

                                <div>
                                    <Button disabled>
                                        <Spinner />
                                        Processing booking
                                    </Button>
                                </div>

                                <Item variant="outline">
                                    <ItemMedia variant="icon">
                                        <Spinner />
                                    </ItemMedia>
                                    <ItemContent>
                                        <ItemTitle>Downloading...</ItemTitle>
                                        <ItemDescription>129 MB / 1000 MB</ItemDescription>
                                    </ItemContent>
                                    <ItemActions class="hidden sm:flex">
                                        <Button variant="outline" size="sm"> Cancel </Button>
                                    </ItemActions>
                                    <ItemFooter>
                                        <Progress :model-value="75" />
                                    </ItemFooter>
                                </Item>
                            </CardContent>
                        </Card>
                    </div>
                </div>
            </section>
        </div>
        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
