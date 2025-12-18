<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/ORGANIC-1.0.0/public/login-register.css">
    
</head>
<body>

<div class="auth-card">
    <h2>Login</h2>

    <form method="POST" action="loginn.php">
        
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>

        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email address" required>
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="mb-3">
            <select name="role" class="form-control" required>
                <option value="">Select role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-auth">Login</button>
    </form>

    <div class="auth-link">
        <small>Don’t have an account? <a href="/ORGANIC-1.0.0/app/View/login/register-form.php">Register</a></small>
    </div>
</div>

</body>
</html>
