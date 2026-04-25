<script setup lang="ts">
import { VisDonut, VisSingleContainer } from "@unovis/vue";

interface DataPoint {
    category: string;
    value: number;
}

const data: DataPoint[] = [
    { category: "Desktop", value: 45 },
    { category: "Mobile", value: 35 },
    { category: "Tablet", value: 20 },
];

const getCategory = (datum: DataPoint): string => datum.category;
const getValue = (datum: DataPoint): number => datum.value;
</script>

<template>
    <div class="w-full h-[300px] flex items-center justify-center">
        <VisSingleContainer :data="data">
            <VisDonut
                :value="getValue"
                :category="getCategory"
                :arc-width="40"
                :show-legend="true"
            />
        </VisSingleContainer>
    </div>
</template>
