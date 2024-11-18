<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Informasi Izin</title>
    <style>
        .slice {
            border: 1px solid rgb(155, 154, 154);
        }

        .text-center {
            text-align: center !important;
        }

        .text-primary {
            color: rgba(13, 110, 253, 1) !important
        }

        img {
            vertical-align: middle
        }

        .mb-4 {
            margin-bottom: 1.5rem !important
        }

        .mt-4 {
            margin-top: 1.5rem !important
        }

        .mt-5 {
            margin-top: 3rem !important
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .d-block {
            display: block !important;
        }

        h5 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-size: 1.25rem;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .rounded {
            border-radius: 0.375rem !important
        }
    </style>
</head>

<body>
    <hr style="height: 2px; border-width: 0; color:black; background-color:black">
    <h5 class="text-center mb-4 mt-4 text-primary">Data Perizinan Mahasantri</h5>
    <table border="1" class="slice" align="center" cellpadding="3" cellspacing="0" width="80%">
        <thead>
            <tr class="slice">
                <th class="text-center">No.</th>
                <th class="text-center">Nama Mahasantri</th>
                <th class="text-center">Tanggal & Jam Keluar</th>
                <th class="text-center">Batas Tanggal & Jam Masuk</th>
                <th class="text-center">Tanggal & Jam Kedatangan Mahasantri</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($detail_perizinans as $detail_perizinan)
                <tr class="text-center" style="font-size: .9rem;">
                    <td>{{ $no++ }}</td>
                    <td>{{ $detail_perizinan->mahasantri->nama }}</td>
                    <td>{{ date('j F Y', strtotime($detail_perizinan->tanggal_keluar)) }}, {{ date('H:i', strtotime($detail_perizinan->waktu_keluar)) }}
                    </td>
                    <td>{{ date('j F Y', strtotime($detail_perizinan->tanggal_masuk)) }},
                        {{ date('H:i', strtotime($detail_perizinan->waktu_masuk)) }}
                    </td>
                    <td>{{ date('j F Y, H:i', strtotime($detail_perizinan->updated_at)) }}</td>
                    @php
                        $jam = date('H:i:s', strtotime($detail_perizinan->updated_at));
                        $tanggal = date('j n Y', strtotime($detail_perizinan->updated_at));
                        $tanggal_masuk = date('j n Y', strtotime($detail_perizinan->tanggal_masuk));
                    @endphp
                    @if ($tanggal_masuk >= $tanggal && $detail_perizinan->waktu_masuk >= $jam)
                        <td>Hadir</td>
                    @else
                        <td>Terlambat</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
