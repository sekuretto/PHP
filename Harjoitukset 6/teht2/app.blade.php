<!DOCTYPE html>
<html>
    <head>
        <title>Customers</title>
    </head>
    <style>
        .search, .container {
            text-align: center;
        }
        table, th, td {
            border: 1px solid #dddddd;
            border-collapse: collapse;
            width: 30%;
            text-align: left;
            margin: auto;
            border-spacing: 5px;
            padding: 1px;
        }
        th {
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
      </style>
    <body>
        <div class="search">
            @section('search')
            <p><a href="/customers">List customers</a> <a href="customers/create">Create</a></p>

            <form>
                <label for="customersearch">Search customers:</label>
                <input type="search" id="customersearch" name="search">
            </form>
            <hr>
            @show
        </div>

        <div class="container">
            @yield('customers')
        </div>
    </body>
</html>