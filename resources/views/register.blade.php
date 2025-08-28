<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background: #f4f6f9;">
    <div style="background: #fff; padding: 30px 40px; border-radius: 12px; box-shadow: 0 6px 15px rgba(0,0,0,0.1); width: 380px; text-align: center; border: 2px solid #ddd;">
        
        <h2 style="margin-bottom: 20px; font-family: Arial, sans-serif; color: #333;">Register</h2>
        
        <form action="/register" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf
            <input name="name" type="text" placeholder="Full Name" 
                   style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; outline: none; font-size: 14px;">
            
            <input type="email" name="email" placeholder="Email Address" 
                   style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; outline: none; font-size: 14px;">
            
            <input name="password" type="password" placeholder="Create Password" 
                   style="padding: 12px; border: 1px solid #ccc; border-radius: 8px; outline: none; font-size: 14px;">
            
            <button type="submit" 
                    style="padding: 12px; background: #2196F3; color: white; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; transition: 0.3s;">
                Register
            </button>
        </form>
        
        <p style="margin-top: 15px; font-size: 14px; color: #666;">
            Already have an account? <a href="/form" style="color: #2196F3; text-decoration: none;">Login</a>
        </p>
    </div>
</div>
