<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue";
import { ScrollArea, ScrollBar } from "@/components/ui/scroll-area";
</script>

<template>
    <PageLayout
        title="Scroll Area"
        description="A scrollable area with custom scrollbars"
        show-back-link
    >
        <ScrollArea class="h-[200px] w-[350px] rounded-md border p-4">
            <div class="space-y-4">
                <h4 class="font-semibold leading-none">Engineering Team</h4>
                <p class="text-sm text-muted-foreground">
                    Responsible for building and maintaining our technical infrastructure.
                </p>
                <div class="space-y-2">
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-primary/20" />
                        <span class="text-sm">Alice Johnson - Senior Engineer</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-primary/20" />
                        <span class="text-sm">Bob Smith - Full Stack Developer</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-primary/20" />
                        <span class="text-sm">Carol White - DevOps Engineer</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-primary/20" />
                        <span class="text-sm">David Brown - Backend Developer</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-primary/20" />
                        <span class="text-sm">Eve Davis - Frontend Developer</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-primary/20" />
                        <span class="text-sm">Frank Miller - QA Engineer</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-primary/20" />
                        <span class="text-sm">Grace Lee - Technical Lead</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="h-8 w-8 rounded-full bg-primary/20" />
                        <span class="text-sm">Henry Wilson - System Architect</span>
                    </div>
                </div>
            </div>
        </ScrollArea>
    </PageLayout>
</template>
