<script setup lang="ts">
import { VisAxis, VisLine, VisXYContainer } from "@unovis/vue";

interface DataPoint {
    month: string;
    sales: number;
}

const data: DataPoint[] = [
    { month: "Jan", sales: 120 },
    { month: "Feb", sales: 180 },
    { month: "Mar", sales: 150 },
    { month: "Apr", sales: 220 },
    { month: "May", sales: 190 },
    { month: "Jun", sales: 280 },
];

const getX = (datum: DataPoint): string => datum.month;
const getY = (datum: DataPoint): number => datum.sales;
</script>

<template>
    <div class="w-full h-[300px]">
        <VisXYContainer :data="data" :margin="{ top: 20, right: 20, bottom: 40, left: 40 }">
            <VisLine :x="getX" :y="getY" color="#2563eb" :curve-type="'monotoneX'" />
        </VisXYContainer>
    </div>
</template>
