<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f1f5f9; margin:0; padding:0;">

    <div style="max-width: 600px; margin: 50px auto; background:#ffffff; padding: 30px; 
                border-radius: 12px; box-shadow: 0 6px 15px rgba(0,0,0,0.1);">

        <h1 style="text-align:center; color:#1d3557; margin-bottom: 20px;">✏️ Edit Post</h1>

        <form action="/edit-post/{{ $post->id }}" method="post" style="display:flex; flex-direction:column; gap:15px;">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <label style="font-weight:bold; color:#333;">Title</label>
            <input type="text" name="title" value="{{ $post->title }}" 
                   style="padding:10px; border:1px solid #ccc; border-radius:8px; font-size:16px;">

            <!-- Body Textarea -->
            <label style="font-weight:bold; color:#333;">Content</label>
            <textarea name="body" cols="30" rows="8" 
                      style="padding:10px; border:1px solid #ccc; border-radius:8px; font-size:16px; resize:vertical;">{{ $post->body }}</textarea>

            <!-- Submit Button -->
            <button type="submit" 
                    style="background:#457b9d; color:white; padding:12px; border:none; 
                           border-radius:8px; font-size:16px; cursor:pointer; transition:0.3s;">
                ✅ Update Post
            </button>
        </form>
    </div>

</body>
</html>
