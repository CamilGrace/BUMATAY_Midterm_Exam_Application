<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>Gadgets List</title>
    <style>
        body {
            font-family: 'Pacifico';
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 100%;
            margin: 2px;
        }
        .category {
            background-color: #003333;
            color: white;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 5px;
            margin-top: 10px;
        }
        .category:hover{
            background-color: #008080;
        }
        .table-container{
            display: none;
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow 0px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .header-title {
            font-family: 'Dancing Scipt', cursive;
            font-size: 56px;
            font-weight: bold;
            text-align: center;
        }
        table {
           width: 100%;
           border-collapse: collapse;
           margin-top: 10px;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color:  #12876f;
            color: white;
        }
        .toggle-icon{
            transition: transform 0.3s ease;
        }
        .rotated {
            transform: rotate(180deg);
        }
    </style>
</head>
<body>
<div class="container">
        <h1 class="header-title">Gadget Listings</h1>

        @foreach($categories as $category => $gadgets)
            <div class="category" onclick="toggleCategory(this)">
                <span>{{ $category }}</span>
                <span class="toggle-icon">&#9660;</span>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gadgets as $gadget)
                            <tr>
                                <td>{{ $gadget['name'] }}</td>
                                <td>{{ $gadget['brand'] }}</td>
                                <td>{{ $gadget['price'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

    <script>
        function toggleCategory(element) {
            let tableContainer = element.nextElementSibling;
            let icon = element.querySelector(".toggle-icon");
            
            if (tableContainer.style.display === "block") {
                tableContainer.style.display = "none";
                icon.classList.remove("rotated");
            } else {
                tableContainer.style.display = "block";
                icon.classList.add("rotated");
            }
        }
    </script>
</body>
</html>