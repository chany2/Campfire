<html>
   <head>
      <title>Campfire Chat Homepage</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Create Real Sales Opportunities on Any Link You Share.">
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Raleway:900" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   </head>
   <style type="text/css">
      body{
      text-align: center;
      font-family: 'Libre Baskerville', serif;
      font-size: 3vmin;
      color: #3D3D3D
      }
      h1{
      font-family: 'Raleway', sans-serif;
      font-size: 5vw;
      color:#DF0A09;
      }
      p{
      color: #6E6E6E
      }
      .container {
      height: 50%!important;
      max-width: 100%!important;
      display: flex;
      position: fixed;
      align-items: center;
      justify-content: center;
      margin: 0px;
      padding: 0px;
      }
      ._30ss{
      display: block;
      }
   </style>
   <body>
      <div class="container">
         <div>
            <h1>CAMPFIRE CHATS</h1>
            <h2>Turn sharing content into sales opportunities</h2>
            <p>Add chat to any link you share</p>
         </div>
      </div>
      <div class="fixed-bottom">
         <div class="bottom-navbar">
            <div class="row">
               <div class="col-md-12">
                  <form action="result.php">
                     <div class="form-group">
                        <input id="url" name="url" class="form-control" type="text" placeholder="Enter URL"/>
                     </div>
                     <div class="form-group">
                        <textarea id="message1" name="message1" class="form-control" placeholder="Type Message #1..."></textarea>
                     </div>
                     <!-- <div class="form-group">
                        <textarea id="message2" name="message2" class="form-control" placeholder="Type Message #2..."></textarea>
                     </div> -->
                     <div class="form-group">
                        <input id="facebook-url" name="facebook-url" class="form-control" type="text" placeholder="Your facebook profile URL"/>
                     </div>
                     <div class="form-group">
                        <input id="cta" name="cta" class="form-control" type="text" placeholder="Type CTA"/>
                     </div>
                     <div class="form-group">
                        <input type="submit" class="btn btn-success" value="OK"/>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script type="text/javascript">
      $(document).ready(function(){
        $("#submit").click(function(){

            // SAVE LOCALSTORAGE
            $('input[type="text"]').each(function(){    
              var id = $(this).attr('id');
              var value = $(this).val();
             localStorage.setItem(id, value);
            }); 
            $('textarea').each(function(){    
              var id = $(this).attr('id');
              var value = $(this).val();
             localStorage.setItem(id, value);
            }); 

          var url = $("#url").val();
          if(url != ""){
            $(location).attr('href', 'result.php?url=' + url);
          }
        });

        // LOAD LOCALSTORAGE
        $('input[type="text"]').each(function(){    
            var id = $(this).attr('id');
            var value = localStorage.getItem(id);
            $(this).val(value);  
         }); 
        $('textarea').each(function(){    
            var id = $(this).attr('id');
            var value = localStorage.getItem(id);
            $(this).val(value);  
         }); 

        // CONVERT USER PROFILE TO CTA
        $('#facebook-url').keyup(function() {
            var profile_url = $('#facebook-url').val();
           if (profile_url.indexOf("facebook.com") >= 0){
               var cta_url = 'https://www.m.me'+ /.com(.+)/.exec(profile_url)[1];
               $('#cta').val(cta_url);
           }else if(profile_url.indexOf("linkedin.com") >= 0){
               var regex = /(?:\/.*\/)(.*)/;
               var user_id = regex.exec(profile_url)[1];
               var cta_url = 'https://www.linkedin.com/messaging/compose/?after=mynetwork.index&recipient='+ user_id;
               $('#cta').val(cta_url);
           }
         })
      });
   </script>
</html>