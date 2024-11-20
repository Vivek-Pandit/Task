<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
</head>
<body>
    <h1>Items</h1>
    <ul id="items-list"></ul>

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
