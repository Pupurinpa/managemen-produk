<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-brown-800 to-brown-300 text-brown-900">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white shadow rounded p-4">
                    <h1 class="text-center text-2xl font-bold mb-4">View Product</h1>
                    <div class="space-y-3">
                        <p class="mb-2"><strong>ID:</strong> <?= $product['id'] ?></p>
                        <p class="mb-2"><strong>Name:</strong> <?= $product['name'] ?></p>
                        <p class="mb-2"><strong>Price:</strong> <?= $product['price'] ?></p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="index.php" class="btn btn-primary w-100">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
