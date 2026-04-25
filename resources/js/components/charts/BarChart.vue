<script setup lang="ts">
import { VisAxis, VisGroupedBar, VisXYContainer } from "@unovis/vue";

interface DataPoint {
    month: string;
    revenue: number;
}

const data: DataPoint[] = [
    { month: "Jan", revenue: 4500 },
    { month: "Feb", revenue: 5200 },
    { month: "Mar", revenue: 4800 },
    { month: "Apr", revenue: 6100 },
    { month: "May", revenue: 5800 },
    { month: "Jun", revenue: 7200 },
];

const getX = (datum: DataPoint): string => datum.month;
const getY = (datum: DataPoint): number => datum.revenue;
</script>

<template>
    <div class="w-full h-[300px]">
        <VisXYContainer :data="data" :margin="{ top: 20, right: 20, bottom: 40, left: 60 }">
            <VisGroupedBar
                :x="getX"
                :y="[getY]"
                :color="['#2563eb']"
                :rounded-corners="4"
                bar-padding="0.2"
                group-padding="0"
            />
        </VisXYContainer>
    </div>
</template>
