<script setup lang="ts">
import { ref } from "vue";
import { Collapsible, CollapsibleContent, CollapsibleTrigger } from "@/components/ui/collapsible";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";

const isOpen = ref(false);
import PageLayout from "@/components/PageLayout.vue";

</script>

<template>
    <PageLayout title="Collapsible" description="An interactive component which expands/collapses a panel" show-back-link>
        <div class="space-y-8">
                <Card>
                    <CardHeader>
                        <CardTitle>Basic Collapsible</CardTitle>
                        <CardDescription>Toggle content visibility</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <Collapsible v-model:open="isOpen" class="w-full space-y-2">
                            <div class="flex items-center justify-between space-x-4">
                                <h4 class="text-sm font-semibold">
                                    @peduarte starred 3 repositories
                                </h4>
                                <CollapsibleTrigger as-child>
                                    <Button variant="ghost" size="sm">
                                        <span>{{ isOpen ? "Hide" : "Show" }}</span>
                                    </Button>
                                </CollapsibleTrigger>
                            </div>
                            <div class="rounded-md border px-4 py-3 font-mono text-sm">
                                @radix-ui/primitives
                            </div>
                            <CollapsibleContent class="space-y-2">
                                <div class="rounded-md border px-4 py-3 font-mono text-sm">
                                    @radix-ui/colors
                                </div>
                                <div class="rounded-md border px-4 py-3 font-mono text-sm">
                                    @stitches/react
                                </div>
                            </CollapsibleContent>
                        </Collapsible>
                    </CardContent>
                </Card>
            </div>
    </PageLayout>
</template>
