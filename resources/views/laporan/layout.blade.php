<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'LaporBanjir') - BPBD Kabupaten Bandung</title>
    <style>
        body{font-family:Arial,sans-serif;margin:0;background:#f2f7f2;color:#263b2b}header{background:#28643c;color:white;padding:15px 0;border-bottom:4px solid #a8cf78}nav,.container{width:90%;max-width:1000px;margin:auto}nav{display:flex;justify-content:space-between;align-items:center}nav a{color:white;text-decoration:none;margin-left:15px}nav a:hover{color:#d7edb8}.brand{font-size:20px;font-weight:bold}.brand:before{content:'●';color:#a8cf78;margin-right:8px}main{min-height:75vh}.container{padding:25px 0}h1{font-size:26px;color:#28643c}h2{font-size:20px;color:#28643c}.box{background:white;border:1px solid #d5e3d5;border-left:4px solid #a8cf78;padding:20px;margin:18px 0}.btn{display:inline-block;background:#38824f;color:white;padding:9px 13px;border:0;border-radius:3px;text-decoration:none;cursor:pointer}.btn:hover{background:#28643c}.btn.gray{background:#687b6c}.btn.red{background:#b33}.btn.small{padding:6px 9px;font-size:13px}input,select,textarea{width:100%;padding:9px;border:1px solid #bdcfbd;border-radius:3px;box-sizing:border-box;margin-top:5px}input:focus,select:focus,textarea:focus{outline:2px solid #a8cf78}textarea{min-height:90px}.field{margin-bottom:15px}.error{color:#b33;font-size:13px;margin-top:4px}.success{padding:10px;background:#e8f3e8;color:#28643c;border-left:4px solid #38824f;margin:15px 0}.notice{padding:10px;background:#eff6df;color:#49652b;border-left:4px solid #a8cf78;margin:15px 0}.grid{display:grid;grid-template-columns:1fr 1fr;gap:15px}.full{grid-column:1/-1}.stats{display:flex;gap:15px}.stats div{background:#fff;border:1px solid #d5e3d5;border-top:3px solid #a8cf78;padding:15px;flex:1}.stats strong{display:block;font-size:22px;color:#28643c;margin-top:7px}.table-wrap{overflow-x:auto}table{width:100%;border-collapse:collapse;background:white}th,td{text-align:left;padding:10px;border:1px solid #d5e3d5}th{background:#eaf3e8;color:#28643c}.thumb{width:60px;height:45px;object-fit:cover}img.large{max-width:100%;height:auto}.badge{font-size:13px;padding:4px 7px;background:#e4efd8;border-radius:3px;color:#385b2b}.actions{white-space:nowrap}.inline{display:inline}footer{text-align:center;color:#58705c;padding:18px;border-top:1px solid #d5e3d5;background:white}@media(max-width:650px){nav{align-items:flex-start;gap:10px;flex-direction:column}nav a{margin:0 10px 0 0}.grid{grid-template-columns:1fr}.full{grid-column:auto}.stats{gap:6px}.stats div{padding:9px}.stats strong{font-size:18px}.container{width:92%}}
    </style>
</head>
<body>
<header><nav>
    <a class="brand" href="{{ route('home') }}">LaporBanjir</a>
    <div><a href="{{ route('home') }}">Beranda</a><a href="{{ route('laporan.create') }}">Buat Laporan</a>
        @auth<a href="{{ route('petugas.laporan.index') }}">Data Laporan</a><form class="inline" method="POST" action="{{ route('logout') }}">@csrf<button class="btn gray small" type="submit">Keluar</button></form>
        @else<a href="{{ route('login') }}">Login Petugas</a><a href="{{ route('register') }}">Daftar Petugas</a>@endauth
    </div>
</nav></header>
<main>@yield('content')</main>
<footer>BPBD Kabupaten Bandung - LaporBanjir</footer>
</body>
</html>
