<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Export PDF</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .invoice-table th, .invoice-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        
        .invoice-table thead {
            background-color: #f9f9f9;
        }
        
        .invoice-table tbody tr:hover {
            background-color: #f5f5f5;
        }
        
        .invoice-table th {
            background-color: #333;
            color: #fff;
            text-align: left;
        }
        
        .invoice-table td:first-child {
            font-weight: bold;
        }
        
        .highlight {
            background-color: #ffd700;
        }
        
        .total-row td {
            font-weight: bold;
        }
        
        .notes {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <h1>Jadwal Pengiriman</h1>
    <table class="invoice-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kota Asal</th>
                <th>Kota Tujuan</th>
                <th>Outlet</th>
                <th>Status Pengiriman</th>
                <th>Kategori Barang</th>
                <th>Tanggal Pengiriman</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal_pengiriman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->RRute->kota_asal }}</td>
                    <td>{{ $item->RRute->kota_tujuan }}</td>
                    <td>{{ $item->ROutlet->nama_outlet }}</td>
                    <td>{{ $item->RPengiriman->status_pengiriman }}</td>
                    <td>{{ $item->Kategoribarang->nama_kategori_barang }}</td>
                    <td>{{ $item->tanggal_pengiriman }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="notes">
        <p>Note: Data Diambil Dari SCMLITE.</p>
    </div>
</body>
</html>
