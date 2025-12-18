<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/ORGANIC-1.0.0/public/login-register.css">
</head>
<body>

<div class="auth-card">
    <h2>Register</h2>

    <form method="POST" action="loginn.php">
     

        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>

        <div class="mb-3">
            <input type="text" name="surname" class="form-control" placeholder="Surname" required>
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

        <button type="submit" class="btn btn-success btn-auth">Register</button>
    </form>

    <div class="auth-link">
        <small>Already have an account? <a href="{{ route('login') }}">Login</a></small>
    </div>
</div>

</body>
</html>
