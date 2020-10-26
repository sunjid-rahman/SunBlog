<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Messaging</title>
    </head>
    <body>
<!--
        Sender: <input type="text" id="senderid"><br/>
        Receiver: <input type="text" id="recid"><br/>
-->
        <div id="msgbox" style="width: 500px; height: 400px; overflow-y: auto;border: 1px solid black;"></div>
        <input type="text" id="content"><input type="button" value="send" onclick="insertdata();">
        <?php 
            $sender_id=$_GET['sender_id'];
            $reciver_id=$_GET['reciver_id'];
        ?>
        <script>
        function drawmsgbox(){
            var req=new XMLHttpRequest();
            
            req.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById("msgbox").innerHTML=this.responseText;
                }
            }
          
            
            req.open("POST","readmsg.php?sender_id=<?php echo $sender_id;?>&&reciver_id=<?php echo $reciver_id;?>");
            req.send();
        }
        drawmsgbox();
        setInterval(drawmsgbox, 30000);
        function insertdata(){
            var content=document.getElementById("content").value;
            var sender_id = "<?php echo $sender_id=$_GET['sender_id'];?>";
            var reciver_id = "<?php echo $reciver_id=$_GET['reciver_id'];?>";
            //var sender=document.getElementById("senderid").value;
//            var recid=document.getElementById("recid").value;
            
            
            var req=new XMLHttpRequest();
            
            req.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    console.log("message sent successfully");
                }
            }
            
            var formdata=new FormData();
            formdata.append("sender",sender_id);
            formdata.append("receiver",reciver_id);
            formdata.append("content",content);
            
            req.open("POST","updatemsg.php");
            req.send(formdata);
        }
        
        </script>
        
        
    </body>
</html>
