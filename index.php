<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travellers Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <img class="img" src="GAT-img1.jpg" alt="GAT-img">
    <div class="content">
        <h1>Global Academy Of Technology</h1>
        <p class="h1"style="text-align:center;"><b>Enter your details in this form and click Submit for ensure that you are willing to join the trip with us!!!</b></p>
        <form action="index2.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" autocomplete="off" required>
            <input type="text" name="email" id="email"placeholder="Enter Your Email Address" autocomplete="off" required>
            <input type="text" name="branch" id="gender" placeholder="Enter Your Branch" autocomplete="off" required>
            <textarea name="dis" id="dis"placeholder="Enter Your Opinion" autocomplete="off"cols="30" rows="10" required></textarea>
            <button class="btn"id="btn"style="display: flex; margin:auto;">Submit</button>
        </form>

    </div>
    <script src="index.js"></script>
   
</body>
</html>