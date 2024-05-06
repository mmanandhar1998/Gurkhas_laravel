<x-app-layout>
    <!DOCTYPE html>
    <html>
        <head>
            <!-- <base href="/public"> sometimes if the css in public is not loading -->
            <base href="/dashboard">
        <link rel="stylesheet" href="admin_dashboard/dashboard.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        </head>
        <body>

            <!-- <ul>
            <li><a class="active" href="/dashboard#foods">Foods</a></li>
            <li><a href="/dashboard#reservations">Reservation</a></li>
            </ul> -->

            <div class="container">
            <h1 style="text-align:center">Welcome to {{auth()->user()->name}} Dashboard</h1><br>
            <section class="foods" id="foods">
            <form method="post" action="{{url('/updatemenu',$menuitems->id)}}">
                @csrf
                <label for="menuType">Menu Type:</label><br>
                <input type="text" id="menuType" name="menuType" value="{{$menuitems->menutype}}"><br>
                <label for="submenu">Sub Menu Type:</label><br>
                <input type="text" id="submenu" name="submenu" value="{{$menuitems->submenu}}"><br>
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value="{{$menuitems->title}}"><br>
                <label for="price">Price:</label><br>
                <input type="text" id="price" name="price" value="{{$menuitems->price}}"><br>
                <label for="desc">Description:</label><br>
                <input type="text" id="desc" name="desc" value="{{$menuitems->description}}"><br><br>
                <input type="submit" value="Submit" style="border: 2px solid maroon; padding: 10px;">
            </form> <br><br>
           
            </section><br><br>

            
            </div>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
            <script>
                let table = new DataTable('#myTable');
            </script>
        </body>
    </html>

</x-app-layout>

