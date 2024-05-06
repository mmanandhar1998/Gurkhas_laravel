<x-app-layout>
    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="admin_dashboard/dashboard.css">
            <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        </head>
        <body>
            <div>
                <h1 style="text-align:center">Welcome {{ auth()->user()->name }} </h1><br>
                <div class="table-container" style="margin: 0 8px;">
                    @if($user_reservation && $user_reservation->count() > 0)
                        <table id="myTable" style="width:100%" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Number of People</th>
                                    <th>Message</th>
                                    <th>Action</th>
                       
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user_reservation as $userreservation)
                                    <tr>
                                        <td>{{ $userreservation->id }}</td>
                                        <td>{{ $userreservation->name }}</td>
                                        <td>{{ $userreservation->email }}</td>
                                        <td>{{ $userreservation->mo_number }}</td>
                                        <td>{{ $userreservation->date }}</td>
                                        <td>{{ $userreservation->time }}</td>
                                        <td>{{ $userreservation->people_no }}</td>
                                        <td>{{ $userreservation->message }}</td>
                                        <td><a href="{{url('/deletereservation',$userreservation->id)}}" class="btn btn-danger" type="button">Delete</a></td>
                                    
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No reservations found.</p>
                    @endif
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable();
                });
            </script>
        </body>
    </html>
</x-app-layout>
