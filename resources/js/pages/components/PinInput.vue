<script setup lang="ts">
import { ref } from "vue";
import { PinInput, PinInputGroup, PinInputSlot } from "@/components/ui/pin-input";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import CommandPalette from "@/components/CommandPalette.vue";
import { Head, Link } from "@inertiajs/vue3";
import { home } from "@/routes";

const pinValue = ref<string[]>([]);
const pin6 = ref<string[]>([]);
</script>

<template>
    <Head title="Pin Input">
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
                <h1 class="text-3xl font-bold tracking-tight">Pin Input</h1>
                <p class="mt-2 text-muted-foreground">
                    Accessible pin input component for OTP and verification codes
                </p>
            </div>

            <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>4-Digit Pin</CardTitle>
                        <CardDescription>Basic 4-digit pin input</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <PinInput v-model="pinValue" id="pin-4">
                            <PinInputGroup>
                                <PinInputSlot :index="0" />
                                <PinInputSlot :index="1" />
                                <PinInputSlot :index="2" />
                                <PinInputSlot :index="3" />
                            </PinInputGroup>
                        </PinInput>
                    </CardContent>
                </Card>

                <Card>
                    <CardHeader>
                        <CardTitle>6-Digit Pin</CardTitle>
                        <CardDescription>OTP verification with 6 digits</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <PinInput v-model="pin6" id="pin-6">
                            <PinInputGroup>
                                <PinInputSlot :index="0" />
                                <PinInputSlot :index="1" />
                                <PinInputSlot :index="2" />
                                <PinInputSlot :index="3" />
                                <PinInputSlot :index="4" />
                                <PinInputSlot :index="5" />
                            </PinInputGroup>
                        </PinInput>
                    </CardContent>
                </Card>
            </div>
        </div>

        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
