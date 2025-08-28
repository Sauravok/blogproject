<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f1f5f9; margin:0; padding:0;">

    @auth
        <!-- Header -->
        <div style="display:flex; justify-content:space-between; align-items:center;
                    background:#1d3557; color:white; padding:15px 25px;">
            <h2 style="margin:0;">🎉 Welcome, {{ Auth::user()->name }}</h2>
            
            <form action="/logout" method="post" style="margin:0;">
                @csrf
                <button style="background:#e63946; color:white; border:none; padding:10px 18px;
                               border-radius:8px; cursor:pointer; font-size:14px;">
                    🚪 Logout
                </button>
            </form>
        </div>

        <!-- Action Buttons -->
        <div style="text-align:center; margin:40px 0; display:flex; justify-content:center; gap:20px;">
            <a href="/showposts" 
               style="background:#457b9d; color:white; padding:12px 25px; 
                      border-radius:8px; text-decoration:none; font-size:16px; transition:0.3s;">
               📑 Show Posts
            </a>
            <a href="/createposts" 
               style="background:#2a9d8f; color:white; padding:12px 25px; 
                      border-radius:8px; text-decoration:none; font-size:16px; transition:0.3s;">
               📝 Create Post
            </a>
        </div>

        <!-- Optional Welcome Message -->
        <div style="max-width:600px; margin:auto; background:white; padding:25px; 
                    border-radius:12px; box-shadow:0 6px 15px rgba(0,0,0,0.1); text-align:center;">
            <h3 style="color:#1d3557;">Welcome to your dashboard!</h3>
            <p style="color:#333;">Use the buttons above to manage your posts.</p>
        </div>

    @else
        <!-- Not Authenticated -->
        <div style="max-width:500px; margin:100px auto; text-align:center; background:white; 
                    padding:30px; border-radius:12px; box-shadow:0 6px 15px rgba(0,0,0,0.1);">
            <h2 style="color:#e63946;">⚠️ Please Register First</h2>
            <a href="/register" style="display:inline-block; margin-top:15px; background:#457b9d; 
                                       color:white; padding:10px 20px; border-radius:8px; text-decoration:none;">
                📝 Register
            </a>
        </div>
    @endauth

</body>
</html>
{{-- //sayiushf --}}