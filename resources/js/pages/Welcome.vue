<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Kbd } from '@/components/ui/kbd';
import { dashboard, login, register } from '@/routes';
import { Head, Link } from '@inertiajs/vue3';
import { CornerDownLeft } from 'lucide-vue-next';
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
                <div class="grid grid-cols-4 gap-4">
                    <div class="rounded-lg border bg-white p-4 text-sm">
                        <div
                            class="flex items-center gap-1 text-xs text-muted-foreground"
                        >
                            <Kbd class="border bg-muted/50">
                                <CornerDownLeft size="12" /> </Kbd
                            >Go to page
                        </div>
                    </div>
                    <div class="rounded-lg border bg-white p-4 text-sm">
                        <Button>Click me</Button>
                    </div>
                    <div class="rounded-lg border bg-white p-4 text-sm">
                        asdasd
                    </div>
                    <div class="rounded-lg border bg-white p-4 text-sm">
                        asdasd
                    </div>
                </div>
            </section>
        </div>
        <div class="hidden h-14.5 lg:block">Footer</div>
    </div>
</template>
