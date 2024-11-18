<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Akun Pengguna Perizinan Mahasantri</title>
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
    <h5 class="text-center mb-4 mt-4 text-primary">Data Account User Perizinan Mahasantri</h5>
    <table border="1" class="slice" align="center" cellpadding="3" cellspacing="0" width="80%">
        <thead>
            <tr class="slice">
                <th class="text-center">No.</th>
                <th class="text-center">Nama Lengkap</th>
                <th class="text-center">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr class="text-center" style="font-size: .9rem;">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
