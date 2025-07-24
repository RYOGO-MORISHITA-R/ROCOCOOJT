@extends('layouts.app')

@section('content')

    <h2 class="page-title">Home</h2>

<div class="top-10">
    <div class="dashboard-metrics" style="display: flex; gap: 30px; margin-bottom: 40px; justify-content: center;">
        <div class="metric-box" style="background: #f8B800; padding: 20px; border-radius: 12px; color: white; flex: 1; text-align: center; max-width: 250px;">
            <div style="font-size: 20px;">会員総数</div>
            <div style="font-size: 32px; font-weight: bold;">{{ $totalUsers }}</div>
        </div>
        <div class="metric-box" style="background: #00AEEF; padding: 20px; border-radius: 12px; color: white; flex: 1; text-align: center; max-width: 250px;">
            <div style="font-size: 20px;">ブログ総数</div>
            <div style="font-size: 32px; font-weight: bold;">{{ $totalBlogs }}</div>
        </div>
        <div class="metric-box" style="background: #8DC63F; padding: 20px; border-radius: 12px; color: white; flex: 1; text-align: center; max-width: 250px;">
            <div style="font-size: 20px;">ブログ閲覧総数</div>
            <div style="font-size: 32px; font-weight: bold;">{{ $totalViews }}</div>
        </div>
    </div>
</div>

<div style="width: 100%; max-width: 900px; margin: auto;">
    <canvas id="membershipChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = @json($labels);
    const joinCounts = @json($joinCounts);
    const leaveCounts = @json($leaveCounts);

    const ctx = document.getElementById('membershipChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: '入会数',
                    data: joinCounts,
                    borderColor: '#f8B800',
                    backgroundColor: 'rgba(248,184,0,0.1)',
                    fill: true,
                    tension: 0.4
                },
                {
                    label: '退会数',
                    data: leaveCounts,
                    borderColor: '#888',
                    backgroundColor: 'rgba(136,136,136,0.1)',
                    fill: true,
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: '月別 入会数 / 退会数'
                }
            }
        }
    });
</script>
@endsection
