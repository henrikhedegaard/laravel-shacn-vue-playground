<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue"
import { Card, CardContent } from "@/components/ui/card"
import {
  Carousel,
  CarouselContent,
  CarouselItem,
  CarouselNext,
  CarouselPrevious,
} from "@/components/ui/carousel"
</script>

<template>
  <PageLayout
    title="Carousel"
    description="A carousel component for sliding content"
    show-back-link
  >
    <Carousel class="w-full max-w-xs mx-auto">
      <CarouselContent>
        <CarouselItem v-for="i in 5" :key="i">
          <div class="p-1">
            <Card>
              <CardContent class="flex aspect-square items-center justify-center p-6">
                <span class="text-4xl font-semibold">{{ i }}</span>
              </CardContent>
            </Card>
          </div>
        </CarouselItem>
      </CarouselContent>
      <CarouselPrevious />
      <CarouselNext />
    </Carousel>
  </PageLayout>
</template>
