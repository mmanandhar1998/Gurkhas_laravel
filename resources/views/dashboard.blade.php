<x-app-layout>
    <!DOCTYPE html>
    <html>
        <head>
        <link rel="stylesheet" href="admin_dashboard/dashboard.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
           
            <div class="dashboard-container">
            <h1 style="text-align:center">Welcome to {{auth()->user()->name}} Dashboard</h1><br>
            <section class="foods" id="foods">
            <form method="post" action="{{url('/insertfood')}}">
                @csrf
                <label for="menuType">Menu Type:</label><br>
                <input type="text" id="menuType" name="menuType" ><br>
                <label for="submenu">Sub Menu Type:</label><br>
                <input type="text" id="submenu" name="submenu" ><br>
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" ><br>
                <label for="price">Price:</label><br>
                <input type="text" id="price" name="price" ><br>
                <label for="desc">Description:</label><br>
                <input type="text" id="desc" name="desc" ><br><br>
                <input type="submit" value="Submit" style="border: 2px solid maroon; padding: 10px;">
            </form> <br><br>
            <div class="container">
            <div class="table-responsive">
            <table id="myTable" style="width:100%" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Menu Type</th>
                            <th>Submenu</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menuitems as $tablemenu)
                            <tr>
                                <td>{{ $tablemenu->id }}</td>
                                <td>{{ $tablemenu->menutype }}</td>
                                <td>{{ $tablemenu->submenu }}</td>
                                <td>{{ $tablemenu->title }}</td>
                                <td>{{ $tablemenu->price }}</td>
                                <td>{{ $tablemenu->description }}</td>
                                <td><a href="{{url('/update',$tablemenu->id)}}" class="btn btn-primary" type="button">Edit</a></td>
                                <td><a href="{{ url('/delete', $tablemenu->id) }}" class="btn btn-danger" type="button">Delete</a></td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
            </div>
            
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

