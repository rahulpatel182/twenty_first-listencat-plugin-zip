


          <?php
          if( isset($_POST['submit']) ) { 
          $token  = $_POST['token_number'];
          update_option('token_number',$token);
          };

          // $update_checkbox =  get_option('checkbox');
          // print_r($update_checkbox);

          // $data = if(!empty($update_checkbox)){ echo($update_checkbox =='on')?'checked':'';}
          $update_checkbox1 =  get_option('checkbox1');
          if(!empty($update_checkbox1)){ ($update_checkbox1 =='on')? $checked1 ="checked":$checked1 ='';}

          // $update_checkbox2 =  get_option('checkbox2');
          // if(!empty($update_checkbox2)){ ($update_checkbox2 =='on')? $checked2 ="checked":$checked2 ='';}

          // $update_checkbox3 =  get_option('checkbox3');
          // if(!empty($update_checkbox3)){ ($update_checkbox3 =='on')? $checked3 ="checked":$checked3 ='';}


          $form = "<form method='post' action=''> 

          <div class='condition_section'>
          <h3> Other plugin settings </h3>
          <input type='checkbox' name='column'  ".$checked1.">add audio to new artical automatically<br>statistics to display in Pages list view:<br><br>   
         
          <input type='submit' value='Save settings' name='save_settings' class='save_settings'>"

         .submit_button('Save settings').

          "</div></form>";
           
          
          $token  = $_POST['token_number'];
          // print_r($token);
          $checking =  get_option('token_number');

          $api_key  = "jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg";
          // print_r($checking);         
          if(!empty($checking)){ echo($checking == $api_key) ? $form
          :"";}


          if( isset($_POST['save_settings']) ) { 
     
          $checkbox1 = implode('', $_POST['column']);
          // $checkbox2 = implode('', $_POST['column']);
          // $checkbox3 = implode('', $_POST['column']);

          // print_r( $checkBox);
          update_option('checkbox1',$checkbox1);
          // update_option('checkbox2',$checkbox2);
          // update_option('checkbox3',$checkbox3);

          }


           <?php if(empty(['website_name'])){
           echo "";
        }
        elseif (isset($_POST['website_name'])) {
        // echo $_POST['website_name'];
        echo "value='".$_POST['website_name']."'";  
        // echo get_option('website_name');           
        }
        else
        {
          echo "value='".get_option('website_name')."'";
         // echo get_option('website_name');
        }
        ?>


          .submit_button('Save settings').


              if(empty(['column'])){
           echo "";
          }
          elseif (isset($_POST['column'])) {
     
          echo "'".$_POST['column']."'";
          }else  
       
        {
          echo "'". $checked1."'";
         // echo get_option('website_name');
        }




          $form .= "<form method='post' action=''> 
  
          <input type='checkbox' name='column[]'";

      

        $form .= "> add audio to new artical automatically<br>statistics to display in Pages list view:<br><br>
         <input type='submit' value='Save settings' name='save_settings' class='save_settings'>

       </form>"; ?>

       









        </div>

          <?php
          if( isset($_POST['submit']) ) { 
          $token  = $_POST['token_number'];
          update_option('token_number',$token);
          };

          // $update_checkbox =  get_option('checkbox');
          // print_r($update_checkbox);

          // $data = if(!empty($update_checkbox)){ echo($update_checkbox =='on')?'checked':'';}
          $update_checkbox1 =  get_option('checkbox1');
          // if(!empty($update_checkbox1)){ ($update_checkbox1 =='on')? $checked1 ="checked":$checked1 ='';}



          if(!empty(['$update_checkbox1'])){

          $checked1 ="checked";
          
          }
         else  
       
        {
          $khali = "khali";
         
        }







          // $update_checkbox2 =  get_option('checkbox2');
        if(!empty($update_checkbox2)){ ($update_checkbox2 =='on')? $checked2 ="checked":$checked2 ='';}

          // $update_checkbox3 =  get_option('checkbox3');
          // if(!empty($update_checkbox3)){ ($update_checkbox3 =='on')? $checked3 ="checked":$checked3 ='';}




         $form = "<form method='post' action=''> 

          <div class='condition_section'>
          <h3> Other plugin settings </h3>
          <input type='checkbox' name='column[]'  ".$update_checkbox1." ".$lang." ".$khali." >add audio to new artical automatically<br>statistics to display in Pages list view:<br><br>   
         
          <input type='submit' value='Save settings' name='save_settings' class='save_settings'>

          </div></form>";
           
          
          $token  = $_POST['token_number'];
          // print_r($token);
          $checking =  get_option('token_number');
          // print_r($checking);         
          if(!empty($checking)){ echo($checking ==  1234567890) ? $form
          :"";}


          if( isset($_POST['save_settings']) ) { 
     
          // $checkbox1 = implode(',', $_POST['column']);
            $lang = implode($_POST['column']);

          print_r($lang);
          // $checkbox2 = implode('', $_POST['column']);
          // $checkbox3 = implode('', $_POST['column']);

          // print_r( $checkBox);
          update_option('checkbox1',$lang);
          // update_option('checkbox2',$checkbox2);
          // update_option('checkbox3',$checkbox3);

          }



          /////////////////////////////////////////////////////////////////////////////////////


           if(!empty(['$update_checkbox1']) && ($update_checkbox1 =='on')){

          $checked1 ="checked";
          
          }
          elseif (isset($_POST['column'])) {

            $lang = implode(",",$_POST['column']);
       
          }else  
       
        {
          $khali = "";
         
        }

        ////////////////////////////////////////////////////////////////////////////////////////


        // 20-03-2020 friday   correct code

         if( isset($_POST['save'])) {

           $check1 =$_POST['column1'];
           $check2 = $_POST['column2'];
           $check3= $_POST['column3'];
   
           update_option('checkbox1',$check1);
           update_option('checkbox2',$check2);
           update_option('checkbox3',$check3);

           }

    
          $update_checkbox1 =  get_option('checkbox1');
          if(!empty($update_checkbox1)){ ($update_checkbox1 =='on')? $checked1 ="checked":$checked1 ='';}

          $update_checkbox2 =  get_option('checkbox2');
          if(!empty($update_checkbox2)){ ($update_checkbox2 =='on')? $checked2 ="checked":$checked2 ='';}

          $update_checkbox3 =  get_option('checkbox3');
          if(!empty($update_checkbox3)){ ($update_checkbox3 =='on')? $checked3 ="checked":$checked3 ='';}

           $form = "<form method='POST' action=''>
           <div class='condition_section'>
           <input type='checkbox' name='column1'  ".$checked1.">add audio to new artical automatically<br>statistics to display in Pages list view:<br><br> 
           <input type='checkbox' name='column2'".$checked2." >Play time column <br><br>
           <input type='checkbox' name='column3'".$checked3." >Play count column<br><br>
           <span>You can view live statistics and adjust other settings in your Listencat.com account<br>Need help?Click<a href='#'>here</a> for support</span><br><br>
       
        <input type='submit' value='Save settings' name='save'></form>";


        ////\


///   21-03-2020  saturday


          <?php if($checking == "jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg" ){ ?>

           <h3>Enable the plugin - Enabled</h3>

         <?php }else{ ?>
           <h3>Enable the plugin - </h3>

         <?php }  ?>

 
        $checking =  get_option('token_number');

         if(!empty($checking)){ echo ($checking =='jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg')? '<h3>Enable the plugin - Enabled</h3>':'<h3>Enable the plugin - </h3>';} ?>




          if(!empty($checking)){               
        $curl = curl_init();

        $url  = curl_setopt($curl, CURLOPT_URL,'https://listencat.com/api/v1/post?id=1');
        curl_setopt($curl, CURLOPT_HEADER, TRUE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['content-type: application/json']);

        $headers = array(
                    'Authorization: Bearer '.$checking,
                  
                );
                 curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

                 print_r($headers);die();

         // curl_setopt($curl, CURLOPT_HTTPHEADER, $checking);        
       
          $response = curl_exec($curl); 

         $error = curl_error($curl);

           if ($error) {
            echo "curl error" .$error;
           }else{

              echo $response;
           }


        curl_close($curl); 

   }




    if(!empty($checking)){ echo ($checking == $authorization_token)? get_option('<h3>Enable the plugin - Enabled</h3>'):get_option( '<h3>Enable the plugin -</h3>');}} ?>


              // $authorization_token = 'jwI74CeYhJsDUrgP8VJ8L9njhtxVDQfhS8twIo78MCnGLFMhrqy5LA0IxzFg';


              
          // echo $Enabled;
          // print_r($Authorization_token);die();

          // if(!empty($checking)){ echo ($checking == $authorization_token)? '<h3>Enable the plugin - Enabled</h3>':'<h3>Enable the plugin - </h3>';}








