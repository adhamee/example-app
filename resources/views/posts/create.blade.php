
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/posts">Posts</a></li>
            <li><a href="/posts/create">Create Post</a></li>
        </ul>
    </nav>

    <h1>Create Post</h1>

    <form action="/posts" method="POST">
        @csrf

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>


        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <button type="submit">Create</button>
    <h2>Who is creating the post?</h2>
    <input type="text" id="author" name="author" required>
    <h3>Time of Create:</h3>
    <p><?php echo date('Y-m-d H:i:s'); ?></p>
        
    </form>
</body>
</html>
