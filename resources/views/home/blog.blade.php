<!-- Logout and Create Post Buttons -->
<div style="display:flex; justify-content: space-between; max-width: 800px; margin: 15px auto;">

    <!-- Logout -->
    <form action="/logout" method="post">
        @csrf
        <button 
            style="background: #e63946; 
                   color: white; 
                   border: none; 
                   padding: 10px 20px; 
                   border-radius: 8px; 
                   cursor: pointer; 
                   font-size: 16px;">
            Logout
        </button>
    </form>

    <!-- Create Post -->
    <a href="/createposts" 
       style="background:#2a9d8f; 
              color:white; 
              padding:10px 20px; 
              border-radius:8px; 
              text-decoration:none; 
              font-size:16px; 
              display:flex; 
              align-items:center; 
              justify-content:center;">
       📝 Create Post
    </a>

</div>

<!-- Blog Section -->
<div style="max-width: 800px; margin: auto; padding: 20px; font-family: Arial, sans-serif;">

    <h2 style="text-align: center; font-size: 28px; margin-bottom: 20px; color:#1d3557;">
        📖 All Posts
    </h2>

    @foreach ($posts as $post)
        <div style="
            background: #f1faee; 
            margin: 20px 0; 
            padding: 20px; 
            border-radius: 12px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        ">

            <h3 style="margin: 0; color:#1d3557;">
                {{ $post['title'] }}
            </h3>
            <small style="color:#6c757d;">✍️ by {{ $post->user->name }}</small>

            <p style="margin: 15px 0; line-height: 1.6; color:#333;">
                {{ $post['body'] }}
            </p>

            <div style="display: flex; gap: 10px; margin-top: 10px;">
                <a href="/edit-post/{{ $post->id }}" 
                   style="background:#457b9d; 
                          color:white; 
                          padding:8px 15px; 
                          border-radius:8px; 
                          text-decoration:none; 
                          display:inline-block; 
                          text-align:center; 
                          font-size:14px;">
                   ✏️ Edit
                </a>

                <form action="/delete-post/{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button 
                        style="background:#e63946; 
                               color:white; 
                               padding:8px 15px; 
                               border:none; 
                               border-radius:8px; 
                               cursor:pointer; 
                               font-size:14px;">
                        🗑 Delete
                    </button>
                </form>
            </div>

        </div>
    @endforeach
</div>
