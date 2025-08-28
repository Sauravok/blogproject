<div style="max-width:600px; margin:30px auto; background:#ffffff; padding:25px; 
            border-radius:12px; box-shadow:0 6px 15px rgba(0,0,0,0.1); font-family:Arial, sans-serif;">

    <h2 style="text-align:center; color:#1d3557; margin-bottom:20px;">📝 Create a New Post</h2>

    <form action="/showposts" method="post" style="display:flex; flex-direction:column; gap:15px;">
        @csrf

        <!-- Title -->
        <input type="text" name="title" placeholder="Enter Title"
               style="padding:12px; border:1px solid #ccc; border-radius:8px; 
                      font-size:16px; outline:none; transition:0.3s;">
        
        <!-- Body -->
        <textarea name="body" rows="6" placeholder="Write your post..."
                  style="padding:12px; border:1px solid #ccc; border-radius:8px; 
                         font-size:16px; resize:vertical; outline:none; transition:0.3s;"></textarea>

        <!-- Button -->
        <button type="submit" 
                style="background:#2a9d8f; color:white; padding:12px; border:none; 
                       border-radius:8px; font-size:16px; cursor:pointer; transition:0.3s;">
            ✅ Upload Post
        </button>
    </form>
</div>
