<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
</head>
<body>
    <h1>Items</h1>
    <ul id="items-list"></ul>
    <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


    <script>
        fetch('/api/items')
            .then(response => response.json())
            .then(data => {
                const list = document.getElementById('items-list');
                data.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item.name;
                    list.appendChild(li);
                });
            });
    </script>
</body>
</html>
