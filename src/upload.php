<?php
require_once __DIR__ . '/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
    $uploader_name = $_POST['uploader_name'] ?? 'Anonymous';
    $message = $_POST['message'] ?? '';
    $file = $_FILES['photo'];

    $target_dir = __DIR__ . "/uploads/";
    
    // Create directory if not exists
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $filename = time() . '_' . basename($file["name"]);
    $target_file = $target_dir . $filename;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            $stmt = $pdo->prepare("INSERT INTO uploads (filename, uploader_name, message) VALUES (?, ?, ?)");
            $stmt->execute([$filename, $uploader_name, $message]);
            header("Location: gallery.php?success=1");
            exit;
        } else {
            $error = "Sorry, there was an error uploading your file.";
        }
    } else {
        $error = "File is not an image.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Memory</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white rounded-xl shadow-xl w-full max-w-lg p-8">
        <h2 class="text-3xl font-serif text-pink-700 text-center mb-6">Add a Memory</h2>
        <?php if(!empty($error)): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form action="upload.php" method="post" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label class="block text-gray-700 mb-2">Photo</label>
                <input type="file" name="photo" required accept="image/*" class="w-full border p-2 rounded w-full border-pink-200 focus:ring-pink-500 focus:border-pink-500">
            </div>
            <div>
                <label class="block text-gray-700 mb-2">Your Name</label>
                <input type="text" name="uploader_name" placeholder="E.g., John & Jane" class="w-full border p-2 rounded focus:ring-pink-500 focus:border-pink-500">
            </div>
            <div>
                <label class="block text-gray-700 mb-2">Message</label>
                <textarea name="message" rows="3" placeholder="Share a beautiful memory..." class="w-full border p-2 rounded focus:ring-pink-500 focus:border-pink-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-pink-600 text-white py-3 rounded-lg font-bold hover:bg-pink-700 transition">Upload to Gallery</button>
            <a href="gallery.php" class="block text-center mt-4 text-pink-600 hover:underline">View Gallery</a>
            <a href="index.php" class="block text-center mt-2 text-gray-500 hover:underline">Back Home</a>
        </form>
    </div>
</body>
</html>