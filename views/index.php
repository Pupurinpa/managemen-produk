<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-brown-800 to-brown-300 text-brown-900">
    <div class="container py-5">
        <h1 class="text-center mb-4 fw-bold">Product List</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="index.php?action=create" class="btn btn-primary">Add New Product</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover shadow rounded bg-white">
                <thead class="bg-brown-600 text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="index.php?action=view&id=<?= $product['id'] ?>" class="btn btn-info btn-sm">View</a>
                                <a href="index.php?action=edit&id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="index.php?action=delete&id=<?= $product['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
