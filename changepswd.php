echo"<form method='POST' action='' name='update-psd'>
                NAME: <input type='text' 
                    value='$lv'
                disabled/>
                old pasword: <input type='text' name='oldPsd' required/>
                New Pasword: <input type ='text' name='NewPsd'required/>
                <button type ='submit' value='change'>
                change </button>
                <div id='error'></div
                </form>";
                echo var_dump($lv.'<br>');
                $realpsd=mysqli_query($conn,'SELECT Password FROM users 
                WHERE UserName="' .$lv. '"');
                
                foreach($realpsd as $k=>$psd){
                    foreach($psd as $y=>$ps){
                        $psd=$ps;
                        echo $psd;
                        if($_SERVER['REQUEST_METHOD']=='POST'){
                            $OldPsd = $_POST['oldPsd'];
                            $NewPsd =$_POST['NewPsd'];
                            $Newpsd= md5($NewPsd);
                            $OldPsd=md5($OldPsd);
        
                            //validate if old psd == $psd(from dbase)
                            if($OldPsd != $psd){
                                echo"<script scr='jquery.js'>
                                    $(document).ready(function(){
                                        $('#error').append('wrong old pasword');
                                    })
                                </script>";
                            }
                            else{
                                mysqli_query($conn,'UPDATE users SET Password="$NewPsd" WHERE UserName="'.$lv.'"');
                                echo "$(document).ready(function(){
                                    
                                })";