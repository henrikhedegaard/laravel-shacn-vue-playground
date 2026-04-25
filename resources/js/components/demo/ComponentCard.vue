<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ArrowRight } from "lucide-vue-next";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";

interface Props {
    title: string;
    description: string;
    href: string;
}

defineProps<Props>();
</script>

<template>
    <Link :href="href" class="block">
        <Card class="transition-shadow hover:shadow-md">
            <CardHeader>
                <CardTitle class="flex items-center justify-between">
                    {{ title }}
                    <ArrowRight :size="16" class="text-muted-foreground" />
                </CardTitle>
                <CardDescription>{{ description }}</CardDescription>
            </CardHeader>
        </Card>
    </Link>
</template>
