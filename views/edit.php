<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-brown-800 to-brown-300 text-brown-900">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white shadow rounded p-4">
                    <h1 class="text-center text-2xl font-bold mb-4">Edit Product</h1>
                    <form method="post" action="index.php?action=edit&id=<?= $product['id'] ?>" class="space-y-4">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name:</label>
                            <input type="text" id="name" name="name" value="<?= $product['name'] ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label fw-bold">Price:</label>
                            <input type="text" id="price" name="price" value="<?= $product['price'] ?>" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success w-100">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
