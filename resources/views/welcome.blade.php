<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5">
        <h1>Todo List</h1>
        @foreach ($listItems as $listItem)
        <ul>
            <!-- @if (!$listItem->is_complete) -->
            <li class="d-inline me-4">{{$listItem->name}}</li>
            <form method="post" action="{{ route('markComplete', $listItem->id) }}" class="mb-3 d-inline" accept-charset="UTF-8">
                {{csrf_field()}}
                <button type="submit" class="btn btn-outline-secondary rounded-pill">Done</button>
            </form>

            <!-- @endif -->
        </ul>
        @endforeach

        <form method="post" action="{{ route('saveItem') }}" class="mb-3" accept-charset="UTF-8">
            {{csrf_field()}}
            <label for="listItem" class="form-label">New List Item</label>
            <input type="text" class="form-control" id="listItem" name="listItem" placeholder="Type a new list Item">
            <button type="submit" class="btn btn-outline-dark mt-3 px-4 rounded-pill">Save</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/my_script.js') }}"></script>
</body>

</html>