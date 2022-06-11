<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid;
                text-align: center;
            }
            table {
                border-collapse: collapse;
            }
        </style>

    </head>

    <body style="padding: 3rem">
        <h1 style="text-align: center;color: black;">Website  Name</h1>
        <h4> All Users</h4><br />
        <table width="100%"  >
            <thead>
            <tr width="100%" style="background-color:black;color: black; ">
                <th>Sr#.</th>
                <th>Username</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $key=>$show)
                <tr width="100%">
                    <td>{{$key++ }}</td>
                    <td>{{ $show['First_name'] }}</td>
                    <td>{{ $show['Username'] }}</td>
                    <td>{{ $show['Role']}}</td>
                    <td>{{ $show[ 'Email']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
<script>
    // window.print();
    window.print();
    setTimeout(window.close, 3000);
</script>
</html>
