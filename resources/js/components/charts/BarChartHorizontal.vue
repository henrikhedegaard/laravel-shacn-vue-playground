<script setup lang="ts">
import { VisAxis, VisGroupedBar, VisXYContainer } from "@unovis/vue"

interface DataPoint {
  category: string
  value: number
}

const data: DataPoint[] = [
  { category: "Electronics", value: 4500 },
  { category: "Clothing", value: 3200 },
  { category: "Food", value: 2800 },
  { category: "Books", value: 1900 },
  { category: "Home", value: 2400 },
]

const getX = (datum: DataPoint): string => datum.category
const getY = (datum: DataPoint): number => datum.value
</script>

<template>
  <div class="w-full h-[300px]">
    <VisXYContainer :data="data" :margin="{ top: 20, right: 20, bottom: 40, left: 80 }">
      <VisGroupedBar
        :x="getY"
        :y="[getX]"
        :color="['#2563eb']"
        :rounded-corners="4"
        bar-padding="0.3"
        group-padding="0"
        :layout="'horizontal'"
      />
    </VisXYContainer>
  </div>
</template>
