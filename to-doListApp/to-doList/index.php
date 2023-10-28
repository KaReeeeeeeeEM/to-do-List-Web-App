<?php 
    include_once "connection.php";

    $query = "SELECT * FROM todolist";
    $result = mysqli_query($con, $query);

?>
<?php  

if(isset($_GET['new'])){
   echo '
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Success message</title>
   </head>
   
           <style>
                  body{
                   background-color: rgba(0,0,0,0.5);
                   font-family: Arial, Helvetica, sans-serif;
                  } 
   
                  .success-message{
                       position: absolute;
                       border-radius:20px;
                       max-width: 600px;
                       width:500px;
                       margin:0 34%;
                       top: 0;
                       background-color: #fff;
                  }
   
                  .success-message h1{
                   text-align: center;
                   margin-bottom: 12px;
                   color:rgba(218, 204, 7, 0.692);
                  }
   
                  .success-content p{
                   text-align: center;
                   margin:4px 10px; 
                  }
   
                  .success-button button{
                   margin:3px 43%;
                   padding:5px 22px;
                   border: none;
                   border-radius: 10px;
                   background-color: rgba(218, 204, 7, 0.692);
                   color: #fff;
                   margin-bottom:12px;
                   cursor:pointer;
                   transition: .4s ease-in-out;
                  }
   
                  .success-button button:hover{
                   background-color: #333;
   
                  }

                  
                  @media (max-width:576px){
                  
                   .success-message{
                       width:300px;
                       margin:0 9%;
                   }

                   .success-message h1{
                       font-size:12px;
                   }
                   
                   .success-message p{
                       font-size:8px;
                   }

                   .success-button button{
                       font-size:8px;
                      }


               }
           </style>
   <body>
       <div class="success-message" id="success">
               <div class="success-heading">
                   <h1>SUCCESS</h1>
               </div> 
   
               <div class="success-content">
                   <p>'.$_GET['new'].'</p>
               </div>
   
               <div class="success-button">
                   <button onclick="disappear()">Ok</button>
               </div>
       </div>
   
       <script>
           var cont = document.getElementById("success");
   
           function disappear(){
               cont.style = "top:-200px;";
               window.location.href = "index.php";
           }
           
       </script>
   </body>
   </html>
   ';
}


?>
<?php  

if(isset($_GET['update'])){
   echo '
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Success message</title>
   </head>
   
           <style>
                  body{
                   background-color: rgba(0,0,0,0.5);
                   font-family: Arial, Helvetica, sans-serif;
                  } 
   
                  .success-message{
                       position: absolute;
                       border-radius:20px;
                       max-width: 600px;
                       width:500px;
                       margin:0 34%;
                       top: 0;
                       background-color: #fff;
                  }
   
                  .success-message h1{
                   text-align: center;
                   margin-bottom: 12px;
                   color:rgba(218, 204, 7, 0.692);
                  }
   
                  .success-content p{
                   text-align: center;
                   margin:4px 10px; 
                  }
   
                  .success-button button{
                   margin:3px 43%;
                   padding:5px 22px;
                   border: none;
                   border-radius: 10px;
                   background-color: rgba(218, 204, 7, 0.692);
                   color: #fff;
                   margin-bottom:12px;
                   cursor:pointer;
                   transition: .4s ease-in-out;
                  }
   
                  .success-button button:hover{
                   background-color: #333;
   
                  }

                  
                  @media (max-width:576px){
                  
                   .success-message{
                       width:300px;
                       margin:0 9%;
                   }

                   .success-message h1{
                       font-size:12px;
                   }
                   
                   .success-message p{
                       font-size:8px;
                   }

                   .success-button button{
                       font-size:8px;
                      }


               }
           </style>
   <body>
       <div class="success-message" id="success">
               <div class="success-heading">
                   <h1>SUCCESS</h1>
               </div> 
   
               <div class="success-content">
                   <p>'.$_GET['update'].'</p>
               </div>
   
               <div class="success-button">
                   <button onclick="disappear()">Ok</button>
               </div>
       </div>
   
       <script>
           var cont = document.getElementById("success");
   
           function disappear(){
               cont.style = "top:-200px;";
               const date = new Date();
               const currentTime = date.getHours() + "hrs " + date.getMinutes() + "mins " + date.getSeconds() + "s ";
               window.location.href = `index.php?time=${currentTime}`;
           }
           
       </script>
   </body>
   </html>
   ';
}


?>
<?php  

if(isset($_GET['info'])){
   echo '
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Success message</title>
   </head>
   
           <style>
                  body{
                   background-color: rgba(0,0,0,0.5);
                   font-family: Arial, Helvetica, sans-serif;
                  } 
   
                  .success-message{
                       position: absolute;
                       border-radius:20px;
                       max-width: 600px;
                       width:500px;
                       margin:0 34%;
                       top: 0;
                       background-color: #fff;
                  }
   
                  .success-message h1{
                   text-align: center;
                   margin-bottom: 12px;
                   color:rgba(218, 204, 7, 0.692);
                  }
   
                  .success-content p{
                   text-align: center;
                   margin:4px 10px; 
                  }
   
                  .success-button button{
                   margin:3px 43%;
                   padding:5px 22px;
                   border: none;
                   border-radius: 10px;
                   background-color: rgba(218, 204, 7, 0.692);
                   color: #fff;
                   margin-bottom:12px;
                   cursor:pointer;
                   transition: .4s ease-in-out;
                  }
   
                  .success-button button:hover{
                   background-color: #333;
   
                  }

                  
                  @media (max-width:576px){
                  
                   .success-message{
                       width:300px;
                       margin:0 9%;
                   }

                   .success-message h1{
                       font-size:12px;
                   }
                   
                   .success-message p{
                       font-size:8px;
                   }

                   .success-button button{
                       font-size:8px;
                      }


               }
           </style>
   <body>
       <div class="success-message" id="success">
               <div class="success-heading">
                   <h1>INFO</h1>
               </div> 
   
               <div class="success-content">
                   <p>'.$_GET['info'].'</p>
               </div>
   
               <div class="success-button">
                   <button onclick="disappear()">Ok</button>
               </div>
       </div>
   
       <script>
           var cont = document.getElementById("success");
   
           function disappear(){
               cont.style = "top:-200px;";
               window.location.href = `index.php`;
           }
           
       </script>
   </body>
   </html>
   ';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List It</title>
</head>
<style>
    *{
        margin:0;
        top:0;
        font-family: cursive;
    }
    body{
        background-color: rgba(226, 230, 4, 0.171);
    }

    .nav{
        display:flex;
        justify-contents: space-between;
        align-items: center;
        padding: 5px 10px;
        background: rgb(226, 230, 4);
        box-shadow: 1px 2px 4px #aaa;
        height: 60px;
    }

    .nav .logo h1{
        color: #333;
        font-weight: 900;
        font-size:2rem;
    }

    .nav .info{
        width: 88%;
    }

    .nav .info img{
        margin: 2rem 1rem;
        float: right;
        height:25px;
        width: 25px;
    }

    .nav .info a{
        text-decoration: none;
        float: right;
        color: #333;
        margin: 2rem auto;
        font-size: 18px;
    }

    .floating-action-bar{
        width:4.5%;
        position: fixed;
        top: 80%;
        right: 2rem;
        padding: 5px;
    }

    .floating-action-bar img{
        height: 4rem;
        width: 4rem;
        background: rgb(226, 230, 4);
        border-radius: 50%;
    }

    .lists{
        margin-top: 5%;
    }

    .lists h2{
        margin-left: 12px;
        margin-bottom:20px;
        color:#333;
    }

    /* for the note body */
    a.note-body{
            text-decoration: none;
            color: #333;
        }

        .note{
            background-color: rgb(226, 230, 4);
            max-width: 96%;
            overflow: hidden;
            height: auto;
            margin: 2px auto 5px;
            padding:6px 20px;
            font-family:cursive;
            color:#333;
            border-left: 10px solid #333;
            border-bottom:1px solid #aaa;
            border-top:1px solid #aaa;
            border-right:1px solid #aaa;
            border-radius: 10px;
            text-overflow: ellipsis; 
        }

        .note:hover{
            box-shadow:1px 2px 3px #ccc;
        }

        .note .head{
            font-weight:900;
            margin-bottom: 12px;
        }

        .note .content{
            text-overflow: ellipsis;
            height: 50px;
            max-width: 95%;
            width:95%;
        }

        .note img{
            float:right;
            margin-top: -60px;
        }

        span{
            font-size: 18px;
            font-style: italic;
        }
</style>
<body>
    <div class="nav">
        <div class="logo">
            <h1>List It!</h1>
        </div>
        <div class="info">
            <img src="../assets/icons/user.png" alt="info">
            <a href="index.php?info=This is a to-do list app where you can create, view, edit and delete your notes">Info</a>
        </div>
    </div>
    <div class="floating-action-bar">
        <a href="add-note.php">
            <img src="../assets/icons/add-large.png" alt="add"> 
        </a>
    </div>

    <!-- for the lists -->
    <div class="lists">
        <div class="heading">
            <h2>Recently Added <span> <?php if(isset($_GET['time'])) echo "( Last updated:".$_GET['time'].")"; ?></span></h2>
        </div>
        <div class="my-list">
            <?php 
                if(mysqli_num_rows($result) > 0){
                    while($data = mysqli_fetch_array($result)){
                        echo '
                        <a href="display.php?id='.$data['id'].'" class="note-body">
                            <div class="note">
                                <div class="head">
                                    <h2>'; ?><?php echo $data['heading']; ?> <?php echo '</h2>
                                </div>
                                <div class="content">
                                    <p>'; ?><?php echo $data['content']; ?><?php echo '</p>
                                </div>
                                <a href="delete.php?id='.$data['id'].'"><img src="../assets/icons/delete-small.png" alt="delete"></a>
                            </div>
                        </a>
                        ';
                    }
                } else {
                    echo " ";
                }
            ?>
        </div>
    </div>
</body>
</html>