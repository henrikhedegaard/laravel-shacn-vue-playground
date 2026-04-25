<script setup lang="ts">
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from "@/components/ui/dialog";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";
</script>

<template>
    <Head title="Dialog">
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
                <h1 class="text-3xl font-bold tracking-tight">Dialog</h1>
                <p class="mt-2 text-muted-foreground">
                    A window overlaid on either the primary window or another dialog window
                </p>
            </div>

            <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Dialog</CardTitle>
                        <CardDescription>Simple dialog with title and description</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Dialog>
                            <DialogTrigger as-child>
                                <Button variant="outline">Open Dialog</Button>
                            </DialogTrigger>
                            <DialogContent class="sm:max-w-[425px]">
                                <DialogHeader>
                                    <DialogTitle>Edit profile</DialogTitle>
                                    <DialogDescription>
                                        Make changes to your profile here. Click save when you're done.
                                    </DialogDescription>
                                </DialogHeader>
                                <div class="grid gap-4 py-4">
                                    <div class="grid grid-cols-4 items-center gap-4">
                                        <Label for="name" class="text-right">Name</Label>
                                        <Input id="name" value="Pedro Duarte" class="col-span-3" />
                                    </div>
                                    <div class="grid grid-cols-4 items-center gap-4">
                                        <Label for="username" class="text-right">Username</Label>
                                        <Input id="username" value="@peduarte" class="col-span-3" />
                                    </div>
                                </div>
                                <DialogFooter>
                                    <Button type="submit">Save changes</Button>
                                </DialogFooter>
                            </DialogContent>
                        </Dialog>
                    </CardContent>
                </Card>

                <Card>
                    <CardHeader>
                        <CardTitle>Confirmation Dialog</CardTitle>
                        <CardDescription>Dialog with action buttons</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Dialog>
                            <DialogTrigger as-child>
                                <Button variant="destructive">Delete Account</Button>
                            </DialogTrigger>
                            <DialogContent>
                                <DialogHeader>
                                    <DialogTitle>Are you absolutely sure?</DialogTitle>
                                    <DialogDescription>
                                        This action cannot be undone. This will permanently delete your
                                        account and remove your data from our servers.
                                    </DialogDescription>
                                </DialogHeader>
                                <DialogFooter>
                                    <Button variant="outline">Cancel</Button>
                                    <Button variant="destructive">Delete</Button>
                                </DialogFooter>
                            </DialogContent>
                        </Dialog>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
