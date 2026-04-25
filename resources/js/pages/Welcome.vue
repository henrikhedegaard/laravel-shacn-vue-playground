<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import {
    ArrowRight,
    Code2,
    Palette,
    Zap,
    CheckCircle2,
    Layout,
    Layers,
    Sparkles,
    Github,
    BookOpen,
    Command,
} from "lucide-vue-next";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { Kbd } from "@/components/ui/kbd";
import PageLayout from "@/components/PageLayout.vue";
</script>

<template>
    <PageLayout title="" description="" :show-back-link="false">
        <!-- Hero Section -->
        <div class="relative overflow-hidden">
            <!-- Background Gradient -->
            <div class="absolute inset-0 -z-10">
                <div
                    class="absolute inset-0 bg-linear-to-br from-blue-50 via-white to-indigo-50 dark:from-blue-950 dark:via-neutral-900 dark:to-indigo-950"
                />
                <div
                    class="absolute inset-0 bg-[linear-gradient(to_right,#dbeafe_1px,transparent_1px),linear-gradient(to_bottom,#dbeafe_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,#1e3a5f_1px,transparent_1px),linear-gradient(to_bottom,#1e3a5f_1px,transparent_1px)] bg-size-[40px_40px]"
                />
            </div>

            <!-- Gradient Orbs -->
            <div
                class="absolute top-20 left-1/4 -translate-x-1/2 w-96 h-96 bg-linear-to-r from-blue-400/20 to-cyan-400/20 rounded-full blur-3xl dark:from-blue-600/20 dark:to-cyan-600/20"
            />
            <div
                class="absolute bottom-20 right-1/4 translate-x-1/2 w-96 h-96 bg-linear-to-r from-indigo-400/20 to-blue-400/20 rounded-full blur-3xl dark:from-indigo-600/20 dark:to-blue-600/20"
            />

            <!-- Content -->
            <div class="relative mx-auto max-w-6xl px-4 py-24 md:py-32">
                <div class="text-center">
                    <Badge variant="secondary" class="mb-6">
                        <Sparkles :size="14" class="mr-1.5" />
                        Shadcn Vue Components Playground
                    </Badge>

                    <h1
                        class="text-5xl font-bold tracking-tight sm:text-6xl md:text-7xl lg:text-8xl bg-linear-to-r from-neutral-900 via-neutral-700 to-neutral-900 bg-clip-text text-transparent dark:from-white dark:via-neutral-200 dark:to-white"
                    >
                        Build Beautiful<br />UI Components
                    </h1>

                    <p class="mx-auto mt-6 max-w-2xl text-lg text-muted-foreground sm:text-xl">
                        Explore and experiment with Shadcn Vue components in a live playground.
                        Beautiful, accessible, and fully customizable UI components for your next
                        project.
                    </p>

                    <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                        <Link href="/components">
                            <Button size="lg" class="h-12 px-8 text-base">
                                Explore Components
                                <ArrowRight :size="18" class="ml-2" />
                            </Button>
                        </Link>
                        <Button size="lg" variant="outline" class="h-12 px-8 text-base">
                            <Github :size="18" class="mr-2" />
                            View on GitHub
                        </Button>
                    </div>

                    <!-- Stats -->
                    <div class="mt-16 grid grid-cols-3 gap-8 max-w-2xl mx-auto">
                        <div>
                            <div class="text-3xl font-bold text-neutral-900 dark:text-white">
                                30+
                            </div>
                            <div class="text-sm text-muted-foreground">Components</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-neutral-900 dark:text-white">
                                100%
                            </div>
                            <div class="text-sm text-muted-foreground">TypeScript</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-neutral-900 dark:text-white">
                                Open
                            </div>
                            <div class="text-sm text-muted-foreground">Source</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="mx-auto max-w-6xl px-4 py-24">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">
                    Everything You Need
                </h2>
                <p class="mt-4 text-lg text-muted-foreground max-w-2xl mx-auto">
                    A comprehensive collection of pre-built components to accelerate your
                    development workflow.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border bg-white p-6 shadow-sm transition-all hover:shadow-md dark:border-neutral-800 dark:bg-neutral-950"
                >
                    <div
                        class="flex size-12 items-center justify-center rounded-xl bg-linear-to-br from-blue-500 to-blue-600 text-white mb-4"
                    >
                        <Code2 :size="24" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Type-First</h3>
                    <p class="text-muted-foreground">
                        Fully typed with TypeScript for better developer experience and fewer
                        runtime errors.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border bg-white p-6 shadow-sm transition-all hover:shadow-md dark:border-neutral-800 dark:bg-neutral-950"
                >
                    <div
                        class="flex size-12 items-center justify-center rounded-xl bg-linear-to-br from-purple-500 to-purple-600 text-white mb-4"
                    >
                        <Palette :size="24" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Customizable</h3>
                    <p class="text-muted-foreground">
                        Copy the code and make it yours. Full control over styling and behavior.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border bg-white p-6 shadow-sm transition-all hover:shadow-md dark:border-neutral-800 dark:bg-neutral-950"
                >
                    <div
                        class="flex size-12 items-center justify-center rounded-xl bg-linear-to-br from-green-500 to-green-600 text-white mb-4"
                    >
                        <Zap :size="24" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Accessible</h3>
                    <p class="text-muted-foreground">
                        Built with accessibility in mind. Keyboard navigation, screen readers, and
                        ARIA support.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border bg-white p-6 shadow-sm transition-all hover:shadow-md dark:border-neutral-800 dark:bg-neutral-950"
                >
                    <div
                        class="flex size-12 items-center justify-center rounded-xl bg-linear-to-br from-orange-500 to-orange-600 text-white mb-4"
                    >
                        <Layout :size="24" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Modern Design</h3>
                    <p class="text-muted-foreground">
                        Clean, beautiful components that look great out of the box and match your
                        brand.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border bg-white p-6 shadow-sm transition-all hover:shadow-md dark:border-neutral-800 dark:bg-neutral-950"
                >
                    <div
                        class="flex size-12 items-center justify-center rounded-xl bg-linear-to-br from-pink-500 to-pink-600 text-white mb-4"
                    >
                        <Layers :size="24" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Composable</h3>
                    <p class="text-muted-foreground">
                        Build complex UIs by combining simple, reusable components.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div
                    class="group relative overflow-hidden rounded-2xl border bg-white p-6 shadow-sm transition-all hover:shadow-md dark:border-neutral-800 dark:bg-neutral-950"
                >
                    <div
                        class="flex size-12 items-center justify-center rounded-xl bg-linear-to-br from-cyan-500 to-cyan-600 text-white mb-4"
                    >
                        <CheckCircle2 :size="24" />
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Production Ready</h3>
                    <p class="text-muted-foreground">
                        Battle-tested components used in production applications worldwide.
                    </p>
                </div>
            </div>
        </div>

        <!-- Component Showcase Section -->
        <div class="relative overflow-hidden bg-blue-50 dark:bg-blue-950 py-24">
            <div
                class="absolute inset-0 bg-[linear-gradient(to_right,#dbeafe_1px,transparent_1px),linear-gradient(to_bottom,#dbeafe_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,#1e3a5f_1px,transparent_1px),linear-gradient(to_bottom,#1e3a5f_1px,transparent_1px)] bg-size-[40px_40px]"
            />

            <div class="relative mx-auto max-w-6xl px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">
                        Popular Components
                    </h2>
                    <p class="mt-4 text-lg text-muted-foreground max-w-2xl mx-auto">
                        Start building with these essential components or explore the full
                        collection.
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <Link href="/components/button">
                        <div
                            class="group flex flex-col items-center rounded-xl border bg-white p-6 text-center transition-all hover:shadow-md hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-950 dark:hover:border-neutral-700"
                        >
                            <div class="mb-3 rounded-lg bg-neutral-100 p-3 dark:bg-neutral-800">
                                <Command
                                    :size="24"
                                    class="text-neutral-700 dark:text-neutral-300"
                                />
                            </div>
                            <span class="font-medium">Button</span>
                        </div>
                    </Link>

                    <Link href="/components/input">
                        <div
                            class="group flex flex-col items-center rounded-xl border bg-white p-6 text-center transition-all hover:shadow-md hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-950 dark:hover:border-neutral-700"
                        >
                            <div class="mb-3 rounded-lg bg-neutral-100 p-3 dark:bg-neutral-800">
                                <Code2 :size="24" class="text-neutral-700 dark:text-neutral-300" />
                            </div>
                            <span class="font-medium">Input</span>
                        </div>
                    </Link>

                    <Link href="/components/card">
                        <div
                            class="group flex flex-col items-center rounded-xl border bg-white p-6 text-center transition-all hover:shadow-md hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-950 dark:hover:border-neutral-700"
                        >
                            <div class="mb-3 rounded-lg bg-neutral-100 p-3 dark:bg-neutral-800">
                                <Layout :size="24" class="text-neutral-700 dark:text-neutral-300" />
                            </div>
                            <span class="font-medium">Card</span>
                        </div>
                    </Link>

                    <Link href="/components/dialog">
                        <div
                            class="group flex flex-col items-center rounded-xl border bg-white p-6 text-center transition-all hover:shadow-md hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-950 dark:hover:border-neutral-700"
                        >
                            <div class="mb-3 rounded-lg bg-neutral-100 p-3 dark:bg-neutral-800">
                                <Layers :size="24" class="text-neutral-700 dark:text-neutral-300" />
                            </div>
                            <span class="font-medium">Dialog</span>
                        </div>
                    </Link>

                    <Link href="/components/dropdown-menu">
                        <div
                            class="group flex flex-col items-center rounded-xl border bg-white p-6 text-center transition-all hover:shadow-md hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-950 dark:hover:border-neutral-700"
                        >
                            <div class="mb-3 rounded-lg bg-neutral-100 p-3 dark:bg-neutral-800">
                                <Palette
                                    :size="24"
                                    class="text-neutral-700 dark:text-neutral-300"
                                />
                            </div>
                            <span class="font-medium">Dropdown</span>
                        </div>
                    </Link>

                    <Link href="/components/command">
                        <div
                            class="group flex flex-col items-center rounded-xl border bg-white p-6 text-center transition-all hover:shadow-md hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-950 dark:hover:border-neutral-700"
                        >
                            <div class="mb-3 rounded-lg bg-neutral-100 p-3 dark:bg-neutral-800">
                                <Command
                                    :size="24"
                                    class="text-neutral-700 dark:text-neutral-300"
                                />
                            </div>
                            <span class="font-medium">Command</span>
                        </div>
                    </Link>

                    <Link href="/components/badge">
                        <div
                            class="group flex flex-col items-center rounded-xl border bg-white p-6 text-center transition-all hover:shadow-md hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-950 dark:hover:border-neutral-700"
                        >
                            <div class="mb-3 rounded-lg bg-neutral-100 p-3 dark:bg-neutral-800">
                                <Sparkles
                                    :size="24"
                                    class="text-neutral-700 dark:text-neutral-300"
                                />
                            </div>
                            <span class="font-medium">Badge</span>
                        </div>
                    </Link>

                    <Link href="/components">
                        <div
                            class="group flex flex-col items-center rounded-xl border border-dashed bg-white p-6 text-center transition-all hover:shadow-md hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-950 dark:hover:border-neutral-700"
                        >
                            <div class="mb-3 rounded-lg bg-neutral-100 p-3 dark:bg-neutral-800">
                                <ArrowRight
                                    :size="24"
                                    class="text-neutral-700 dark:text-neutral-300"
                                />
                            </div>
                            <span class="font-medium">View All</span>
                        </div>
                    </Link>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mx-auto max-w-6xl px-4 py-24">
            <div
                class="relative overflow-hidden rounded-3xl border bg-linear-to-br from-blue-50 to-indigo-50 p-12 text-center dark:border-blue-900 dark:from-blue-950 dark:to-indigo-950"
            >
                <!-- Background Decoration -->
                <div
                    class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-64 h-64 bg-linear-to-br from-blue-400/20 to-cyan-400/20 rounded-full blur-3xl"
                />
                <div
                    class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-64 h-64 bg-linear-to-br from-indigo-400/20 to-blue-400/20 rounded-full blur-3xl"
                />

                <div class="relative">
                    <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">
                        Ready to Build?
                    </h2>
                    <p class="mt-4 text-lg text-muted-foreground max-w-2xl mx-auto">
                        Explore all components and start building beautiful interfaces today.
                    </p>

                    <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
                        <Link href="/components">
                            <Button size="lg" class="h-12 px-8 text-base">
                                <BookOpen :size="18" class="mr-2" />
                                Browse Components
                            </Button>
                        </Link>
                        <Button size="lg" variant="outline" class="h-12 px-8 text-base">
                            <Command :size="18" class="mr-2" />
                            <Kbd class="text-xs mr-1">⌘</Kbd>
                            <Kbd class="text-xs">K</Kbd>
                            to Search
                        </Button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mx-auto max-w-6xl px-4 py-12 border-t">
            <div
                class="flex flex-col items-center justify-center gap-4 text-center text-sm text-muted-foreground"
            >
                <div class="flex items-center gap-2">
                    <span>Built with</span>
                    <Badge variant="secondary">Vue 3</Badge>
                    <Badge variant="secondary">TypeScript</Badge>
                    <Badge variant="secondary">Tailwind CSS</Badge>
                    <Badge variant="secondary">Shadcn Vue</Badge>
                </div>
                <div>
                    Inspired by
                    <a
                        href="https://laravel.com"
                        class="hover:text-neutral-900 dark:hover:text-white transition-colors"
                        >Laravel</a
                    >
                    and
                    <a
                        href="https://tailwindcss.com"
                        class="hover:text-neutral-900 dark:hover:text-white transition-colors"
                        >Tailwind CSS</a
                    >
                </div>
            </div>
        </div>
    </PageLayout>
</template>
