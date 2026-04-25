<script setup lang="ts">
import {
    Sheet,
    SheetContent,
    SheetDescription,
    SheetFooter,
    SheetHeader,
    SheetTitle,
    SheetTrigger,
} from "@/components/ui/sheet";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Sheet">
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
                <h1 class="text-3xl font-bold tracking-tight">Sheet</h1>
                <p class="mt-2 text-muted-foreground">
                    Extends the Dialog component to display content from any edge of the screen
                </p>
            </div>

            <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Sheet Sides</CardTitle>
                        <CardDescription>Sheet that opens from different sides</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <div class="flex flex-wrap gap-2">
                            <Sheet>
                                <SheetTrigger as-child>
                                    <Button variant="outline">Top</Button>
                                </SheetTrigger>
                                <SheetContent side="top">
                                    <SheetHeader>
                                        <SheetTitle>Top Sheet</SheetTitle>
                                        <SheetDescription>Opens from the top</SheetDescription>
                                    </SheetHeader>
                                </SheetContent>
                            </Sheet>

                            <Sheet>
                                <SheetTrigger as-child>
                                    <Button variant="outline">Right</Button>
                                </SheetTrigger>
                                <SheetContent side="right">
                                    <SheetHeader>
                                        <SheetTitle>Right Sheet</SheetTitle>
                                        <SheetDescription>Opens from the right</SheetDescription>
                                    </SheetHeader>
                                </SheetContent>
                            </Sheet>

                            <Sheet>
                                <SheetTrigger as-child>
                                    <Button variant="outline">Bottom</Button>
                                </SheetTrigger>
                                <SheetContent side="bottom">
                                    <SheetHeader>
                                        <SheetTitle>Bottom Sheet</SheetTitle>
                                        <SheetDescription>Opens from the bottom</SheetDescription>
                                    </SheetHeader>
                                </SheetContent>
                            </Sheet>

                            <Sheet>
                                <SheetTrigger as-child>
                                    <Button variant="outline">Left</Button>
                                </SheetTrigger>
                                <SheetContent side="left">
                                    <SheetHeader>
                                        <SheetTitle>Left Sheet</SheetTitle>
                                        <SheetDescription>Opens from the left</SheetDescription>
                                    </SheetHeader>
                                </SheetContent>
                            </Sheet>
                        </div>
                    </CardContent>
                </Card>

                <Card>
                    <CardHeader>
                        <CardTitle>Form in Sheet</CardTitle>
                        <CardDescription>Sheet with form content</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Sheet>
                            <SheetTrigger as-child>
                                <Button>Edit Profile</Button>
                            </SheetTrigger>
                            <SheetContent>
                                <SheetHeader>
                                    <SheetTitle>Edit profile</SheetTitle>
                                    <SheetDescription>
                                        Make changes to your profile here. Click save when you're done.
                                    </SheetDescription>
                                </SheetHeader>
                                <div class="grid gap-4 py-4">
                                    <div class="grid grid-cols-4 items-center gap-4">
                                        <Label for="sheet-name" class="text-right">Name</Label>
                                        <Input id="sheet-name" value="Pedro Duarte" class="col-span-3" />
                                    </div>
                                </div>
                                <SheetFooter>
                                    <Button type="submit">Save changes</Button>
                                </SheetFooter>
                            </SheetContent>
                        </Sheet>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
