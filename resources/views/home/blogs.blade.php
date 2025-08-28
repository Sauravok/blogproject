<!-- Logout and Create Post Buttons -->
<div style="display:flex; justify-content: space-between; max-width: 800px; margin: 15px auto;">

   
   

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
                {{ $post->title }}
            </h3>
            <small style="color:#6c757d;">✍️ by {{ $post->user->name }}</small>

            <p style="margin: 15px 0; line-height: 1.6; color:#333;">
                {{ $post->body }}
            </p>

        </div>
    @endforeach

</div>
