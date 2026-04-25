<script setup lang="ts">
import PageLayout from "@/components/PageLayout.vue";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import AreaChart from "@/components/charts/AreaChart.vue";
import BarChart from "@/components/charts/BarChart.vue";
import BarChartHorizontal from "@/components/charts/BarChartHorizontal.vue";
import BarChartMultiple from "@/components/charts/BarChartMultiple.vue";
import LineChart from "@/components/charts/LineChart.vue";
import PieChart from "@/components/charts/PieChart.vue";
</script>

<template>
    <PageLayout
        title="Chart"
        description="Chart components for data visualization using Unovis/vue"
        show-back-link
    >
        <div class="grid gap-6 md:grid-cols-2">
            <Card>
                <CardHeader>
                    <CardTitle>Area Chart</CardTitle>
                    <CardDescription>Monthly visitors over 6 months</CardDescription>
                </CardHeader>
                <CardContent>
                    <AreaChart />
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <CardTitle>Bar Chart - Interactive</CardTitle>
                    <CardDescription>Total visitors for the last 6 months</CardDescription>
                </CardHeader>
                <CardContent>
                    <BarChart />
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <CardTitle>Bar Chart - Horizontal</CardTitle>
                    <CardDescription>Revenue by category</CardDescription>
                </CardHeader>
                <CardContent>
                    <BarChartHorizontal />
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <CardTitle>Bar Chart - Multiple</CardTitle>
                    <CardDescription>Desktop vs Mobile visitors</CardDescription>
                </CardHeader>
                <CardContent>
                    <BarChartMultiple />
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <CardTitle>Line Chart</CardTitle>
                    <CardDescription>Monthly sales over 6 months</CardDescription>
                </CardHeader>
                <CardContent>
                    <LineChart />
                </CardContent>
            </Card>

            <Card>
                <CardHeader>
                    <CardTitle>Pie Chart</CardTitle>
                    <CardDescription>Device distribution</CardDescription>
                </CardHeader>
                <CardContent>
                    <PieChart />
                </CardContent>
            </Card>
        </div>
    </PageLayout>
</template>
