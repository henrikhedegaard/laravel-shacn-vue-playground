<script setup lang="ts">
import { VisAxis, VisGroupedBar, VisXYContainer } from "@unovis/vue";

interface DataPoint {
    month: string;
    desktop: number;
    mobile: number;
}

const data: DataPoint[] = [
    { desktop: 186, mobile: 80, month: "Jan" },
    { desktop: 305, mobile: 200, month: "Feb" },
    { desktop: 237, mobile: 120, month: "Mar" },
    { desktop: 273, mobile: 190, month: "Apr" },
    { desktop: 209, mobile: 130, month: "May" },
    { desktop: 214, mobile: 140, month: "Jun" },
];

const getX = (datum: DataPoint): string => datum.month;
const getDesktop = (datum: DataPoint): number => datum.desktop;
const getMobile = (datum: DataPoint): number => datum.mobile;
</script>

<template>
    <div class="w-full h-[300px]">
        <VisXYContainer :data="data" :margin="{ top: 20, right: 20, bottom: 40, left: 40 }">
            <VisGroupedBar
                :x="getX"
                :y="[getDesktop, getMobile]"
                :color="['#2563eb', '#60a5fa']"
                :rounded-corners="4"
                bar-padding="0.1"
                group-padding="0"
            />
        </VisXYContainer>
    </div>
</template>
