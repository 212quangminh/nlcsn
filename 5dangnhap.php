<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Đăng nhập idol3</title>
        <link rel="stylesheet" href="maybay5.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>   
            
        </style>
    </head>
    <body>
           <div class="login-box">
            <h2 class="p1">login</h2>
            <form action="xulydn.php?do=login" method="POST">
                    <div class="user-box">
                        <label class="la" for="">
                            <h3 class="p2">Username</h3>
                        </label>
                        <input class="in"  type="text" name="user"  placeholder="nhập tài khoản" required>
                        
                    </div>
                    
                    <div class="user-box">
                        <label class="la" for="">
                            <h3 class="p2">password</h3>
                        </label>
                        <input class="in" type="password" name="password"  placeholder="nhập mật khẩu" required>
                        
                    </div>
                   <div class="box2"> 
                    <input class="box1" type="submit" name="dangnhap" value="đăng nhập"></input>
                   </div> 
                   
            </form>
           </div>
        
    </body>
</html>