<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Terima kasih atas pesan Anda</title>
</head>

<body>
    <h2>Terima kasih atas pesan Anda</h2>

    <p>Halo {{ $data['name'] }},</p>

    <p>
        Terima kasih telah menghubungi kami melalui website <strong>New Armada Group</strong>.
    </p>

    <p><strong>Detail pesan Anda:</strong></p>
    <ul>
        <li><strong>Tanggal:</strong> {{ \Carbon\Carbon::now()->format('d/m/Y') }}</li>
        <li><strong>Isi Pesan:</strong> {{ $data['message'] }}</li>
    </ul>

    <p>
        Pesan Anda telah kami terima dan sedang dalam proses review oleh tim terkait. <br>
        Kami akan merespon dalam waktu maksimal <strong>2x24 jam</strong> pada hari kerja.
    </p>

    <p>Terima kasih atas kepercayaan Anda.</p>

    <p>
        Salam, <br>
        <strong>New Armada Group</strong>
    </p>
</body>

</html>