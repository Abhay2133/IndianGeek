<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  
  
        <div class="main-heading">
            Abhay
        </div>
        
        <nav>
            <div id="menu-button">
                <hr>
                <hr>
                <hr>
            </div>          
            <ul id="menu-list">
                <li> Home </li>
                <li> Profile </li>
                <li> Services </li>
                <li> Features </li>
                <li> About </li>
                <li> Contant us </li>
            </ul>
            
        </nav>
        
        <div id="content">
            <div id="left">
                <div class="heading">
                    More Links
                </div>
            </div>
   
   <!-- Middle Start.     -->         
            
<div id="middle">
               
    <div class="card">
        <div class="card-heading"> Weather API </div>
        <div class="card-text">  I created an Weather app with simple Fetch metgod and accuweather api...  
        </div>
    </div>
    
    <div class="card">
        <div class="card-heading"> Calculator </div>
        <div class="card-text">  A simple calculator in a webpage, created using simole vanella Javascript... 
        </div>
    </div>
                   
</div>
            
    <!--         MIDDLE EMD.     -->
            <div id="right">
                <div id="about-heading">
                    About Me
                </div>
                <div id="about">
                    Hi, my name is Abhay and I am the owner of this website and feel free to comment and share my stuffs...
                </div>
            </div>
        </div>
  
  <div id="user-comment">
  
  <div class="heading">
      Comments
  </div>
  
    <div class="uc">
       <div class="dp"></div>
       <div class="user-name">Abhay</div>
       <div class="user-comment">
           This is Awesome....
       </div>
    </div>
    
    <div class="uc">
       <div class="dp"></div>
       <div class="user-name">Abhay</div>
       <div class="user-comment">
           This is Awesome....
       </div>
    </div>
    
    
        
       
   </div>
  
  <div id="comment">
  <center>
      <div id="comment-heading">
          Enter Your Comment
      </div>
      
      <form id="feedback" method="post" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <table>
      <tr>
  <td>  Email :  </td>
  <td>
  <input type="email" name="email" id="email" placeholder = "Email" required>
    </td>
      </tr>
     <tr>     
     <td>Comment : </td>
     <td>
     <textarea name="text" id="comment-text" placeholder="Enter ur comment Here..."  required></textarea>
     </td>
     </tr>
     </table>
   <!--  <button class="hidden" id="form-submit">Submit</button>
     </form> -->
      
      <button id="submit" onclick="submit()"> Submit </button>
      </form>
  </center>
      
  </div>
  
  
  <footer>
      @Copyright. All Rights are Reserved
      <div>2018 - 2020</div>
  </footer>
  
  <!-- Project -->
  <script src="main.js"></script>
</body>
</html>