@extends('layouts.app')
@section('title', 'Statistics')
@section('content')
@include('partials.header')

<section style="
    background-image: url('/assets/images/section/stats.jpg');
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    position: relative;
">

    <div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.5);
    "></div>

    
    <div style="position: relative; color: white;">
        <h1 style="font-size: 60px; font-weight: bold;">Tourism Statistics</h1>
        <p style="font-size: 20px; margin-top: 10px;">Cambodia Tourism Data and Performance Overview 2025</p>
    </div>
</section>

<section style="padding:40px 20px; background:#f5f5f5; text-align:center;">
    <h2>Key Statistics</h2>

    <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap; margin-top:20px;">

        <div style="background:white; padding:20px; width:200px; border-radius:10px;">
            <h2>5.57M</h2>
            <p>Visitors</p>
        </div>

        <div style="background:white; padding:20px; width:200px; border-radius:10px;">
            <h2>$3.6B</h2>
            <p>Revenue</p>
        </div>

        <div style="background:white; padding:20px; width:200px; border-radius:10px;">
            <h2>7.1</h2>
            <p>Avg Stay (Days)</p>
        </div>

        <div style="background:white; padding:20px; width:200px; border-radius:10px;">
            <h2>77.8%</h2>
            <p>Hotel Occupancy</p>
        </div>

    </div>
</section>


<section style="padding:40px 20px;">
    <h2 style="text-align:center;">Top Visitor Countries</h2>

    <ul style="max-width:400px; margin:20px auto; font-size:18px;">
        <li>Vietnam – 1,222,101</li>
        <li>China – 1,201,681</li>
        <li>USA – 206,791</li>
        <li>South Korea – 152,598</li>
    </ul>
</section>


<section style="padding:40px 20px; background:#f5f5f5;">
    <h2 style="text-align:center;">Visitor Arrivals</h2>

    <table style="width:80%; margin:auto; border-collapse:collapse; margin-top:20px;">
        <tr style="background:#1a3c5e; color:white;">
            <th style="padding:10px;">Year</th>
            <th style="padding:10px;">Visitors</th>
        </tr>

        <tr>
            <td style="padding:10px; border:1px solid #ddd;">2022</td>
            <td style="padding:10px; border:1px solid #ddd;">2,276,626</td>
        </tr>

        <tr>
            <td style="padding:10px; border:1px solid #ddd;">2023</td>
            <td style="padding:10px; border:1px solid #ddd;">5,453,231</td>
        </tr>

        <tr>
            <td style="padding:10px; border:1px solid #ddd;">2024</td>
            <td style="padding:10px; border:1px solid #ddd;">6,700,125</td>
        </tr>

        <tr>
            <td style="padding:10px; border:1px solid #ddd;">2025</td>
            <td style="padding:10px; border:1px solid #ddd;">5,569,752</td>
        </tr>
    </table>
</section>
<section>
    <p style="text-align:center; font-size:15px; color:gray;">
    Source:
    <a href="https://nis.gov.kh/wp-content/uploads/2025/10/CAM092025.pdf" target="_blank">
        Cambodia Tourism Statistics Report 2025 (PDF)
    </a>
</p>

</section>

@endsection
