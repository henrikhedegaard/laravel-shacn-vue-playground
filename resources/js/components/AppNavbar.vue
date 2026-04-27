<script setup lang="ts">
import { computed, ref } from "vue";
import { Link, usePage } from "@inertiajs/vue3";
import { Search, Sun, Moon, Monitor, ChevronLeft } from "lucide-vue-next";
import { Button } from "@/components/ui/button";
import { Kbd } from "@/components/ui/kbd";
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuTrigger,
} from "@/components/ui/dropdown-menu";
import {
    AlertDialog,
    AlertDialogContent,
    AlertDialogHeader,
    AlertDialogTitle,
    AlertDialogDescription,
    AlertDialogFooter,
    AlertDialogAction,
} from "@/components/ui/alert-dialog";
import { useAppearance } from "@/composables/useAppearance";
import { useCommandPalette } from "@/composables/useCommandPalette";
import { dashboard, login, logout, home } from "@/routes";
import Badge from "./ui/badge/Badge.vue";

interface Props {
    showBackLink?: boolean;
}

withDefaults(defineProps<Props>(), {
    showBackLink: false,
});

const { appearance, updateAppearance } = useAppearance();
const { show: showCommandPalette } = useCommandPalette();

const page = usePage();
const user = computed(
    () => (page.props.auth as { user: { name: string } | null } | undefined)?.user ?? null,
);

const isMac = typeof navigator !== "undefined" && /Mac/.test(navigator.platform);

const showSignupDisabled = ref(false);
</script>

<template>
    <header
        class="sticky top-0 z-40 w-full border-b bg-white/80 backdrop-blur dark:bg-neutral-900/80"
    >
        <div class="mx-auto flex h-14 max-w-6xl items-center justify-between px-4">
            <!-- Left: Logo / Back link -->
            <div class="flex items-center gap-4">
                <Link
                    v-if="showBackLink"
                    :href="home()"
                    class="flex items-center gap-1 text-sm text-muted-foreground hover:text-neutral-800 dark:hover:text-neutral-200"
                >
                    <ChevronLeft :size="16" />
                    Back
                </Link>
                <Link :href="home()" class="flex items-center gap-2 font-semibold">
                    <span class="text-base">Playground</span>
                </Link>
                <nav class="hidden items-center gap-4 text-sm md:flex">
                    <Link
                        href="/components"
                        class="text-muted-foreground transition-colors hover:text-neutral-800 dark:hover:text-neutral-200"
                    >
                        Components
                    </Link>
                    <Link
                        href="/custom-components"
                        class="text-muted-foreground transition-colors hover:text-neutral-800 dark:hover:text-neutral-200"
                    >
                        Custom Components
                    </Link>
                </nav>
            </div>

            <!-- Right: Search, Theme, Auth -->
            <div class="flex items-center gap-2">
                <!-- Search Trigger -->
                <Button
                    variant="outline"
                    size="sm"
                    class="hidden h-9 rounded-full justify-between text-muted-foreground sm:flex cursor-pointer"
                    @click="showCommandPalette()"
                >
                    <span class="flex items-center gap-2">
                        <Search :size="14" />
                    </span>
                    <span class="flex items-center gap-0 rounded-full overflow-hidden bg-gray-100">
                        <Kbd class="text-xs ml-0.5">{{ isMac ? "⌘" : "Ctrl" }}</Kbd>
                        <Kbd class="text-xs -ml-1.5 bg-transparent">K</Kbd>
                    </span>
                </Button>
                <Button variant="ghost" size="icon" class="sm:hidden" @click="showCommandPalette()">
                    <Search :size="16" />
                </Button>

                <!-- Theme Switcher -->
                <DropdownMenu>
                    <DropdownMenuTrigger as-child>
                        <Button variant="ghost" size="icon">
                            <Sun v-if="appearance === 'light'" :size="16" />
                            <Moon v-else-if="appearance === 'dark'" :size="16" />
                            <Monitor v-else :size="16" />
                            <span class="sr-only">Toggle theme</span>
                        </Button>
                    </DropdownMenuTrigger>
                    <DropdownMenuContent align="end">
                        <DropdownMenuItem @click="updateAppearance('light')">
                            <Sun :size="14" class="mr-2" />
                            Light
                        </DropdownMenuItem>
                        <DropdownMenuItem @click="updateAppearance('dark')">
                            <Moon :size="14" class="mr-2" />
                            Dark
                        </DropdownMenuItem>
                        <DropdownMenuItem @click="updateAppearance('system')">
                            <Monitor :size="14" class="mr-2" />
                            System
                        </DropdownMenuItem>
                    </DropdownMenuContent>
                </DropdownMenu>

                <!-- Auth -->
                <template v-if="user">
                    <Link :href="dashboard()">
                        <Button variant="outline" size="sm">Dashboard</Button>
                    </Link>
                    <Link :href="logout()" as="button">
                        <Button variant="ghost" size="sm">Log out</Button>
                    </Link>
                </template>
                <template v-else>
                    <Link :href="login()" class="hidden sm:block">
                        <Button variant="ghost" size="sm">Log in</Button>
                    </Link>
                    <Button size="sm" @click="showSignupDisabled = true">Sign up</Button>
                </template>
            </div>
        </div>
    </header>

    <AlertDialog :open="showSignupDisabled" @update:open="showSignupDisabled = $event">
        <AlertDialogContent>
            <AlertDialogHeader>
                <AlertDialogTitle>Sign up temporarily disabled</AlertDialogTitle>
                <AlertDialogDescription>
                    Registration is temporarily disabled. Please check back later.
                </AlertDialogDescription>
            </AlertDialogHeader>
            <AlertDialogFooter>
                <AlertDialogAction @click="showSignupDisabled = false">OK</AlertDialogAction>
            </AlertDialogFooter>
        </AlertDialogContent>
    </AlertDialog>
</template>
