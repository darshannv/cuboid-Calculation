<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Cuboid</title>
</head>

<body>

    <div class="container">
        <h1 align="center">Cubiod Surface Area and Volume</h1>



        @if($errors->count())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $message)
                <li> {{ $message }} </li>
                @endforeach
            </ul>
        </div>
    </div>



    @endif

    <div class="px-8 py-2">
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </div>
    <h4>Enter the Values to find Volume and Surface Area</h4>
    <div class="mt-4">
        <form action="" method="post">

            @csrf

            <div class="form-group row">
                <label for="Cuboid_name" class="col-sm-2 col-form-label">Cuboid Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="cuboid_name" placeholder="Shape Name"
                        pattern="[a-zA-Z0-9\s]+">
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-2">
                    <div class="col">
                        <input type="number" step="any" class="form-control" name="length" placeholder="Length">
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <div class="col">
                        <input type="number" step="any" class="form-control" name="breadth" placeholder="Breadth">
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <div class="col">
                        <input type="number" step="any" class="form-control" name="height" placeholder="Height">
                    </div>
                </div>



            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    </div>

    <div class="container">
        <div class="mt-4">
            @if($values->count())
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-blue-100">
                        <th class="px-4 py-2">
                            <div class="flex item-center">Cuboid Name</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex item-center">Length</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex item-center">Breadth</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex item-center">Height</div< /th>
                        <th class="px-4 py-2">
                            <div class="flex item-center">Volume</div< /th>
                        <th class="px-4 py-2">
                            <div class="flex item-center">Surface Area</div< /th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($values as $value)
                    <tr class="bg-green-100">
                        <td class="border px-4 py-2">{{ $value->cuboid_name }}</td>
                        <td class="border px-4 py-2">{{ $value->length }}</td>
                        <td class="border px-4 py-2">{{ $value->breadth }}</td>
                        <td class="border px-4 py-2">{{ $value->height }}</td>
                        <td class="border px-4 py-2">{{ $value->volume }}</td>
                        <td class="border px-4 py-2">{{ $value->surface_area }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

</html>