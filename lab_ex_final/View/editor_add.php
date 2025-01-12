<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Editor</title>
    <link rel="stylesheet" href="../Style/styles.css">
</head>
<body>
    <div class="container">
        <h1>Add Editor</h1>
        <form method="post" action="../Controller/editor_add_check.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />

            <input type="submit" value="Add Editor" />
            <div class="back-btn">
                <a href="../View/editorlist.php">Back</a>
            </div>
            
        </form>
        
        
    </div>
    
</body>
</html>
