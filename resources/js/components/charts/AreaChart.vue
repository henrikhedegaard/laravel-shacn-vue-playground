<script setup lang="ts">
import { VisArea, VisAxis, VisXYContainer } from "@unovis/vue";

interface DataPoint {
    month: string;
    visitors: number;
}

const data: DataPoint[] = [
    { month: "Jan", visitors: 186 },
    { month: "Feb", visitors: 305 },
    { month: "Mar", visitors: 237 },
    { month: "Apr", visitors: 273 },
    { month: "May", visitors: 209 },
    { month: "Jun", visitors: 328 },
];

const getX = (datum: DataPoint): string => datum.month;
const getY = (datum: DataPoint): number => datum.visitors;
</script>

<template>
    <div class="w-full h-[300px]">
        <VisXYContainer :data="data" :margin="{ top: 20, right: 20, bottom: 40, left: 40 }">
            <VisArea :x="getX" :y="getY" color="#2563eb" :curve-type="'monotoneX'" />
        </VisXYContainer>
    </div>
</template>
